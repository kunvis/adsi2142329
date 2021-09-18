<?php
class persona{
    private $ciudad='';
    private $telefono=0;

    function __construct($ciudad,$telefono){
        $this->ciudad=$ciudad;
        $this->telefono=$telefono;
    }

    function datos(){
        return 'Vivo en:'.$this->$ciudad.'y mi numero es: '.$this->$telefono;
    }
}
?>