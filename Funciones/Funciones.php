
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <br><br>
        <center>
            <h3>RESULTADO</h3>
            <?php
                //generar numeros aleatorios
                $num=$_POST['num'];
                $nums1=array();
                for ($i=0; $i<$num ; $i++) { 
                    $nums1[$i]=rand(0,100);
                }
                for ($i=0; $i <$num ; $i++) { 
                    echo $nums1[$i].',';
                }
                function calcular_NumeroMayor($nums1){
                    $mayor=0;
                foreach ($nums1 as $valor) {
                    if ($valor>$mayor)
                    $mayor = $valor;
                }
                return $mayor;
                }
                echo "<br>"."El numero mayor es: ".calcular_NumeroMayor($nums1)."<br>";
                //--------------------------------------------------------------
                
                function calcular_NumeroMenor($nums1){
                    $menor=min($nums1);
                return $menor;
                }
                echo "El numero menor es: ".calcular_NumeroMenor($nums1).'<br>';
                //--------------------------------------------------------------

                function calcular_prom($numeros){
                    $sum=0;
                    for ($i=0; $i <count($numeros) ; $i++) { 
                        $sum+=$numeros[$i];
                    }
                    return $sum;
                }
                echo "El promedio es: ".calcular_prom($nums1)/$num."<br>";
                //--------------------------------------------------------------

                function calcular_mediana($nums1) {
                    sort($nums1);
                    $count = count($nums1);
                    $num = floor(($count-1)/2);
                    if($count % 2) {
                    $median = $nums1[$num];
                    } else {
                    $a = $nums1[$num];
                    $b = $nums1[$num+1];
                    $median = (($a+$b)/2);
                    }
                    return $median;
                }
                echo 'La mediana es: '.calcular_mediana($nums1);
            ?>
        </center>
    </body>
    </html>