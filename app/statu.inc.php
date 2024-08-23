<?php

class Statu{

	private $statu;
	private $nombre;

	public function __construct($statu, $nombre){
		$this -> statu = $statu;
		$this -> nombre = $nombre;
	}


	public function obtenerNombre(){
		return $this -> nombre;
	}

	public function obtenerStatu(){
		return $this -> statu;
	}

	public function establecerNombre($nombre){
		$this -> nombre = $nombre;	
	}
	public function establecerStatu($statu){
		$this -> statu = $statu;
	}

}