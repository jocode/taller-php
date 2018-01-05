## Arreglo o Arrays
Es una variable que puede almacenar más de un valor, los arreglos se trabajan como un objeto.

```php
<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// Asignación de datos al arreglo dinámicamente
$arreglo[] = 23;
$arreglo[] = "Papá";

// a partir de PHP 5.4
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
?>
```

> Un arreglo en PHP puede almacenar distintos tipos de datos

## Contar posiciones en arreglos 
* __count()__ Cuenta todos los elementos de un array o algo de un objeto
* __sizeof()__ Es un alias de la función count

* __iteración:__ Es una vuelta que se le da a un ciclo.

## Iterar sobre arrays o arreglos 
Se pueden iterar arreglos con los ciclos que hemos visto anteriormente: while, do-while o for. Sin embargo, existe el constructor foreach, que es especial para iterar sobre arrays y objetos.

```
foreach (expresión_array as $valor)
    sentencias
foreach (expresión_array as $clave => $valor)
    sentencias
```

```php
foreach ($arreglo as $key => $value){
  echo $key." => ".$value."<br/>";
}
```

## Tipos de arreglos 

* __Unidimensional:__ Tiene una fila de registros.
* __Multidimensional:__ Tiene más de una fila de registros.