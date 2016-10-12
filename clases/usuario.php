<?php

class Usuario {

	private $id;
	private $nombre;
	private $apellido;
	private $direccion;
	private $ciudad;
	private $sexo;
	private $provincia;
	private $codPostal;
	private $password;
	private $confirmPassword;
	private $mail;

	public function __construct(Array $miUsuario)
	{
		$this->id = $miUsuario["id"];
		$this->nombre = $miUsuario["nombre"];
		$this->apellido = $miUsuario["apellido"];
		$this->password = $miUsuario["password"];
		$this->mail = $miUsuario["mail"];
		$this->sexo = $miUsuario["sexo"];
		$this->ciudad = $miUsuario["ciudad"];
		$this->direccion = $miUsuario["direccion"];
		$this->provincia = $miUsuario["provincia"];
		$this->codPostal = $miUsuario["codPostal"];
		$this->confirmPassword = $miUsuario["confirmPassword"];
		
	}

	public function getNombre() {
		return $this->nombre;
	}
	public function getApellido() {
		return $this->apellido;
	}
	public function getId() {
		return $this->id;
	}
	public function getMail() {
		return $this->mail;
	}
	public function getSexo() {
		return $this->sexo;
	}
	public function getCiudad(){
		return $this->ciudad;
	}
	public function getProvincia(){
		return $this->provincia;
	}
	public function getDireccion()
	{
		return $this->direccion;
	}
	public function getCodPostal(){
		return $this->codPostal;
	}
	public function getPassword() {
		return $this->password;
	}


	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}
	public function setApellido($apellido)
	{
		$this->apellido = $apellido;
	}
	public function setMail($mail)
	{
		$this->mail = $mail;
	}
	public function setPassword($password)
	{
		$this->password = password_hash($password, PASSWORD_DEFAULT);
	}
	public function setSexo($sexo)
	{
		$this->sexo = $sexo;
	}
	public function setId($id)
	{
		$this->id = $id;
	}
	public function setCiudad($ciudad)
	{
		$this->ciudad = $ciudad;
	}
	public function setProvincia($provincia)
	{
		$this->provincia = $provincia;
	}
	public function setDireccion($direccion)
	{
		$this->direccion = $direccion;
	}
	public function setCodPostal($codPostal)
	{
		$this->codPostal = $codPostal;
	}

/*
	public function guardarImagen()
	{
		if ($_FILES["imagen"]["error"] == UPLOAD_ERR_OK)
		{
			// No hubo errores :)
			$path = $_FILES['imagen']['name'];
			$ext = pathinfo($path, PATHINFO_EXTENSION);

			$miArchivo = dirname(__FILE__);
			$miArchivo = $miArchivo . "/img/";
			$miArchivo = $miArchivo . $this->getId() . "." . $ext;

			move_uploaded_file($_FILES["imagen"]["tmp_name"], $miArchivo);
		}
	}
	*/
}
