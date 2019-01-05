<?php
//============================================================+
// File name   : example_048.php
// Begin       : 1609-03-20
// Last Update : 1609-09-30
// 
// Description : Example 048 for TCPDF class
//               HTML tables and table headers
// 
// Author: Nicola Asuni
// 
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com s.r.l.
//               Via Della Pace, 11
//               09044 Quartucciu (CA)
//               ITALY
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: HTML tables and table headers
 * @author Nicola Asuni
 * @copyright 1604-1609 Nicola Asuni - Tecnick.com S.r.l (www.tecnick.com) Via Della Pace, 11 - 09044 - Quartucciu (CA) - ITALY - www.tecnick.com - info@tecnick.com
 * @link http://tcpdf.org
 * @license http://www.gnu.org/copyleft/lesser.html LGPL
 * @since 1609-03-20
 */

require_once('../config/lang/eng.php');
require_once('../tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false); 

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Michael Joshua Orellana, Kenneth Axl Virtucio');
$pdf->SetTitle('SolaCrest - Hotel Management System');
$pdf->SetSubject('SolaCrest Hotel Reservation Summary Report');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); 

//set some language-dependent strings
$pdf->setLanguageArray($l); 

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 12);

// add a page
$pdf->AddPage('L');
// print a line using Cell()
$pdf->Cell(0, 12, 'Customer Details', 0, 1, '');

// -----------------------------------------------------------------------------

require("include/conn.php");
// -----------------------------------------------------------------------------

// Set some content to print
$tbl_header = '<table border="2" cellpadding="10">';

$tbl_footer = '</table>';
$tbl ='';
$tbl1 ='';



$tbl1 .= '<tr style="background-color:#a3952f;color:#FFFFFF;"><td width="95">' . "Room No." .  '</td><td width="95">' . "Room Type" . '</td><td width="95">' . "First Name" . '</td><td width="95">' . "Last Name" . '</td><td width="95">' .  "Arrival Date" . '</td><td width="95">'  . "Departure Date" . '</td><td width="95">' . "Number of Persons" . '</td><td width="95">' .  "Total Cost" . '</td></tr>';

$search=$_POST['search'];
$result = mysql_query("SELECT * FROM tblhotel WHERE fldcustomer LIKE '%$search%'");
while($row = mysql_fetch_assoc($result))
{
	 $roomno = $row['fldcustomer'];
	 $fname = $row['fname'];
	 $lname = $row['lname'];
	 $fstart = $row['fstart'];
	 $fend = $row['fend'];
	 $fpersons = $row['fpersons'];
	 $fbill = $row['fbill'];
	 $roomtype=$row['fldtype'];

}	
	 	 $tbl .= '<tr><td width="95">' . $roomno . '</td><td width="95">' . $roomtype . '</td><td width="95">' . $fname . '</td><td width="95">' . $lname . '</td><td width="95">' . date("F d, Y", strtotime($fstart)) . '</td><td width="95">' . date("F d, Y", strtotime($fend)) . '</td><td width="95">' . $fpersons . '</td><td width="95">PHP ' . $english_format_number = number_format($fbill) .'.00</td></tr>';

// Print text using writeHTMLCell()
$pdf->writeHTML($tbl_header . $tbl1 . $tbl .  $tbl_footer, true, false, false, false, '');



// -----------------------------------------------------------------------------


// -----------------------------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_048.pdf', 'I');

//============================================================+
// END OF FILE                                                 
//============================================================+
?>
