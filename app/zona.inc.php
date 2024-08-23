<?php

class Zona{

	private $zona;
	private $nombre_zona;
	private $nomenclatura;

	public function __construct($zona, $nombre_zona, $nomenclatura){
		$this -> zona = $zona;
		$this -> nombre_zona = $nombre_zona;
		$this -> nomenclatura = $nomenclatura;
	}


	public function obtenerZona(){
		return $this -> zona;
	}

	public function obtenerNombreZona(){
		return $this -> nombre_zona;
	}
	public function obtenerNomenclatura(){
		return $this -> nomenclatura;
	}

	public function establecerNombre($zona){
		$this -> zona = $zona;	
	}
	public function establecerNombrezona($nombre_zona){
		$this -> nombre_zona = $nombre_zona;
	}
	public function establecerNomenclatura($nomenclatura){
		$this -> nomenclatura = $nomenclatura;
	}

}