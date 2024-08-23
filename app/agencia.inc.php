<?php

class Agencia{

	private $agencia;
	private $nombre;
	private $zona;
	private $literal;

	public function __construct($agencia, $nombre, $zona, $literal){
		$this -> nombre = $nombre;
		$this -> zona = $zona;
		$this -> agencia = $agencia;
		$this -> literal = $literal;
	
	}


	public function obtenerNombre(){
		return $this -> nombre;
	}

	public function obtenerZona(){
		return $this -> zona;
	}
	public function obtenerAgencia(){
		return $this -> agencia;
	}

	public function obtenerLiteral(){
		return $this -> literal;
	}

	public function establecerNombre($nombre){
		$this -> nombre = $nombre;	
	}
	public function establecerZona($zona){
		$this -> zona = $zona;
	}
	public function establecerAgencia($agencia){
		$this -> agencia = $agencia;	
	}
	public function establecerLiteral($literal){
		$this -> literal = $literal;
	}

}