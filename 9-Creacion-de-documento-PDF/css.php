<?php 

require_once("mpdf/mpdf.php");

$mpdf = new mPDF('c');
$mpdf->SetDisplayMode('fullpage');

$html = "<h1>PDF con hojas de estilos (Bootstrap)</h1>";
$html.= '<table class="table table-bordered">';
$html.= '
	<thead>
		<tr>
			<th>Dato</th>
			<th>Valor</th>
		</tr>
	</thead>';

for ($i = 0; $i < 10; $i++){
	$html.= '
		<tr>
			<td>El valor de la i es: </td>
			<td>'.$i.'</td>
		</tr>
	';
}
$html.= '</table>';

// Cargar los estilos
$estilos = file_get_contents("public/bootstrap/css/bootstrap.min.css");
$mpdf->WriteHTML($estilos, 1);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;

?>