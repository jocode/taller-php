# CRUD con mysqli

Las siglas de __CRUD__ se refiere a:
- Create
- Read
- Update
- Detele

Estan son las operaciones básicas para el manejo de información.

> Seguimos trabajando con los archivos de la clase Anterior _13. Conexión a MySQL con mysqli_

Hemos creado 3 archivos más
- [agregar.php](https://github.com/jocode/taller-php/blob/master/14-CRUD-con-mysqli/agregar.php)
- [editar.php](https://github.com/jocode/taller-php/blob/master/14-CRUD-con-mysqli/editar.php)
- [eliminar.php](https://github.com/jocode/taller-php/blob/master/14-CRUD-con-mysqli/eliminar.php)

Y en la clase [_Usuario.php_](https://github.com/jocode/taller-php/blob/master/14-CRUD-con-mysqli/clases/Usuario.php) hemos creado los métodos que interactúan con la base de datos, y éstos a su vez son instanciados en las clases correspondientes.

También hemos creado unas validaciones de mensajes en el archivo [index.php](https://github.com/jocode/taller-php/blob/master/14-CRUD-con-mysqli/index.php), recibiendo como parámetro por el método __GET__, una variable m, que indica tipo de mensaje que se debe mostrar.


 