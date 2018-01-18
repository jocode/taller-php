# Upload simple y múltiple

**$\_FILES** Es una array asociativo propio de PHP, que permite recibir _**archivos binarios**_ desde un formulario.
Es necesario que al enviar el formulario, usemos el método $\_POST


* __copy__ Es una función que permite copiar archivos desde un PC a un servidor.

```php
bool copy ( string $source , string $dest [, resource $context ] )
```

Realiza un copia del fichero source a dest.

Más información en:
- http://php.net/manual/es/function.copy.php 
- http://php.net/manual/es/reserved.variables.files.php

* __rename()__ Ésta función permite mover un fichero.


Cuando envía los formularios por el método POST, se envían los datos en background.

**Importante**
Cuando vamos a subir archivos al servidor, debemos crear un input de tipo file, y además a la etiqueta form debemos agregar la propiedad enctype.

```html 
<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="file"/>
</form>
```

De esta manera, con __enctype="multipart/form-data"__ estamos indicando al navegador que ese formulario está autorizado de tomar archivos del Computador y se puedan cargar los archivos al servidor.


## Cargar múltiples archivos 

Para cargar múltiples archivos al servidor, debemos colocar el name del input con corchetes [], para indicar al servidor que es una array, e indicarle la propiedad multipart="true"

```html 
<input type="file" name="file[]" multiple="true" />
```

En el servidor, le indicamos la posición del arreglo, al que queremos acceder, de esta manera 

```php 
$_FILES['file']['name'][0]
```


Ejemplos de carga de archivos 
- [_Carga de archivo simple_](https://github.com/jocode/taller-php/blob/master/17-Upload-simple-y-multiple/ejemplo_1.php)
- [_Carga de múltiples archivos_](https://github.com/jocode/taller-php/blob/master/17-Upload-simple-y-multiple/ejemplo_2.php)
