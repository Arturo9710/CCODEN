<?php
require('fpdf184/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);

$pdf->Cell(40,10, $_GET["p_input"]);
$pdf->Output();


?>
