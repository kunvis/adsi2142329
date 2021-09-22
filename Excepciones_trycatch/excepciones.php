<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excepciones</title>
</head>
<body>
    <!--EXCEPCIONES-->
    <?php
        /*$num=20;
         try {
            for ($i=0; $i < $num ; $i++) { 
                if ($num%$i==0) {
                    echo $i. 'Es divisor';
                }
            }
         } catch (Error $e) {
             echo $e->getMessage().' Salida Error';
         }
         echo '<br>Despues del ciclo for';*/
    ?>
    <!--CONEXION A LA BASE DE DATOS PDO-->
    <?php
        //PDO data objects
        $dns='mysql:host=localhost;dbname=colegio_pru';
        $username='root';
        $password='';
        try {
            $conexion= new PDO($dns,$username,$password);
            $statement=$conexion->prepare('select * from estudiantes');
            $statement->execute();
        } catch (PDOException $obj) {
            echo $obj->getMessage();
            /*echo '<br>';
            echo '<br>Este mensaje lo escribe el programador<br>';*/
        }
        /*echo '<br>';
        echo 'No se genero el objeto PDO';*/
        /*var_dump($conexion);*/
        var_dump($statement);
        /*foreach ($statement as $key) {
            echo '<br>--------------------------------------------------------';
            echo '<br>-'.'id estudiante -'. $key['id_estudiante']. '<br>';
            echo '<br>-'.'nombre estudiante -'.$key['nombres_est'].'<br>';
            echo '<br>-'.'apellido estudiante -'.$key['apellido_est'].'<br>';
            echo '<br>-'.'direccion -'.$key['direccion_est'].'<br>';
            echo '<br>-'.'telefono -'.$key['telefono_est'].'<br>';
            echo '<br>-'.'contraseña -'.$key['password_est'].'<br>';
            echo '<br>-'.'id grupo -'.$key['id_grupo'].'<br>';
        }*/
        while ($key=$statement->fetch()) {
            echo '<br>';
            echo '°id estudiante -'.$key['id_estudiante'];
            echo ' °nombre estudiante -'.$key['nombres_est'];
            echo ' °apellido estudiante -'.$key['apellido_est'];
            echo ' °direccion -'.$key['direccion_est'];
            echo ' °telefono -'.$key['telefono_est'];
            echo ' °contraseña -'.$key['password_est'];
            echo ' °id grupo -'.$key['id_grupo'];
            echo '<br>';
        }
    ?>
</body>
</html>