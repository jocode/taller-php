# Creación de un Paginador 

En este ejemplo veremos cómo crear una pequeña funcionalidad para implementar un paginador de registros.

Para construir un paginador, debemos tener en cuenta la cláusula **LIMIT** de **SQL**, que nos permite restringir la cantidad de datos a consultar.

Por ejemplo esta consulta, mostrará 10 registros, desde la posición 0
```sql 
SELECT * FROM paises LIMIT 0, 10
```

La cláusula `LIMIT` recibe dos valores:
- El número de registro inicial
- La cantidad de registros a mostrar

> **Para tener claro**
>
> Siempre que hagamos una paginación tenemos que hacer 2 consultas a la base de datos.
> - Una para contar todos los registros de la consulta
> - Otra para listar el grupo de registros que hemos seleccionado (LIMIT)

La funcionalidad de la paginación, la hemos creado en el archivo [_**paginador.php**_](paginador.php). 

En él hemos creado dos variables: `datos` y `paginación`
```php 
private $_datos; # Registros devueltos por la paginación
private $_paginacion; # Almacena datos de la paginacion
```

En la variable paginación, guardamos los datos de cada páginación, para tenerlos en cuenta en la creación de los enlaces.

La cantidad total de páginas, las sacamos haciendo una simple división entre la cantidad total de datos sobre la cantidad de registros a mostrar por cada página 
```php 
# Obtiene el total de las páginas
$total_paginas = ceil($registros / $limite);
```

La secuencia de las páginas, las tomamos por la url, en este caso en el archivo [_**index.php**_](index.php) a través de una variable que viene vía `GET` la cuál enviamos en los link de la paginación.

Los botones de navegación los construimos en base a la variable `_paginacion` del archivo [paginador.php](paginador.php). Ésta variable es un array de tipo clave => valor 
```php 
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
```

Es importante tener en cuenta para la paginación, qué en los enlaces:
- En el Primero, lo dirigimos a la página inicial (1)
- Para ir a anterior, decrementamos la página en 1
- Para siguiente, aumentamos la página en 1
- En el último, agregamos la última página

## Cómo usamos el paginador 

- Instanciando la clase paginador.
- Obtenemos la página a través del atributo página que viene vía `GET`
- Creamos la sentencia SQL para seleccionar los datos
- El paginador se encarga de crear la otra consulta para usar la sentencia **LIMIT**
- Obtenemos los datos con el método `paginar($sql, $pagina, 20);`, que recibe la consulta, la página, y la cantidad de registros por página.
- Obtenemos los datos de la paginación, usando el método `getPaginacion()`

Ver el ejemplo en [__*index.php*__](index.php)

```php 
$paginador = new Paginador();
$pagina = $_GET['pagina'];
$sql = "SELECT * FROM paises";
$datos = $paginador->paginar($sql, $pagina, 20);

$params = $paginador->getPaginacion();
```

