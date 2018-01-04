# Sintaxis básico en PHP

### Comentarios
Cada leguaje de programación tiene sus símbolos para generar comentarios. Éstos son ignorados por el intérprete del lenguaje.

* Comentarios en PHP
```php
<?php
// Esto es un comentario
# Esto es un comentario 
/* Esto es un comentario 
multilínea */
?>
```

* Comentario en HTML (DOM)
```html 
<!--Esto es un comentario DOM-->
```

### Persistencia 
Son un conjunto de información almacenada a la cual nosotros vamos a hacerle peticiones para poder mostrarla en aplicaciones. Hay tres tipos de persistencia:
* __Temporal:__ Se almacena información en tiempo de ejecución de la aplicación.
	* Variables
	* Sessiones
	* Cookies
* __Remota:__ Consultas remotas que generalmente trabajan con APIs SOAP o RestFull 
* __Permanente:__ Bases de datos, txt, xml... 

**Aplicación**
* Conjunto de datos
* Desplegados en una interfaz gráfica
* Utilizado por un grupo de usuarios con distintos perfiles de acceso a las funcionalidades

### Variable 
Símbolo que representa un valor que puede variar.
A nivel de programación se reserva un espacio en la memoria RAM (Random Access Memory) en tiempo de ejecución.

En PHP las variables empiezan con signo de dollar ($)
```php
$mivariable = 23;
```
El espacio de memoria se reserva sólo en tiempo de ejecución de la aplicación.

**¿Dónde se almacena el espacio en memoria?**
- [ ] En el PC del cliente
- [x] En el servidor Apache

> Por cada usuario el servidor crea una instancia temporal de tiempo de ejecución del script

Las variables en PHP 
* No pueden empezar con un número
* Con caracteres especiales
* Espacios en blanco, en vez de eso reemplazar espacios en blanco con guión bajo o estructura camelCase 

### Tipos de datos 
Es información que se puede almacenar en una variable y puede tener diferentes formatos como texto o números.
* __Números:__ Enteros, decimales.
* __Textos:__ Cadenas, String.
* __Fechas__
* __Booleanos__
* __Bytes__

En PHP generalmente no se declaran los tipos de datos. PHP asigna dinámicamente los tipos de datos.