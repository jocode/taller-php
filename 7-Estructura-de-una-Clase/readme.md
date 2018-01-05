## Estructura de una clase

Una clase es un modelo que define las propiedades y métodos de un objeto.

En PHP se pueden crear más de una clase en un archivo a diferencia de otros lenguajes como java. Pero por convención es mejor crear un archivo por cada clase.

Es recomendable usar la estructura camelCase para nombrar los clases.

Una clase generalmente tiene los siguientes recursos
* __Atributos o propiedades:__ Variables 
* __Métodos:__ Son las funciones que haré con esos atributos


> Las clases son plantillas que agrupan comportamiento (métodos) y estados (atributos) de los futuros objetos.


Por convención, es recomendable dejar los atributos como privados y dejar los métodos como públicos para mostrar los valores de los atributos.

Ejemplo de clase en php 
```php
<?php
// clase base con propiedades y métodos miembro
class Verdura {

   var $comestible;
   var $color;

   function Verdura($comestible, $color="verde")
   {
       $this->comestible = $comestible;
       $this->color = $color;
   }

   function es_comestible()
   {
       return $this->comestible;
   }

   function qué_color()
   {
       return $this->color;
   }

} // fin de la clase Verdura

// ampliar la clase base
class Espinaca extends Verdura {

   var $concinada = false;

   function Espinaca()
   {
       $this->Verdura(true, "verde");
   }

   function cocinarla()
   {
       $this->concinada = true;
   }

   function está_cocinada()
   {
       return $this->concinada;
   }

} // fin de la clase Espinaca

?>
```

## Modificadores de acceso
* __public:__ Pueden ser accedidos desde cualquier instancia de la clase
* __private:__ Pueden ser accedidos __sólo__ en la misma clase
* __protected:__ Pueden ser accedidos desde las clases heredadas.

## Constructor
Hacen parte de los "métodos mágicos", y se ejecuta en el momento que se haga la instancia de la clase. Se usa generalmente para inicializar valores.

```php
public function __construct()
{
	// Sentencias
}
```
