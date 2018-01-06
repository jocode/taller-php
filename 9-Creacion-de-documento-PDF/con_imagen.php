<?php 

require_once("mpdf/mpdf.php");

$html = "<h1>PDF con Imagen</h1>";
$html.='<img src="public/images/mobile_app.jpg"/>';
$mpdf = new mPDF('c');
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;

?>