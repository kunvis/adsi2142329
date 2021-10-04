<?php
class a
{
	private $id;
	private $tipo_documento;
	private $numero_documento;
	private $nombre;
	private $apellido_1;
	private $apellido_2;
	private $comuna;
	private $telefono;
	private $direccion;
	private $correo;
	private $contraseña;

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}