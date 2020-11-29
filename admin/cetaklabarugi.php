<?php
include("../config/db_connect.php");
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$startdate= $_POST["datestart"];
$enddate= $_POST["dateend"];
$query = mysqli_query($conn,"select SUM(Harga_Kotor), SUM(Potongan_Harga) from tabelorder WHERE Transaction_Date>='".$startdate."' AND Transaction_Date<='".$enddate."'");
$result=mysqli_fetch_array($query);
$query2 = mysqli_query($conn,"select * from outflow");
$html = '<center><h3>Laporan Laba Rugi PT. MOO</h3></center><br/><h6>'.$startdate.'-'.$enddate.'</h6><hr/><br/>';
$html .= '<table border="1" width="100%">
<tr>
<td><h4><b>Pendapatan</b></h4></td>
<tr>
<tr>
<td><h6>Pendapatan Dagang</h6></td>
<td>'.$result[0].'</td>
</tr>
<tr>
<td><h4><b>Beban Usaha</b></h4></td>
<tr>
<td><h6>Diskon</h6></td>
<td>'.$result[1].'</td>
</tr>
<tr>
<td><h3><b>Gross Profit</b></h3></td>
<td>'.$result[0]-$result[1]'</td>
</tr>
<tr>
<td><h4><b>Beban</b></h4></td>
<td>';
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-laba-rugi.pdf');
?>