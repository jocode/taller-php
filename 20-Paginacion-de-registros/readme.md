# Paginación de registros

**NIC:** Dominio geográfico de internet asociado a cada país.

Por ejemplo si ingreso a __nic.co__, ingreso a la página donde puedo comprar un dominio __.co__, es decir de Colombia.


Para construir una paginación, debemos usar la cláusula __LIMIT__ en la base de datos, para limitar la cantidad de registros que voy a consultar. 

Con esta consulta muestro los primeros 10 registros de la tabla paises.
```sql 
SELECT * FROM paises LIMIT 0, 10
```

La cláusula LIMIT recibe dos valores: 
- El número de registro inicial
- La cantidad de registros a mostrar

Con esta consulta, muestro los últimos 10 registros de la tabla usuarios
```sql 
SELECT * FROM paises
ORDER BY id DESC
LIMIT 0, 10
```

La palabra __ORDER BY__, ordena los registros consultados por un campo en específico, en este caso el id. Hay dos formar de ordenamiento:
- **DESC** De forma descendente, es decir del último hacia atrás
- **ASC** De forma ascendente, del primero hacia adelante


Siempre que vamos a hacer una paginación, debemos hacer dos consultas SQL
- Para contar todos los registros que hay en la tabla 
- Hacer la consulta para listar sólamente el grupo de registros a mostrar

En la paginación, debemos tener la lista de páginas a mostrar, y eso se calcula de acuerdo a la cantidad de registros dividido entre los registros a mostrar por página. Por ejemplo
```php 
// Obtenemos el total de las páginas existente
$total_paginas = ceil($registros[0]->cantidad/$cantidad_resultados_por_pagina);
```

La secuencia de páginas la agregamos por la url, en este caso usando la variable pagina. De esta manera tomamos la página actual, hacemos la consulta y construimos los botones para cambiar de página.

En los botones de paginación:
- En el Primero, lo dirigimos al inicio de la página 
- Para ir a anterior, decrementamos la página en 1 
- Para siguiente, aumentamos la página en 1 
- En el último, agregamos la última página

Esa es la funcionalidad de una paginación, para ver el ejemplo mirar el archivo [*__listado.php__*](https://github.com/jocode/taller-php/blob/master/20-Paginacion-de-registros/listado.php)
