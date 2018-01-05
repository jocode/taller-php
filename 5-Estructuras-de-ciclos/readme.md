## Ciclos
Son un conjunto de rutinas que se ejecutan una cantidad de veces de acuerdo a una condición dada.

* Trabajar de forma dinámica
* Trabajar con trazabilidad: Tener en cuenta el ciclo de vida de los datos
* Vamos a reutilizar recursos
* Implementar integración de herramientas

## Ciclo while
Ejecuta las sentencia siempre que la condición sea verdadera. La expresión se verfica en cada inicio de la iteración.

**Iteración:** Es la repetición de una sentencia

```php 
<?php
$i = 1;
while ($i <= 10) {
    echo $i++;  /* el valor presentado sería $i antes del incremento (post-incremento) */
}
```

## Ciclo for 
Ejecuta la primera expresión. Al comienzo de cada iteración evalúa la segunda expresion y al final de cada iteración ejecuta la tercera expresion
```php
<?php 
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
?>
```

## Ciclo do while
El bucle do-while evalúa la expresión al final de cada iteración, por lo que se garantiza que el ciclo se ejecute al menos una vez.
```php
<?php 
$i = 0;
do {
    echo $i;
} while ($i > 0);
?>
```