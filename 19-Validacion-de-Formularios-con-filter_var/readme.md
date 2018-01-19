# Validación de Formularios con filter_var

PHP ofrece una serie de herramientas para validar formularios desde el lado del servidor.

http://php.net/manual/es/function.filter-var.php

Las validaciones del lado del cliente dan usabilidad, mas no seguridad, porque la información se puede alterar desde el navegador.

En este caso usamos la función __filter_var__ que Filtra una variable con el filtro que se indique.
Los tipos de filtros admitidos en PHP se pueden ver aquí:
http://php.net/manual/es/filter.filters.php 

También nos podemos crear nuestras propias funciones de validación, y haciendo uso del identificador __FILTER_CALLBACK__ y se pasa como tercer parámetro un array de tipo clave valor con el nombre de la función que se va a usar.

```php 

if (filter_var( $_POST['pais'], FILTER_CALLBACK, array("options"=>"validaSelect")) == false){
		# Your code here
	}

```

Validar formularios desde el backend, es de mucha importancia, ya que nos aseguramos que los errores en los datos se reduzcan al mínimo y así tener una buena integridad. 