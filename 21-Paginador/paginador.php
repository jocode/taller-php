<?php 

class Paginador extends DB {

	private $_datos; # Registros devueltos por la paginación
	private $_paginacion; # Almacena datos de la paginacion

	public function __construct(){
		parent::__construct();
		$this->_datos = array();
		$this->_paginacion = array();
	}

	/**
	* Este método permite paginar registros, de acuerdo a una consulta que se pase
	*/
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

	public function getRangoPaginacion($limite = false){
		if ($limite && is_numeric($limite)){
			$limite = $limite;
		} else {
			$limite = 5;
		}

		$total_paginas = $this->_paginacion['total'];
		$pagina_seleccionada = $this->_paginacion['actual'];
		# El rango obtiene datos del lado izquierdo, y del lado derecho en base a la página actual
		$rango = ceil($limite / 2);
		$paginas = array();

		#---------------------------------------------------
		# Determinamos el rango del lado derecho |actual| ==>
		/**
		* Por ejemplo, tenemos un límite de 5 pag, y un rango de 3 
		* rango_derecho = 10 - 8   
		* rango derecho = 2
		*/
		$rango_derecho = $total_paginas - $pagina_seleccionada;

		if ($rango_derecho < $rango){
			# Por ejemplo resto = 3 - 2 => 1
			$resto = $rango - $rango_derecho;
		} else {
			$resto = 0;
		}

		# ------------------------------------------------------------
		# Determinamos el rango izquierdo  <== |actual|
		/**
		* rango_izquierdo = 8 - (3 + 1)
		* rango_izquierdo = 4
		*/
		$rango_izquierdo = $pagina_seleccionada - ($rango + $resto);

		# Para i = 8, mientras i sea mayor a 4, decremente i en -1, me va a imprimir 8, 7, 6 y 5
		for ($i = $pagina_seleccionada; $i > $rango_izquierdo; $i--){
			if ($i == 0){
				break;
			}
			# Almacenamos las páginas del rango izquierdo
			$paginas[] = $i;
		}

		# --------------------------------------------------------
		# La función sort de php,ordena el arreglo de menor a mayor
		sort($paginas);

		# --------------------------------------------------------
		# Determinamos rango del lado derecho  |actual| ==>
		/**
		*    Si 8 < 3 => rango_derecho = 5
		*    Sino rango_derecho =  8 + 3 = 11
		*/
		if ($pagina_seleccionada < $rango){
			$rango_derecho = $limite;
		} else {
			# Esta suma puede dar un número mayor al total de páginas
			$rango_derecho = $pagina_seleccionada + $rango;
		}

		/**
		* Para i = 8+1, mientras 8 sea <= 11 entonces incremente i en 1,
		* Imprimirá 9, 10, pero 11 es mayor al total de páginas, entonces de sale del ciclo
		* Colocamos: pagina_actual + 1, para que no se incluya la página actual
		*/
		for ($i = $pagina_seleccionada + 1; $i <= $rango_derecho; $i++){
			# Si i, es mayor al total de las páginas, salga del ciclo
			if ($i > $total_paginas){
				break;
			}

			# Almacenamos las páginas del rango derecho
			$paginas[] = $i;
		}

		# Finalmente guardamos las páginas en el array asociativo _paginacion como 'rango'
		$this->_paginacion['rango'] = $paginas;

		return $this->_paginacion;
	}

	/**
	* Obtenemos la paginación de acuerdo a la página actual, con el podemos construir los botones de navegación
	*/
	public function getPaginacion(){
		if ($this->_paginacion){
			return $this->_paginacion;
		} else {
			return false;
		}
	}



}

?>