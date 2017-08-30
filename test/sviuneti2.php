<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Spisak učenika koji su uneti u bazu</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<style>


@font-face{
    font-family:kom;
    src:url('komikab.ttf');
    
}
table, th, td {
    font-family:kom;
    border: 1px solid black;
    border-collapse: collapse;
    padding:5px;
    margin:5px;
    text-align:center;
    
}
.tabi{
                background-color: #d9d9d9; 
            }
            

.tabi:hover td{
                background-color: #8c8c8c;
            }
th {background-color:gray;
color:white;
    
    
}
</style>
</head>
<body id="main_body">
	
	<img id="top" src="top.png" width="800" alt="">
	<div id="form_container">
	
		
		
					<div class="form_description">
			<h1> Spisak učenika unetih u bazu podataka: </h1>		    
			<h3>Spisak učenika unetih u bazu podataka: </h3>

		</div>					
			<ul>
			
					
		<label class="description" > <a href="form.php">Unos novih učenika</a><br>
			<a href="sviuneti.php">Pregledaj spisak unetih učenika</a><br>
			
			<a href="stampa.php">Štampanje podataka</a></label><br></ul>
	    <br>
	 
<?php
require_once 'login.php';
$conn=new mysqli($hn,$un,$pw,$db);
mysqli_set_charset($conn, 'utf8');
if ($conn->connect_error)die($conn->connect_error);

$ode=$_GET['ode'];

$query="SELECT * FROM $ode ORDER BY id";
$result=$conn->query($query);
if(!$result)die($conn->error);
$od='';
if($ode=='e41'){$od='E41';}
else{$od='E42';}

echo'<strong>Odeljenje:'.$od.'</strong>';
echo'<br>';
echo'<br>';

echo'<div><table><tr>';
echo'<th><strong>Ime</strong></th><th><strong>Prezime</strong></th><th><strong>Broj u matičnoj knjizi</strong></th>
<th><strong>Ime roditelja</strong></th><th><strong>Datum rodjenja</strong></th><th><strong>Mesto rodjenja</strong></th>
<th><strong>Opština rodjenja</strong></th><th><strong>Država rodjenja</strong></th><th><strong>Delovodni brој</strong></th>
<th><strong>Izmeniti unete podatke</strong></th><th><strong>Obrisati unete podatke</strong></th></tr>';

$rows=$result->num_rows;
for($j=0;$j<$rows;++$j){
$result->data_seek($j);
$row=$result->fetch_array(MYSQLI_ASSOC);

echo'<tr class="tabi"><td>'.$row['ime'].'</td><td>'.$row['prezime'].'</td><td>'.$row['brmk'].'</td><td>'.$row['imeroditelja'].'</td><td>'.$row['datumrodjenja'].'</td>
<td>'.$row['mestorodjenja'].'</td><td>'.$row['opstinarodjenja'].'</td><td>'.$row['drzavarodjenja'].'</td><td>'.$row['delovodnibridatdiplome'].'</td>
<td><a href=edit.php?id='.urlencode($row['id']).'&editidelete='.urlencode($ode).'> Izmeni</a></td><td><a href=delete.php?id='.urlencode($row['id']).'&editidelete='.urlencode($ode).'> Obriši</a></td></tr>';

}
echo'</table></div>';
#echo'<input type=hidden name="editidelete" value="'.$_POST['odeljenje'].'">';
/*echo' <td><a href=edit.php?id='.$row['id'].'> Izmeni</a><br><br></td><td></td> ';
echo' <td><a href=edit.php?id='.$row['id'].'> Obriši</a><br><br></td> ';
*/
$result->close();
$conn->close();
?>

		 
				
			
			
		
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>