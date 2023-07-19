<title>RGUKT-IIITN Admissions</title>
<link rel="icon" href="./logo.png">
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$fromc = $_POST["fromcount"];
	$toc = $_POST["tocount"];
	$fromy = $_POST["fromyear"];
	$toy = $_POST["toyear"];
	$type = $_POST["cattype"];
	$cat = $_POST["category"];
	$sec = $_POST["session"];
	$date = $_POST["date"];

	$split_date = explode("-",$date);
	$year = $split_date[0];
	$month = $split_date[1];
	$day = $split_date[2];


	echo"<style type='text/css'>
		table { page-break-inside:avoid }
		tr    { page-break-inside:avoid; page-break-after:auto }
		thead { display:table-header-group }
		tfoot { display:table-footer-group }
	*{
	font-family:calibri;}
	body{
		padding-left:28px;
	}
	</style>";

	$i=0;
	for($i=$fromc;$i<=$toc;$i+=1){
			echo"<table border=3  style='display: inline-block; width:300px; border: 2px solid; float: left; margin-right:25px;margin-top:25px;'><tr><th><img src='logo.png' style='height:50px;width:50px;'></th>
			<th style='font-size:20px;width:100%;'>RGUKT-Nuzvid<br>UG Admissions $fromy-$toy</th></tr><tr><td colspan=2 style='font-size:32px;padding:15px; font-family:calibri;'><b>";
			if ($type == "Food Tokens"){
				echo "<table style='width:100%;' border=1 cellspacing='0px'cellpadding='10px'><tr><td><b style='font-size:25px;'>Food Token</b></td><td style='width:60px;font-size:25px;text-align:center;'><b>$i</b></td></tr>";
				echo "<tr><td colspan='2' ><b style='font-size:25px;'><center>$sec</center></b></td></tr></table>";
				echo"</b></td></tr><tr><td colspan=2 style='font-size:19px;text-align: center;'><b>$day-$month-$year</b></td></tr>";
			}
			else if($type == "Special Category"){
				echo "<table style='width:100%;' border=1 cellspacing='0px'cellpadding='10px'><tr><td><b style='font-size:25px;'>Token No</b></td><td style='width:60px;font-size:25px;text-align:center;'><b>$i</b></td></tr>";
				echo "<tr><td><b style='font-size:25px;'>Serial No</b></td><td style='width:50px;'></td></tr></table>";
				echo"<tr><td style='font-size:19px;text-align: center;'><b>$cat</b></td><td style='font-size:19px;text-align: center;'><b>$day-$month-$year</b></td></tr>";
			}
			else{
				echo "<table style='width:100%;' border=1 cellspacing='0px'cellpadding='10px'><tr><td><b style='font-size:25px;'>Token No</b></td><td style='font-size:25px;text-align:center;'><b>$i</b></td></tr>";
				echo "<tr><td><b style='font-size:25px;'>Serial No</b></td><td style='width:50px;'></td></tr></table>";
				echo"</b></td></tr><tr><td colspan=2 style='font-size:19px;text-align: center;'><b>$day-$month-$year</b></td></tr>";
			}
	}
}
else{
	header('Location: index.php');
}	
?>