<html>
<center>
<?php
echo '<br>';
echo '<h1><strong>Revista</strong></h1>';
include ('revista.php');
class Biblioteca{
    private $revista;    

    function __construct(){
        $this->revista=array();
    }
    
    function adicionar($material){
        array_push($this->revista,$material);
    }

    function verMateriales(){
        for ($i=0; $i <count($this->revista) ; $i++) { 
            echo $this->revista[$i]->gettema();
        }
    }
    
}

$dator=new Biblioteca();
$dator->adicionar($ob);
$dator->verMateriales();
echo '<br>';
echo '<h1><strong>Libro</strong></h1>';
include ('libros.php');
class Biblioteca1{
    private $libro;    

    function __construct(){
        $this->libro=array();
    }
    
    function adicionar($material1){
        array_push($this->libro,$material1);
    }

    function verMateriales(){
        for ($i=0; $i <count($this->libro) ; $i++) { 
            echo $this->libro[$i]->getAutor();
        }
    }
    
}

$datol=new Biblioteca1();
$datol->adicionar($ob2);
$datol->verMateriales();

?>
</center>
</html>