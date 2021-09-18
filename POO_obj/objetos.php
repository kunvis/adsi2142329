q
<?php
    //notacion camell case
    include('persona.php');
    
    class aprendiz extends persona{
        private $nombre;
        private $documento;
        private $ficha;


        function __construct($nombre,$documento,$ficha,$ciudad,$telefono){
            parent::__construct($ciudad,$telefono);
            $this->nombre=$nombre;
            $this->documento=$documento;
            $this->ficha=$ficha;
           // echo 'soy el constructor'.'<br>';
        }
        function setter($atributo,$valor){
            $this->$atributo=$valor;

        }
        function getter($atributo){
            return $this->$atributo;
        }
        /*function setNombre($nombre){
            $this->nombre=$nombre;

        }
        function setDocumento($documento){
            $this->documento=$documento;

        }
        function setFicha($ficha){
            $this->ficha=$ficha;

        }*/
        function getDocumento(){
            return $this->documento;
        }
        function getNombre(){
            return $this->nombre;
        }
        function getFicha(){
            return $this->ficha;
        }
    }
    $ob=new aprendiz("Darcy",1234567,2142329,'Soacha',0101010101);
    

    $ob-> setter("nombre","Darcy");
    $ob-> setter("documento",1234567);
    $ob-> setter("ficha",2142329);
    echo $ob-> datos();
    echo $ob->getter("nombre");
    echo $ob->getter("documento");
    echo $ob->getter("ficha");
    /*$ob->setDocumento(1234567);
    $ob->setNombre("Darcy");
    $ob->setFicha(2142329);*/

    /*echo $ob->getDocumento();
    echo "<br>";
    echo $ob->getNombre();
    echo "<br>";
    echo $ob->getFicha();*/
    
    

    //var_dump($ob);
    //$num=10;
    //$real=1.5;

?>