<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Spisak učenika koji su uneti u bazu</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<style>



table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    text-align:center;
}
</style>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		
		
					<div class="form_description">
			<h1>Unos podataka</h1>
			
		</div>						
			<ul >
			<label class="description" > <a href="form.php">Unos novih učenika</a><br>
			<a href="sviuneti.php">Pregledaj spisak unetih učenika</a><br>
			
			<a href="stampa.php">Štampanje podataka</a></label></ul>
					
		<ul>
	   
					<div class="form_description">
			<h2>Izbor učenika po imenu i prezimenu</h2>
			<p>Izaberi ime učenika</p>
			<br>
		</div>						
		<div>

			<?php
		    require_once 'login.php';
$conn=new mysqli($hn,$un,$pw,$db);
mysqli_set_charset($conn, 'utf8');
if ($conn->connect_error)die($conn->connect_error);
$odel=$_GET['ode'];

$query="SELECT * FROM $odel ORDER BY id DESC";
$result=$conn->query($query);
if(!$result)die($conn->error);

echo '<table><tr><td><strong>Redni broj</strong></td><td><strong>Ime i prezime</strong></td></tr>';
$rows=$result->num_rows;
for($j=0;$j<$rows;++$j){
$result->data_seek($j);
$row=$result->fetch_array(MYSQLI_ASSOC);
$jj=$j+1;
echo'<tr><td>'.$jj.'</td><td><a href=previewTEH.php?odel='.urlencode($odel).'&ucenik='.urlencode($row['id']).'>'.$row['ime'].' '.$row['prezime'].'</a></tr></td>';

}
echo '</table>';
?>

<?php	
echo <<<_END
</ul>
		</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>
_END;
?>
