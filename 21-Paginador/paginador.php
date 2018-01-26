<?php 

class Paginador extends DB {

	private $_datos; # Registros devueltos por la paginación
	private $_paginacion; # Almacena datos de la paginacion

	public function __construct(){
		parent::__construct();
		$this->_datos = array();
		$this->_paginacion = array();
	}

	public function paginar($query, $pagina = false, $limite = false){
		# Si no se envía un límite de registro, se va a establecer en 10
		if ($limite && is_numeric($limite)){
			$limite = $limite;
		} else {
			$limite = 10;
		}

		if ($pagina && is_numeric($pagina)){
			$pagina = $pagina;
			$inicio = ($pagina - 1) * $limite;
		} else {
			$pagina = 1;
			$inicio = 0;
		}

		# Consulta 
		$consulta = $this->_db->query($query);

		$registros = $consulta->num_rows;
		# Obtiene el total de las páginas
		$total_paginas = ceil($registros / $limite);

		# Consultamos los registros que establecemos con LIMIT
		$query = $query . " LIMIT $inicio, $limite";
		$consulta = $this->_db->query($query);

		while ($row = $consulta->fetch_object()){
			$this->_datos[] = $row;
		}

		# Construcción del paginador
		$paginacion = array();
		$paginacion['actual'] = $pagina;
		$paginacion['total'] = $total_paginas;

		# Si la página es mayor a 1, mostramos los enlaces de primero y anterior
		if ($pagina > 1){
			$paginacion['primero'] = 1;
			$paginacion['anterior'] = $pagina - 1;
		} else {
			$paginacion['primero'] = '';
			$paginacion['anterior'] = '';
		}

		# Si la página es menor al total de páginas, mostramos el enlace de ultimo y siguiente
		if ($pagina < $total_paginas){
			$paginacion['ultimo'] = $total_paginas;
			$paginacion['siguiente'] = $pagina + 1;
		} else {
			$paginacion['ultimo'] = '';
			$paginacion['siguiente'] = '';
		}

		$this->_paginacion = $paginacion;

		return $this->_datos;
	}

	public function getPaginacion(){
		if ($this->_paginacion){
			return $this->_paginacion;
		} else {
			return false;
		}
	}

}

?>