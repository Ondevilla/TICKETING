<?php 
include("connect.php");
require('fpdf17/fpdf.php');




$user_name = $_POST["username"];
$transac_id = $_POST["transac_id"];
$transac_number = $_POST["transac_number"];
$get_zone = $_POST["get_zone"];
$get_purchased = $_POST["get_purchased"];
$total_tickets = $_POST["total_tickets"];
$amount_paid = $_POST["amount_paid"];
$change = $_POST["change"];



//create pdf object
$pdf = new FPDF('P','mm','A4');
//add new page
$pdf->AddPage();
//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130 ,5,'PRINCE TICKETNET OUTLET',0,0);
$pdf->Cell(59 ,5,'INVOICE',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'[Boni Ave.]',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->Cell(130 ,5,'[Mandaluyong, Philippines, 1500]',0,0);
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);//end of line

$pdf->Cell(130 ,5,'Phone [+12345678]',0,0);
$pdf->Cell(25 ,5,'Invoice #',0,0);
$pdf->Cell(34 ,5,$transac_id,0,1);//end of line

$pdf->Cell(130 ,5,'Fax [+12345678]',0,0);
$pdf->Cell(25 ,5,'Customer ID',0,0);
$pdf->Cell(34 ,5,'[1234567]',0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//billing address
$pdf->Cell(100 ,5,'Bill to',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$user_name,0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'',0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'Mandauyong City',0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'',0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130 ,5,'Description',1,0);
$pdf->Cell(25 ,5,'Quantity',1,0);
$pdf->Cell(34 ,5,'Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

$pdf->Cell(130 ,5,$get_zone,1,0);
$pdf->Cell(25 ,5,$get_purchased,1,0);
$pdf->Cell(34 ,5,$total_tickets,1,1,'R');//end of line

$pdf->Cell(130 ,5,'',1,0);
$pdf->Cell(25 ,5,'',1,0);
$pdf->Cell(34 ,5,'',1,1,'R');//end of line

$pdf->Cell(130 ,5,'',1,0);
$pdf->Cell(25 ,5,'',1,0);
$pdf->Cell(34 ,5,'',1,1,'R');//end of line

//summary
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Subtotal',0,0);
$pdf->Cell(4 ,5,'P',1,0);
$pdf->Cell(30 ,5,$total_tickets,1,1,'R');//end of line



$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Total Due',0,0);
$pdf->Cell(4 ,5,'P',1,0);
$pdf->Cell(30 ,5,$amount_paid,1,1,'R');//end of line
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Change',0,0);
$pdf->Cell(4 ,5,'P',1,0);
$pdf->Cell(30 ,5,$change,1,1,'R');//end of line


//output the result
$pdf->Output();
?>