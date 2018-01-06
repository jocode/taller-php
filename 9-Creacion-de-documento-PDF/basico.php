<?php 

require_once("mpdf/mpdf.php");

$html = "<h1>Hola Mundo desde mpdf</h1>";
$mpdf = new mPDF('c');
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;

?>