<?php
class b
{
	private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM usuarios_dr");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new a();

				$alm->__SET('id', $r->id);
				$alm->__SET('tipo_documento', $r->tipo_documento);
				$alm->__SET('numero_documento', $r->numero_documento);
				$alm->__SET('nombre', $r->nombre);
				$alm->__SET('apellido_1', $r->apellido_1);
                $alm->__SET('apellido_2', $r->apellido_2);
				$alm->__SET('comuna', $r->comuna);
				$alm->__SET('telefono', $r->telefono);
				$alm->__SET('direccion', $r->direccion);
				$alm->__SET('correo', $r->correo);
				$alm->__SET('contraseña', $r->contraseña);

				$result[] = $alm;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuarios_dr WHERE id = ?");
			          

			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new a();

			$alm->__SET('id', $r->id);
			$alm->__SET('tipo_documento', $r->tipo_documento);
			$alm->__SET('numero_documento', $r->numero_documento);
			$alm->__SET('nombre', $r->nombre);
			$alm->__SET('apellido_1', $r->apellido_1);
            $alm->__SET('apellido_2', $r->apellido_2);
			$alm->__SET('comuna', $r->comuna);
			$alm->__SET('telefono', $r->telefono);
            $alm->__SET('direccion', $r->direccion);
			$alm->__SET('correo', $r->correo);
			$alm->__SET('contraseña', $r->contraseña);

			return $alm;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE FROM usuarios_dr WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(a $data)
	{
		try
		{
			$sql = "UPDATE usuarios_dr SET 
						tipo_documento          = ?, 
						numero_documento        = ?,
						nombre                  = ?,
                        apellido_1              = ?, 
						apellido_2              = ?,
						comuna                  = ?,
                        telefono                = ?, 
						direccion               = ?,
						correo                  = ?, 
						contraseña              = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					$data->__GET('tipo_documento'), 
					$data->__GET('numero_documento'), 
					$data->__GET('nombre'),
					$data->__GET('apellido_1'),
                    $data->__GET('apellido_2'), 
					$data->__GET('comuna'), 
					$data->__GET('telefono'),
					$data->__GET('direccion'),
                    $data->__GET('correo'), 
					$data->__GET('contraseña'),
					$data->__GET('id')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(a $data)
	{
		try 
		{
		$sql = "INSERT INTO usuarios_dr (tipo_documento,numero_documento,nombre,apellido_1,apellido_2,comuna,telefono,direccion,correo,contraseña) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
            array(
				$data->__GET('tipo_documento'), 
				$data->__GET('numero_documento'), 
				$data->__GET('nombre'),
				$data->__GET('apellido_1'),
                $data->__GET('apellido_2'), 
				$data->__GET('comuna'), 
				$data->__GET('telefono'),
				$data->__GET('direccion'),
                $data->__GET('correo'), 
				$data->__GET('contraseña')
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}