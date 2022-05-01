
<?php 

// load mpdf
    require ("vendor/autoload.php");

    $mpdf =new \Mpdf\Mpdf();

// optional meta data

// The html code
$html="<h1>University Address </h1>";
$html.="


<br>
<h5 

>REF: ACCEPTED TO BE TRANSFERED TO (program name) AT (university name) </h5>


<p> Dear,(student name) your request to transfer to programme (programme name)
at (university name) has been successfully accepted.</p>

<p>Therefore you are required to report to the transferred university within 14 days
so as to complete the registration process.</p>


<br>
<p>(signature)</p>

.................
<p>Damasi B Ndunguru</p>
<p>Director TCU</p>
";

// Write to pdf
$mpdf->Image('tcu.jpg',0,0,210,297,'jpg','',true,false);
$mpdf->WriteHTML($html);
$mpdf->Output("AcceptanceLetter.pdf","D");

?>
