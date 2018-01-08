<?php 

$datos = array();

$datos[] = array(
	"id"=>"1",
	"nombre"=>"Pedro Ñandú",
	"correo"=>"pedro@correo.com"
);
$datos[] = array(
	"id"=>"2",
	"nombre"=>"Juan Martinez",
	"correo"=>"juanito@correo.com"
);
$datos[] = array(
	"id"=>"3",
	"nombre"=>"Jorge Yainez",
	"correo"=>"jorge@correo.com"
);

# Declaramos la instancia de la clase DOMDocument
$document = new DOMDocument();
# Definimos la codificación del archivo
$document->encoding = 'utf-8';
$document->formatOutput = true;

# Creamos el nodo usuarios
$user = $document->createElement("usuarios");
# Agregamos el nodo al documento
$document->appendChild($user);


foreach ($datos as $dato) {

	# Creamos la estructura de tag persona
	$personas = $document->createElement("personas");

	$id = $document->createElement("id");
	$id->appendChild($document->createTextNode($dato["id"]));
	$personas->appendChild($id);

	$nom = $document->createElement("nombre");
	$nom->appendChild($document->createTextNode($dato["nombre"]));
	$personas->appendChild($nom);

	$correo = $document->createElement("correo");
	$correo->appendChild($document->createTextNode($dato["correo"]));
	$personas->appendChild($correo);

	

	$user->appendChild($personas);
}

echo $document->saveXML();
?>