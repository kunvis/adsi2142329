<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPASO LOGICA DE PROGRAMACION WEB</title>
</head>
<body>
    <br><br>
    <br><br>
    <center>
        <?php 
        echo 'Comenzamos ARREGLOS EN PHP <br>';
        $barrios= array();
        $barrios[0]='amistad';
        $barrios[1]='neruda';
        $barrios[2]='terreros';
        $barrios[3]='san mateo';
        $ciudades=['soacha','sibate','granada'];
        $numeros=array();
        $otroarray=[1,2,3,4,5,6,7,8,9];
        //Funcion Suma de Arreglos
        
        function sumaArray($nums){
            $suma=0;
            for ($i=0; $i <count($nums) ; $i++) { 
                $suma=$suma+$nums[$i];
            }
            return $suma;
        }


        for ($i=0; $i < 20; $i++) { 
            $numeros[$i]=rand(0,100);
        }

        for ($i=0; $i <20 ; $i++) { 
            echo $numeros[$i].',';
        }
        echo '<br>';
        // $suma=0;
        // for ($i=0; $i <20 ; $i++) { 
        //     $suma=$suma+$numeros[$i];
        // }
        echo "la suma es: ".sumaArray($numeros).'<br>';
        echo "la suma es: ".sumaArray($otroarray);
        ?>
    </center>
</body>
</html>