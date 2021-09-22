<?php 
include_once ('material.php');
class Libro extends Material{
    
     private $editorial; 
     private $numeroPaginas;
     private $numeroCapitulos;
        
function __construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status,$editorial,$numeroPaginas,$Capitulos){
    parent::__construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status);
    $this->editorial=$editorial;
    $this->numeroPaginas=$numeroPaginas;
    $this->Capitulos=$Capitulos;
}
    function setEditorial($editorial){        
        $this->editorial=$editorial;
    }
    function setnumeroPaginas($numeroPaginas){
        $this->numeroPaginas=$numeroPaginas;
    }
    function setCapitulos($Capitulos){
        $this->Capitulos=$Capitulos;
    }
    function getEditorial(){
        return $this->editorial;
    }
    function getnumeroPaginas(){
        return $this->numeroPaginas;
    }
    function getCapitulos(){
        return $this->Capitulos;
    }

    function getAutor(){
        return $this->autor;
    }
}
$ob2=new Libro('papel','606094','Gabriel Garcia Marquez','100 años de soledad',1990,'Excelente Calidad','Norma','1500','100');
echo $ob2->datos().'<br>';
echo '<b>'.'EDITORIAL:'.'</b>'.$ob2->getEditorial().'<br>';
echo '<b>'.'NUMERO DE PAGINAS:'.'</b>'.$ob2->getnumeroPaginas().'<br>';
echo '<b>'.'CAPITULOS:'.'</b>'.$ob2->getCapitulos().'<br>';
?>
