<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Brisanje podataka</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	<?php
require_once 'login.php';
$conn=new mysqli($hn,$un,$pw,$db);
mysqli_set_charset($conn,'utf8');
if ($conn->connect_error)die($conn->connect_error);



if(isset($_GET['id']) AND isset($_GET['editidelete']))
{
$id=$_GET['id'];
$ode=$_GET['editidelete'];
$sql="SELECT ime,prezime FROM $ode WHERE id='$id'";
$res=$conn->query($sql);
if(!$res)die($conn->error);
$geri=$res->fetch_array(MYSQLI_ASSOC);

if (isset($_POST['submit']))
{
$query="DELETE FROM $ode WHERE id='$id'";
$delete=$conn->query($query);
if($delete)
{
header('Location: izbrisano.php');
} 
else{
    echo "ERROR: Could not able to execute $query. " . $conn->error;
}

}
}
?>

	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Brisanje podataka</a></h1>
		<br>
		<ul>	<label class="description" ><a href="form.php">Unos novih učenika</a><br>
			<a href="sviuneti.php">Pregledaj spisak unetih učenika</a><br>
			
			<a href="stampa.php">Štampanjeeeee podataka</a></label><br></ul>
			
		<form  class="appnitro"  method="post" action="">
					<div class="form_description">
					    <br>
			<h2>Potvrdi brisanje podataka za učenika:</h2>
		<?php echo '<strong>Ime: </strong>'.$geri['ime'];
		      echo '<br>';
		      echo '<strong>Prezime: </strong>'.$geri['prezime']; ?>
			<br>
		<li class="buttons">
			    <input type="hidden" name="form_id" value="30576" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Obriši" />
		</li>
			</ul>
			</form>
		</div>						
			<ul >
			    
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>