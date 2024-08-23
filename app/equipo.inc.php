<?php

class Equipo{

	private $equipo;

	private $nombre;
	private $ip;
	private $mac;
	private $marca;
	private $num_serie;
	private $num_inventario;

	public function __construct($equipo, $nombre, $ip, $mac, $marca, $num_serie, $num_inventario){
		$this -> equipo = $equipo;
		$this -> nombre = $nombre;
		$this -> ip = $ip;
		$this -> mac = $mac;
		$this -> marca = $marca;
		$this -> num_serie = $num_serie;
		$this -> num_inventario = $num_inventario;
	}


	public function obtenerEquipo(){
		return $this -> equipo;
	}

	public function obtenerNombre(){
		return $this -> nombre;
	}

	public function obtenerIp(){
		return $this -> ip;
	}
	public function obtenerMac(){
		return $this -> mac;
	}

	public function obtenerMarca(){
		return $this -> marca;
	}
	public function obtenerNumeroSerie(){
		return $this -> num_serie;
	}

	public function obtenerNumeroInventario(){
		return $this -> num_inventario;
	}

	public function establecerEquipo($equipo){
		$this -> equipo = $equipo;	
	}
	public function establecerNombre($nombre){
		$this -> nombre = $nombre;	
	}
	public function establecerIp($ip){
		$this -> ip = $ip;
	}
	public function establecerMac($mac){
		$this -> mac = $mac;	
	}
	public function establecerMarca($marca){
		$this -> marca = $marca;
	}
	public function establecerNumeroSerie($num_serie){
		$this -> num_serie = $num_serie;	
	}
	public function establecerNumeroInventario($num_inventario){
		$this -> num_inventario = $num_inventario;
	}

}