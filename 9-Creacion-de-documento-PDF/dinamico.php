<?php 

require_once("mpdf/mpdf.php");

$html = "<h1>PDF Dinámico</h1>";

$html.= '<table border="1">';

for ($i = 0; $i < 10; $i++){
	$html.= '
		<tr>
			<td>El valor de la i es: </td>
			<td>'.$i.'</td>
		</tr>
	';
}

$html.= '</table>';

$mpdf = new mPDF('c');
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;

?>