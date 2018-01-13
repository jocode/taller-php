## Conexión a MySQL con mysqli

En muchas ocasiones necesitamos de aplicaciones que necesite interactuar con una base de datos, para consultar y almacenar la información.

__¿Qué es una API?__

Una Interfaz de Programación de Aplicaciones, o API, define las clases, métodos, funciones y variables que necesitará llamar una aplicación para llevar a cabo una tarea determinada. En el caso de las aplicaciones de PHP que necesitan comunicarse con un servidor de bases de datos, las APIs necesarias se ofrecen generalmente en forma de extensiones de PHP. 

__¿Cuáles son las principales APIs que PHP ofrece para utilizar MySQL?__

Hay tres APIs principales a la hora de considerar conectar a un servidor de bases de datos MySQL:

* Extensión MySQL de PHP

* Extensión mysqli de PHP

* Objetos de Datos de PHP (PDO)


Tomado de http://php.net/manual/es/mysqli.overview.php 


## Recomendaciones para la creación de bases de datos

1. Definir el cotejamiento como _utf8_spanish_ci_.
2. Siempre definir un campo _id_ en las tablas, la mayoría de frameworks lo usan.
3. No usar caracteres especiales en los nombres de las tablas y los campos porque pueden generar conflictos.
4. Tener en cuenta los tipos de datos a usar.


Una recomendación es siempre definir como clase Abstracta las clases de conexión para que no se pueda instanciar, y que solamenta sean heredables.


En este ejemplo, creamos una clase Abstracta para la conexión usando la clase mysqli que viene en PHP, y nos creamos una base de datos llamada __dummy__, en ella hay una tabla usuarios con registros. Lo que hace es consultar los usuarios en la base de datos y mostrarlos en una tabla en el navegador.