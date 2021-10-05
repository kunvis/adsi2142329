<?php
    require_once '../modelo/a.a.php';
    require_once '../controlador/b.a.php';
    
// Logica
$alm = new a();
$model = new b();

if(isset($_REQUEST['action']))
{
	switch($_REQUEST['action'])
	{
		case 'actualizar':
			$alm->__SET('id',                   $_REQUEST['id']);
            $alm->__SET('tipo_documento',       $_REQUEST['tipo_documento']);
            $alm->__SET('numero_documento',     $_REQUEST['numero_documento']);
            $alm->__SET('nombre',               $_REQUEST['nombre']);
            $alm->__SET('apellido_1',           $_REQUEST['apellido_1']);
            $alm->__SET('apellido_2',           $_REQUEST['apellido_2']);
			$alm->__SET('comuna',               $_REQUEST['comuna']);
			$alm->__SET('telefono',             $_REQUEST['telefono']);
			$alm->__SET('direccion',            $_REQUEST['direccion']);
			$alm->__SET('correo',               $_REQUEST['correo']);
			$alm->__SET('contraseña',           $_REQUEST['contraseña']);

			$model->Actualizar($alm);
			header('Location: index.php');
			break;

		case 'registrar':
			$alm->__SET('id',                   $_REQUEST['id']);
            $alm->__SET('tipo_documento',       $_REQUEST['tipo_documento']);
            $alm->__SET('numero_documento',     $_REQUEST['numero_documento']);
            $alm->__SET('nombre',               $_REQUEST['nombre']);
            $alm->__SET('apellido_1',           $_REQUEST['apellido_1']);
            $alm->__SET('apellido_2',           $_REQUEST['apellido_2']);
			$alm->__SET('comuna',               $_REQUEST['comuna']);
			$alm->__SET('telefono',             $_REQUEST['telefono']);
			$alm->__SET('direccion',            $_REQUEST['direccion']);
			$alm->__SET('correo',               $_REQUEST['correo']);
			$alm->__SET('contraseña',           $_REQUEST['contraseña']);

			$model->Registrar($alm);
			header('Location: index.php');
			break;

		case 'eliminar':
			$model->Eliminar($_REQUEST['id']);
			header('Location: index.php');
			break;

		case 'editar':
			$alm = $model->Obtener($_REQUEST['id']);
			break;
	}
}

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Dao & Crud</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
	</head>
    <body style="padding:15px;">

        <div class="pure-g">
            <div class="pure-u-1-12">
                
                <form action="?action=<?php echo $alm->id > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">
                    <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
                    
                    <table style="width:500px;">
                        <tr>
                            <th style="text-align:center;">Tipo de Documento</th>
                            <td>
                                <select name="tipo_documento" style="width:100%;">
                                    <option value="1" <?php echo $alm->__GET('tipo_documento') == 1 ? 'selected' : ''; ?>>Cedula Extranjera</option>
                                    <option value="2" <?php echo $alm->__GET('tipo_documento') == 2 ? 'selected' : ''; ?>>Cedula de Ciudadania</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:center;">Número de Documento</th>
                            <td><input type="text" name="numero_documento" value="<?php echo $alm->__GET('numero_documento'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:center;">Nombre</th>
                            <td><input type="text" name="nombre" value="<?php echo $alm->__GET('nombre'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:center;">Primer Apellido</th>
                            <td><input type="text" name="apellido_1" value="<?php echo $alm->__GET('apellido_1'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:center;">Segundo Apellido</th>
                            <td><input type="text" name="apellido_2" value="<?php echo $alm->__GET('apellido_2'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:center;">Comuna</th>
                            <td>
                                <select name="comuna" style="width:100%;">
                                    <option value="1" <?php echo $alm->__GET('comuna') == 1 ? 'selected' : ''; ?>>Compartir</option>
                                    <option value="2" <?php echo $alm->__GET('comuna') == 2 ? 'selected' : ''; ?>>Centro</option>
                                    <option value="3" <?php echo $alm->__GET('comuna') == 3 ? 'selected' : ''; ?>>La despensa</option>
                                    <option value="4" <?php echo $alm->__GET('comuna') == 4 ? 'selected' : ''; ?>>Cazuca</option>
                                    <option value="5" <?php echo $alm->__GET('comuna') == 5 ? 'selected' : ''; ?>>San Mateo</option>
                                    <option value="6" <?php echo $alm->__GET('comuna') == 6 ? 'selected' : ''; ?>>San Humberto</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:center;">Telefono</th>
                            <td><input type="text" name="telefono" value="<?php echo $alm->__GET('telefono'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:center;">Direccion</th>
                            <td><input type="text" name="direccion" value="<?php echo $alm->__GET('direccion'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:center;">Correo</th>
                            <td><input type="text" name="correo" value="<?php echo $alm->__GET('correo'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:center;">Contraseña</th>
                            <td><input type="text" name="contraseña" value="<?php echo $alm->__GET('contraseña'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th style="text-align:center;">tipo_documento</th>
                            <th style="text-align:center;">numero_documento</th>
                            <th style="text-align:center;">nombre</th>
                            <th style="text-align:center;">primer_apellido</th>
                            <th style="text-align:center;">segundo_apellido</th>
                            <th style="text-align:center;">comuna</th>
                            <th style="text-align:center;">telefono</th>
                            <th style="text-align:center;">direccion</th>
                            <th style="text-align:center;">correo</th>
                            <th style="text-align:center;">contraseña</th>									
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('tipo_documento') == 2 ? 'CC' : 'CE'; ?></td>
                            <td><?php echo $r->__GET('numero_documento'); ?></td>
                            <td><?php echo $r->__GET('nombre'); ?></td>
                            <td><?php echo $r->__GET('apellido_1'); ?></td>
                            <td><?php echo $r->__GET('apellido_2'); ?></td>
                            <td><?php echo $r->__GET('comuna'); ?></td>
                            <td><?php echo $r->__GET('telefono'); ?></td>
                            <td><?php echo $r->__GET('direccion'); ?></td>
                            <td><?php echo $r->__GET('correo'); ?></td>
                            <td><?php echo $r->__GET('contraseña'); ?></td>


                            <td>
                                <a href="?action=editar&id=<?php echo $r->id; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>