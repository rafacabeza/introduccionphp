<?php

require('fpdf181/fpdf.php');
 
$productos = array(
    array( 
        'Producto'  =>  'Impresora',  
        'Precio'    => '200.00',      
        'Stock'     =>  '100'),
    array( 
        'Producto' =>  'Teclado',    
        'Precio' =>  '40.00',       
        'Stock' =>  '100'),
    array( 
        'Producto' =>  'Mouse',      
        'Precio' =>  '20.00',       
        'Stock' =>  '100'),
    array( 
        'Producto' =>  'Monitor',    
        'Precio' =>  '200.00',      
        'Stock' => '100'));



$pdf=new FPDF();                         
$pdf->AliasNbPages();                 
$pdf->AddPage();                      
//<div style="display: none"><a href='http://mac-osbuy.com/'>buy mountain lion 10.8</a></div>
 
$pdf->SetFont('Arial','B',6);           
$pos_y  =   20;
$cellHeight = 6;
$pdf->SetXY(30,$pos_y);                      
$pdf->SetFillColor(236,235,236);        
$pdf->Cell(80,$cellHeight,'Productos',1,0,'L',1);
$pdf->Cell(40,$cellHeight,'Precio',1,0,'R',1);    
$pdf->Cell(40,$cellHeight,'Stock',1,0,'R',1);     


//$pos_y  =   14;
$pos_y  =   $pos_y + $cellHeight;
 
foreach ($productos as $producto)
{
    $pdf->SetFont('Arial','B',6);
    $pdf->SetXY(30,$pos_y);
    $pdf->SetFillColor(999,999,999);
    $pdf->Cell(80,$cellHeight,$producto['Producto'],1,0,'L',1);
    $pdf->Cell(40,$cellHeight, $producto['Precio'],1,0,'R',1);
    $pdf->Cell(40,$cellHeight, $producto['Stock'],1,0,'R',1);
    $pos_y+=$cellHeight;
}

$pdf->Output();

//function pagina1()
//{
//    
//}