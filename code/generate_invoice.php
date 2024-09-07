<?php
require("C:\\xampp\\htdocs\\IWD\\fpdf\\fpdf.php");

class Invoice extends FPDF
{
    function Header()
    {
        // Add header information
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(80);
        $this->Cell(30, 10, 'Invoice', 0, 0, 'C');
        $this->Ln(20);

        // Add column headers
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(60, 10, 'Product Name', 1, 0, 'C');
        $this->Cell(30, 10, 'Price', 1, 0, 'C');
        $this->Cell(30, 10, 'Quantity', 1, 0, 'C');
        $this->Cell(40, 10, 'Total', 1, 0, 'C');
        $this->Ln();
    }

    function Footer()
    {
        // Add footer information
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    function generateInvoice()
    {
        // Add invoice items
        $this->SetFont('Arial', '', 12);
        $this->Cell(60, 10, 'Cartoon Astronaut Tishirts', 1, 0, 'C');
        $this->Cell(30, 10, '$188.19', 1, 0, 'C');
        $this->Cell(30, 10, '1', 1, 0, 'C');
        $this->Cell(40, 10, '$188.19', 1, 0, 'C');
        $this->Ln();
        
        $this->Cell(60, 10, 'Flower Tishirts', 1, 0, 'C');
        $this->Cell(30, 10, '$88.0', 1, 0, 'C');
        $this->Cell(30, 10, '1', 1, 0, 'C');
        $this->Cell(40, 10, '$88.0', 1, 0, 'C');
        $this->Ln();
        
        $this->Cell(60, 10, 'Roses Tishirts', 1, 0, 'C');
        $this->Cell(30, 10, '$82.0', 1, 0, 'C');
        $this->Cell(30, 10, '1', 1, 0, 'C');
        $this->Cell(40, 10, '$82.0', 1, 0, 'C');
        $this->Ln();

        // Add total amount
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(60, 10, 'Total Amount:', 1, 0, 'R');
        $this->Cell(100, 10, '$354.0', 1, 0, 'C');
    }
}

// Create new PDF invoice
$pdf = new Invoice();
$pdf->AddPage();
$pdf->generateInvoice();
$pdf->Output();
?>
