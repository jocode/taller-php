
## Incluir archivos en otro con PHP
Con esta manera tenemos disponibles las funcionalidades de los demás archivos para usarlos desde el archivo del cuál lo estoy llamando.

* __include("")__ Si encuentra un error en la ruta, muestra una advertencia y se sigue ejecutando el script.
* __require_once("")__ Si encuentra un error, arroja un  fatal_error y detiene la ejecución del script.

__Clases Abstractas__ Son clases que sirven de modelo porque no pueden ser instanciadas, pero pueden ser usadas mediante herencia simple.

## Herencia 
Es un término de la programación orientada a objetos, en donde una clase extiende de otra clase, la subclase hereda todos los métodos públicos y protegidos de la clase padre. A menos que una clase sobrescriba esos métodos, mantendrán su funcionalidad original. 

* __Herencia Simple:__ La subclase hereda sólo de una clase
* __Herencia Múltiple:__ La subclase hereda más de una clase.

## Referencia de Variables o punteros
* __self__ Accede a una constante o método estático desde dentro de la clase.
* __parent__ Accede a una constante o método de una clase padre.
* __this__ Referencia al objeto (instancia) actual, para nombres no estáticos.

En este ejemplo se muestra como comunicar clases entre sí de tres formas distintas
* Herencia Simple 
* Colaboración de Objetos
* Interfaces

## Interfaces 
Las interfaces de objetos permiten crear código con el cual especificar qué métodos deben ser implementados por una clase, sin tener que definir cómo estos métodos son manipulados.

Las interfaces se definen de la misma manera que una clase, aunque reemplazando la palabra reservada class por la palabra reservada interface y sin que ninguno de sus métodos tenga su contenido definido.

Todos los métodos declarados en una interfaz deben ser públicos, ya que ésta es la naturaleza de una interfaz. 

*__Para implementar una interfaz, se utiliza el operador implements__*

Ejemplo de interfaz 

```php
<?php

// Declarar la interfaz 'iTemplate'
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

// Implementar la interfaz
// Ésto funcionará 
class Template implements iTemplate
{
    private $vars = array();
  
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
  
    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
 
        return $template;
    }
}
// Ésto no funcionará
// Error fatal: La Clase BadTemplate contiene un método abstracto
// y por lo tanto debe declararse como abstracta (iTemplate::getHtml)
class BadTemplate implements iTemplate
{
    private $vars = array();
  
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
}
?>
```

