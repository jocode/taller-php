# Creación de sistema de Login

Los controles de acceso se realizan generalmente para acceder a contenido restringido, o que de acuerdo al perfil del usuario sólo pueda ver información que el sistema lo permita.

En ambientes web, generalmente se usa las variables de Session o Cookies. En este caso vamos a usar las variables de session, porque su manejo es mucho más flexible.

Algunos Framework manejan middleware, que son representaciones de objetos para un control de acceso.

## Variables de Session

Las variables de session en PHP son un tipo de array asociativo que estan a nivel global, es decir se pueden acceder desde cualquier parte de la aplicación.

* __session_start()__ Inicia una nueva sesión o reanuda la existente.

* __session_destroy()__ Elimina todas las sesiones creadas.

Siempre debemos, usar el método _session_start()_ cuando utilicemos las variables de sesion. Éste método debemos colocarlo en la primera línea en el archivo donde vayamos a trabajar con sesiones.

> Siempre autenticar un usuario por el correo electrónico, porque es mucho más fácil recordar un correo que muchos nicknames para diferentes aplicaciones.

**Encriptación**
Hay dos formas de encriptación
- __Reversibles:__ Tienen función para encriptar y desencriptar
- __Irreversible:__ Sólo pueden encriptar la información


Al hacer sistema de Login, y que el usuario ingresa a la aplicación, por temas de usabilidad es bueno saludar al usuario y mostrar la hora en el sistema.
También se podría tener en una tabla de logs, el id del usuario y la fecha y hora de ingreso al sistema, o también mirar qué módulos ha visitado, por temas de auditoría.
