<?php 
require('fpdf181/fpdf.php');

class PDF extends FPDF
{
// Page header
// function Header()
// {
//     // Logo
//    $this->Image('image/logo11.png',15,15,20);
//    $this->Image('image/logo11.png',167,15,27);
//    $this->Image('image/logo11.png',40,210,50);
//     // Arial bold 15
//     $this->SetFont('Arial','B',14);
//     // Judul
    
//     $this->Ln(8);
//     $this->Cell(80);
//     $this->cell(30,10,'Kantor Urusan Agama Kota Surabaya',0,0,'C');

//     $this->Ln(8);
//     $this->SetFont('Arial','',13);
//     $this->Cell(80);
//     $this->cell(30,10,'jl.Arif Rahman Hakim 12/V Telp (031)5345843',0,0,'C');
   
//     // Line break
//     $this->setLinewidth(1);
//     /*tebel*/
//     $this->Line(12,48,200,48);
//     $this->setlinewidth(0);
//     /*tipis*/
//     $this->Line(12,46,200,46);
    
// }

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();

$pdf->AddPage();
$pdf->SetFont('Arial','U'.'B',14);
$pdf->Ln(25);
$pdf->Cell(80);
$pdf->Cell(30,10,'TICKETING ONLINE BUS',0,0,'C');
$pdf->Ln(5);
$pdf->SetFont('Arial','',14);
$pdf->Cell(80);
//$pdf->Cell(30,10,'Nomor : '.$_POST['nomor'],0,0,'C');

// $pdf->Ln(20);
// $pdf->SetFont('Arial','',13);
// $pdf->Cell(50,10,'Dengan ini kami memberitahukan bahwa kami bermaksud akan melangsungkan pernikahan antara : ',0,0,'L');
$Y_Fields_Name_position = 50;
//KODINGAN TABEL
$pdf->SetFillColor(110,180,230);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',10);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(5);
$pdf->Cell(25,8,'no_ktp',1,0,'C',1);
$pdf->SetX(30);
$pdf->Cell(40,8,'nama',1,0,'C',1);
$pdf->SetX(70);
$pdf->Cell(25,8,'alamat',1,0,'C',1);
$pdf->SetX(95);
$pdf->Cell(25,8,'no_tlp',1,0,'C',1);
$pdf->SetX(120);
$pdf->Cell(50,8,'jeniskelamin',1,0,'C',1);
// $pdf->SetX(170);
// $pdf->Cell(35,8,'No Telepon',1,0,'C',1);
$pdf->Ln();
//AKHIR KODINGAN TABEL

// AWAL KODINGAN ROW
//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(25,6,$no_ktp,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(30);
$pdf->MultiCell(40,6,$nama,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(70);
$pdf->MultiCell(25,6,$alamat,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(95);
$pdf->MultiCell(25,6,$no_tlp,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(120);
$pdf->MultiCell(50,6,$jeniskelamin,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(170);
$pdf->MultiCell(35,6,$column_no,1,'C');

// AKHIR KODINGAN ROW


$pdf->Ln(10);
$pdf->Cell(7);
$pdf->Cell(5,10,'Mempelai Pria',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.$_POST['no_ktp'],0,0,'L');

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'Mempelai Wanita',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.$_POST['nama'],0,0,'L');

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'Pada Tanggal',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.$_POST['alamat'],0,0,'L');

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'Jam',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.$_POST['no_tlp'],0,0,'L');

$pdf->Ln(5);
$pdf->Cell(7);
$pdf->Cell(5,10,'Bertempat di',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(30,10,': '.$_POST['jeniskelamin'],0,0,'L');

// $pdf->Ln(5);
// $pdf->Cell(7);
// $pdf->Cell(5,10,'1. MUHAMMAD ALI RODHI',0,0,'L');
// $pdf->Cell(60);


// $pdf->Ln(5);
// $pdf->Cell(7);
// $pdf->Cell(5,10,'1. MUHAMMAD ALI RODHI',0,0,'L');
// $pdf->Cell(60);

// $pdf->Ln(5);
// $pdf->Cell(7);
// $pdf->Cell(5,10,'1. MUHAMMAD ALI RODHI',0,0,'L');
// $pdf->Cell(60);

// $pdf->Ln(5);
// $pdf->Cell(7);
// $pdf->Cell(5,10,'1. MUHAMMAD ALI RODHI',0,0,'L');
// $pdf->Cell(60);


// $pdf->Ln(5);
// $pdf->Cell(7);
// $pdf->Cell(5,10,'1. MUHAMMAD ALI RODHI',0,0,'L');
// $pdf->Cell(60);


// $pdf->Ln(5);
// $pdf->Cell(7);
// $pdf->Cell(5,10,'1. MUHAMMAD ALI RODHI',0,0,'L');
// $pdf->Cell(60);

// $pdf->Ln(10);
// $pdf->Cell(6);
// $pdf->Cell(50,10,'Harap simpan bukti ini',0,0,'L');
// $pdf->Ln(5);
// $pdf->Cell(50,10,'digunakan seperlunya. ',0,0,'L');

// $pdf->Ln(60);
// $pdf->Cell(10);
// $pdf->Cell(174,10,'Surabaya, '.date('d-M-Y'),0,0,'R');

// $pdf->Ln(5);
// $pdf->Cell(10);
// $pdf->Cell(176,10,'Kepala Desa/Kelurahan ',0,0,'R');

// $pdf->Ln(30);
// $pdf->Cell(10);
// $pdf->Cell(160,10,'alirodhi',0,0,'R');
$pdf->Output();
 ?>