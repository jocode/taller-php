# Ventana Modal Ajax con Bootstrap y Fancybox

- **Bootstrap:** Es un framework frontend para construir proyectos web rápidamente. _https://getbootstrap.com/_

- **Fancybox:** Es una librería de jquery para realizar ventanas modales, generalmente para mostrar imágenes y contenido multimedia. _http://fancyapps.com/fancybox/_


## Modal con Bootstrap

Primero usamos la ventana modal con Bootstrap, el ejemplo está en el archivo [__modal_1.php__](https://github.com/jocode/taller-php/blob/master/15-Ventana-Modal-Ajax-con-Bootstrap-y-Fancybox/modal_1.php)

1. Descargamos los archivos o usamos el CDN
2. Vamos a la documentación de Bootstrap y buscamos en la sección de **components** el ítem **Modal**
3. Ahí la documentación dice cómo mostrar ventanas modales usando bootstrap.

Lo que hicimos fué agregar la ventana modal en el archivo principal, y con dos meta-etiquetas hacemos mostrar la ventana modal. Lo que hacen las meta-etiquetas, es referenciar y activar la ventana para que se muestre.

Meta-Etiquetas
```html 
data-toggle="modal" data-target="#modalExample"
```

El **data-target**, le indica el id, de la ventana a mostar. Éste debe coincidir con el id, de la ventana modal que hemos colocado.

Cuando Usamos la ventana modal con AJAX, copiamos el contenido que tiene la ventana modal y lo agregamos en el archivo que contendrá la nueva información; en este caso fué el archivo [**ajax_1.php**](https://github.com/jocode/taller-php/blob/master/15-Ventana-Modal-Ajax-con-Bootstrap-y-Fancybox/ajax_1.php). De esta manera podemos cargar dinámicamente los datos que pueden venir de base de datos a la ventana modal. 

## Modal con Fancybox

Fancybox, es un plugin de jquery, para mostrar contenido multimedia. 

Es muy fácil de usar y está bien documentado en su página web. 

En este ejemplo, en el archivo [**modal_2.php**](https://github.com/jocode/taller-php/blob/master/15-Ventana-Modal-Ajax-con-Bootstrap-y-Fancybox/modal_2.php), hemos mostrado una imagen en una ventana emergente, y hemos cargado datos dinámicamente usando ajax, con tan sólo agregarle la clase *fancybox.ajax* al elemento que hará la petición, y la url se la colocamos en el href del enlace.
En este caso la solicitud la hace al archivo [__ajax_2.php__](https://github.com/jocode/taller-php/blob/master/15-Ventana-Modal-Ajax-con-Bootstrap-y-Fancybox/ajax_2.php)

* Para usar Fancybox, debemos

1. Descargamos los archivos del sitio web 
2. Copiar sólo los archivos del directorio _source_ y pegarlos en el proyecto 
3. Agregar antes la librería de Jquery
4. Agregar el enlace de CSS y JS en el archivo donde lo vayamos a usar.
5. Inicializar Fancybox con el script 
```javascript
$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
```
6. Agregar la clase **_fancybox_** a la etiqueta de enlace y en el **href** indicar la ruta de la imagen. Para mostrar la imagen pequeña, solo basta con incluirla usando la etiqueta **img**
```html 
<a class="fancybox" href="public/img/burj-al-arab.jpg">
	<img src="public/img/burj-al-arab.jpg" width="150" height="100">
</a>
```

> Es de importancia agregar la librería de jquery para que pueda funcionar Fancybox.

