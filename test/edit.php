<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Unos podataka</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<style>
input:required {
    background-color: yellow;
}
</style>

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
if(isset($_POST['submit']))
{
# $name=$_POST['name'];
# $age=$_POST['age'];

# $odeljenje = mysqli_real_escape_string($conn, $_REQUEST['odeljenje']);
$odeljenje = mysqli_real_escape_string($conn, $_REQUEST['odeljenje']);
$ime = mysqli_real_escape_string($conn, $_REQUEST['ime']);
$prezime = mysqli_real_escape_string($conn, $_REQUEST['prezime']);
$brmk = mysqli_real_escape_string($conn, $_REQUEST['brmk']);
$imeroditelja = mysqli_real_escape_string($conn, $_REQUEST['imeroditelja']);
$datumrodjenja = mysqli_real_escape_string($conn, $_REQUEST['datumrodjenja']);
$godinarodjenja = mysqli_real_escape_string($conn, $_REQUEST['godinarodjenja']);
$mestorodjenja = mysqli_real_escape_string($conn, $_REQUEST['mestorodjenja']);
$opstinarodjenja = mysqli_real_escape_string($conn, $_REQUEST['opstinarodjenja']);
$drzavarodjenja = mysqli_real_escape_string($conn, $_REQUEST['drzavarodjenja']);
$delovodnibridatdiplome = mysqli_real_escape_string($conn, $_REQUEST['delovodnibridatdiplome']);
$uspeh1 = mysqli_real_escape_string($conn, $_REQUEST['uspeh1']);
$uspeh2 = mysqli_real_escape_string($conn, $_REQUEST['uspeh2']);
$uspeh3 = mysqli_real_escape_string($conn, $_REQUEST['uspeh3']);
$uspeh4 = mysqli_real_escape_string($conn, $_REQUEST['uspeh4']);

$ocenapredmet1drugirazred = mysqli_real_escape_string($conn, $_REQUEST['ocenapredmet1drugirazred']);
$ocenapredmet1trecirazred = mysqli_real_escape_string($conn, $_REQUEST['ocenapredmet1trecirazred']);

$ocenapredmet2drugirazred = mysqli_real_escape_string($conn, $_REQUEST['ocenapredmet2drugirazred']);
$ocenapredmet2trecirazred = mysqli_real_escape_string($conn, $_REQUEST['ocenapredmet2trecirazred']);
$ocenapredmet2cetvrtirazred = mysqli_real_escape_string($conn, $_REQUEST['ocenapredmet2cetvrtirazred']);

$zadatak1 = mysqli_real_escape_string($conn, $_REQUEST['zadatak1']);
$zadatak2 = mysqli_real_escape_string($conn, $_REQUEST['zadatak2']);
$zadatak3 = mysqli_real_escape_string($conn, $_REQUEST['zadatak3']);

$brojbodova1 = mysqli_real_escape_string($conn, $_REQUEST['brojbodova1']);
$brojbodova2 = mysqli_real_escape_string($conn, $_REQUEST['brojbodova2']);
$brojbodova3 = mysqli_real_escape_string($conn, $_REQUEST['brojbodova3']);

$brojbodovatest = mysqli_real_escape_string($conn, $_REQUEST['brojbodovatest']);

#/*
$query3="UPDATE $ode
SET ime='$ime', prezime='$prezime', brmk='$brmk', imeroditelja='$imeroditelja', datumrodjenja='$datumrodjenja', godinarodjenja='$godinarodjenja', mestorodjenja='$mestorodjenja', 
opstinarodjenja='$opstinarodjenja', drzavarodjenja='$drzavarodjenja', delovodnibridatdiplome='$delovodnibridatdiplome', uspeh1='$uspeh1', uspeh2='$uspeh2', uspeh3='$uspeh3', uspeh4='$uspeh4', 
ocenapredmet1drugirazred='$ocenapredmet1drugirazred', ocenapredmet1trecirazred='$ocenapredmet1trecirazred',ocenapredmet2drugirazred='$ocenapredmet2drugirazred', ocenapredmet2trecirazred='$ocenapredmet2trecirazred',
ocenapredmet2cetvrtirazred='$ocenapredmet2cetvrtirazred', zadatak1='$zadatak1', zadatak2='$zadatak2', zadatak3='$zadatak3', brojbodova1='$brojbodova1', brojbodova2='$brojbodova2', brojbodova3='$brojbodova3',
brojbodovatest='$brojbodovatest' WHERE id='$id'";
$update=$conn->query($query3);
if($update)
{
header('Location: uneto.php');
} else{
    echo "ERROR: Could not able to execute $query3. " . $conn->error;
}


}
}
mysqli_set_charset($conn,'utf8');
$query="SELECT * FROM $ode WHERE id=$id";
$result=$conn->query($query);
if(!$result)die($conn->error);
#$query1=mysql_query("SELECT * FROM $ode WHERE id='$id'");
#$query2=mysql_fetch_array($query1);
$query2=$result->fetch_array(MYSQLI_ASSOC);
#echo $query2['ime'];

?>
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1>PROBA</h1>
		<ul><label class="description" ><a href="form.php">Unos novih učenika</a><br>
			<a href="sviuneti.php">Pregledaj spisak unetih učenika</a><br>
			<a href="stampa.php">Štampanje podataka</a></label></ul>
		
		<form id="form_30576" class="appnitro"  method="post" action="">
					<div class="form_description">
					    
			<h2>Unos podataka</h2>
			<p>Formular za unošenje podataka o učeniku</p>
		</div>	
		
			<ul >
		<li id="li_3" >
		<label class="description" for="odeljenje">Izabrati odeljenje </label>
		<div>
		<select required class="element select medium" id="element_3" name="odeljenje"> 
	<?php
if($ode=='e41'){$ode2='e42';}
else
{$ode2='e41';} 
?>		
			
			
			<option value="<?php echo $ode; ?>"><?php echo $ode; ?></option>
<option value="<?php echo $ode2; ?>" ><?php echo $ode2; ?></option>
		</select>
		</div><p class="guidelines" id="guide_3"><small>izabrati odeljenje</small></p> 
		</li>	
					<li id="li_1" >
		<label class="description" for="element_1">Ime </label>
		<div>
			<input required id="element_1" name="ime" class="element text medium" type="text" maxlength="255" value="<?php echo $query2['ime']; ?>"/> 
		</div><p class="guidelines" id="guide_1"><small>uneti ime učenika</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Prezime </label>
		<div>
			<input required id="element_2" name="prezime" class="element text medium" type="text" maxlength="255" value="<?php echo $query2['prezime']; ?>"/> 
		</div><p class="guidelines" id="guide_2"><small>uneti prezime učenika</small></p> 
		</li>	
		<li id="li_1" >
		<label class="description" for="element_1">Broj u matičnoj knjizi </label>
		<div>
			<input required id="element_1" name="brmk" class="element text medium" type="text" maxlength="255" value="<?php echo $query2['brmk']; ?>"/> 
		</div><p class="guidelines" id="guide_1"><small>uneti broj u mk</small></p>
		
		<li id="li_1" >
		<label class="description" for="element_1">Ime roditelja </label>
		<div>
			<input required id="element_1" name="imeroditelja" class="element text medium" type="text" maxlength="255" value="<?php echo $query2['imeroditelja']; ?>"/> 
		</div><p class="guidelines" id="guide_1"><small>uneti ime roditelja</small></p>	
		
		<li id="li_1" >
		<label class="description" for="element_1">Datum rodjenja (primer: 06.12.)</label>
		<div>
			<input required id="element_1" name="datumrodjenja" class="element text medium" type="text" maxlength="255" value="<?php echo $query2['datumrodjenja']; ?>"/> 
		</div><p class="guidelines" id="guide_1"><small>uneti datum rodjenja primer: 07.03.</small></p>				
		
		<li id="li_1" >
		<label class="description" for="uspeh1">Izabrati godinu rodjenja </label>
		<div>
		<select required class="element select medium" id="element_3" name="godinarodjenja"> 
			<option value="<?php echo $query2['godinarodjenja']; ?>" selected="selected"><?php echo $query2['godinarodjenja']; ?></option>
<option value="1989." >1989.</option>
<option value="1990." >1990.</option>
<option value="1991." >1991.</option>
<option value="1992." >1992.</option>
<option value="1993." >1993.</option>
<option value="1994." >1994.</option>
<option value="1995." >1995.</option>
<option value="1996." >1996.</option>
<option value="1997." >1997.</option>
<option value="1998." >1998.</option>
<option value="1999." >1999.</option>
<option value="2000." >2000.</option>
<option value="2001." >2001.</option>
<option value="2002." >2002.</option>
<option value="2000." >2003.</option>
<option value="2001." >2004.</option>
<option value="2002." >2005.</option>

		</select>			
	</div><p class="guidelines" id="guide_3"><small>Izabrati godinu rodjenja</small></p> 
		</li>
		<li id="li_1" >
		<label class="description" for="element_1">Mesto rodjenja </label>
		<div>
			<input required id="element_1" name="mestorodjenja" class="element text medium" type="text" maxlength="255" value="<?php echo $query2['mestorodjenja']; ?>"/> 
		</div><p class="guidelines" id="guide_1"><small>uneti mesto rodjenja</small></p>			
					
		<li id="li_1" >
		<label class="description" for="element_1">Opština rodjenja </label>
		<div>
			<input required id="element_1" name="opstinarodjenja" class="element text medium" type="text" maxlength="255" value="<?php echo $query2['opstinarodjenja']; ?>"/> 
		</div><p class="guidelines" id="guide_1"><small>uneti opštinu rodjenja</small></p>
		
		<li id="li_1" >
		<label class="description" for="element_1">Država rodjenja </label>
		<div>
			<input required id="element_1" name="drzavarodjenja" class="element text medium" type="text" maxlength="255" value="<?php echo $query2['drzavarodjenja']; ?>"/> 
		</div><p class="guidelines" id="guide_1"><small>uneti državu rodjenja</small></p>
		
		<li id="li_1" >
		<label class="description" for="element_1">Delovodni broj</label><br> <label class="description" for="element_1">
		     </label>
		<div>
			<input required id="element_1" name="delovodnibridatdiplome" class="element text medium" type="text" maxlength="255" value="<?php echo $query2['delovodnibridatdiplome']; ?>"/> 
		</div><p class="guidelines" id="guide_1"><small>uneti delovodni br </small></p>
		<li id="li_1" >
		<li id="li_3" >
		<label class="description" for="uspeh1">Postignut uspeh I razred (uneti samo prosek: 2.80)</label>
		<div>
			<input required id="element_1" name="uspeh1" class="element text medium" type="text" maxlength="255" value="<?php echo $query2['uspeh1']; ?>"/> 
		</div><p class="guidelines" id="guide_1"><small>uneti uspeh I razred</small></p>
		
		<li id="li_3" >
		<label class="description" for="uspeh1">Postignut uspeh II razred (uneti samo prosek: 2.80)</label>
		<div>
			<input required id="element_1" name="uspeh2" class="element text medium" type="text" maxlength="255" value="<?php echo $query2['uspeh2']; ?>"/> 
		</div><p class="guidelines" id="guide_1"><small>uneti uspeh II razred</small></p>
		
		<li id="li_3" >
		<label class="description" for="uspeh1">Postignut uspeh III razred (uneti samo prosek: 2.80)</label>
		<div>
			<input required id="element_1" name="uspeh3" class="element text medium" type="text" maxlength="255" value="<?php echo $query2['uspeh3']; ?>"/> 
		</div><p class="guidelines" id="guide_1"><small>uneti uspeh III razred</small></p>
		
		<li id="li_3" >
		<label class="description" for="uspeh1">Postignut uspeh IV razred (uneti samo prosek: 2.80)</label>
		<div>
			<input required id="element_1" name="uspeh4" class="element text medium" type="text" maxlength="255" value="<?php echo $query2['uspeh4']; ?>"/> 
		</div><p class="guidelines" id="guide_1"><small>uneti uspeh IV razred</small></p>
		
		<br>
		<li id="li_3" >
		<label class="description">Postignut uspeh iz stručnih predmeta:</label>
		<div>
		
		<br>	
		    <table>
		        <tr>
		        <td><label class="description"></label></td>
		        <td><label class="description">drugi razred</label></td>
		        <td><label class="description">treći razred</label></td>
		        <td><label class="description">četvrti razred</label></td>
		        </tr>
		        
		         <tr>
		         <td><label class="description"style="width:250px" >Мотори СУС и моторна возила</label></td> 
		        
		        
		        <td><select  required style="width:100px"class="element select medium" id="element_3" name="ocenapredmet1drugirazred"> 
			<option value="<?php echo $query2['ocenapredmet1drugirazred']; ?>" selected="selected"><?php echo $query2['ocenapredmet1drugirazred']; ?></option>
<option value="довољан(2)" > довољан(2)</option>
<option value="добар(3)" > добар(3)</option>
<option value="врло добар(4)" > врло добар(4)</option>
<option value="одличан(5)" > одличан(5)</option>
		</select> </td>
		        <td><select  required style="width:100px"class="element select medium" id="element_3" name="ocenapredmet1trecirazred"> 
			<option value="<?php echo $query2['ocenapredmet1trecirazred']; ?>" selected="selected"><?php echo $query2['ocenapredmet1trecirazred']; ?></option>
<option value="довољан(2)" > довољан(2)</option>
<option value="добар(3)" > добар(3)</option>
<option value="врло добар(4)" > врло добар(4)</option>
<option value="одличан(5)" > одличан(5)</option>
		</select> </td>
		<td></td>
		</tr>
		        <tr>
		         <td><label class="description">Електрични и електронски системи на возилима</label></td> 
		        <td><select  required style="width:100px"class="element select medium" id="element_3" name="ocenapredmet2drugirazred"> 
			<option value="<?php echo $query2['ocenapredmet2drugirazred']; ?>" selected="selected"><?php echo $query2['ocenapredmet2drugirazred']; ?></option>
<option value="довољан(2)" > довољан(2)</option>
<option value="добар(3)" > добар(3)</option>
<option value="врло добар(4)" > врло добар(4)</option>
<option value="одличан(5)" > одличан(5)</option>
		</select> </td>
		        <td><select required style="width:100px"class="element select medium" id="element_3" name="ocenapredmet2trecirazred"> 
			<option value="<?php echo $query2['ocenapredmet2trecirazred']; ?>" selected="selected"><?php echo $query2['ocenapredmet2trecirazred']; ?></option>
<option value="довољан(2)" > довољан(2)</option>
<option value="добар(3)" > добар(3)</option>
<option value="врло добар(4)" > врло добар(4)</option>
<option value="одличан(5)" > одличан(5)</option>
		</select> </td>
		        <td><select  required style="width:100px"class="element select medium" id="element_3" name="ocenapredmet2cetvrtirazred"> 
			<option value="<?php echo $query2['ocenapredmet2cetvrtirazred']; ?>" selected="selected"><?php echo $query2['ocenapredmet2cetvrtirazred']; ?></option>
<option value="довољан(2)" > довољан(2)</option>
<option value="добар(3)" > добар(3)</option>
<option value="врло добар(4)" > врло добар(4)</option>
<option value="одличан(5)" > одличан(5)</option>
		</select> </td>
		</tr>
		    </table>
		</div>
		<br>
		<li id="li_3" >
		<label class="description">Završni/maturski ispit - radni zadaci</label>
		<br>
		<table>
		    <tr>
		        <td></td>
		        <td><label class="description">Šifra radnog zadatka</label></td>
		        <td><label class="description">broj bodova</label></td>
		    </tr>
		    <tr>
		        <td><label class="description">1. zadatak: </label></td>
		        <td>
		        <select required style="width:150px"class="element select medium" id="element_3" name="zadatak1"> 
			<option value="<?php echo $query2['zadatak1']; ?>" selected="selected"><?php echo $query2['zadatak1']; ?></option>
<option value="A1" > A1</option>
<option value="A2" > A2</option>
<option value="A3" > A3</option>
<option value="A4" > A4</option>
<option value="A5" > A5</option>
<option value="A6" > A6</option>
<option value="A7" > A7</option>
<option value="A8" > A8</option>
		</select> </td>
		
		<td><input required id="element_1" name="brojbodova1" class="element text medium" type="text" maxlength="255" value="<?php echo $query2['brojbodova1']; ?>"/> </td>
		    </tr>
		    <tr>
		        <td><label class="description">2. zadatak: </label></td>
		        <td>
		        <select  required style="width:150px"class="element select medium" id="element_3" name="zadatak2"> 
			<option value="<?php echo $query2['zadatak2']; ?>" selected="selected"><?php echo $query2['zadatak2']; ?></option>
<option value="B1" > Б1</option>
<option value="B2" > Б2</option>
<option value="B3" > Б3</option>
<option value="B4" > Б4</option>
<option value="B5" > Б5</option>
<option value="B6" > Б6</option>
<option value="B7" > Б7</option>
<option value="B8" > Б8</option>
<option value="B9" > Б9</option>

		</select> </td>
		
		<td><input required id="element_1" name="brojbodova2" class="element text medium" type="text" maxlength="255" value="<?php echo $query2['brojbodova2']; ?>"/> </td>
		    </tr>
		    
		    <tr>
		        <td><label class="description">3. zadatak: </label></td>
		        <td>
		        <select  required style="width:150px"class="element select medium" id="element_3" name="zadatak3"> 
			<option value="<?php echo $query2['zadatak3']; ?>" selected="selected"><?php echo $query2['zadatak3']; ?></option>
<option value="V1" > В1</option>
<option value="V2" > В2</option>
<option value="V3" > В3</option>
<option value="V4" > В4</option>

		</select> </td>
		
		<td><input  required id="element_1" name="brojbodova3" class="element text medium" type="text" maxlength="255" value="<?php echo $query2['brojbodova3']; ?>"/> </td>
		    </tr>
		</table>
		
		<br>
		<li id="li_3" >
		<label class="description">Teorija - maturski ispit</label>
		<br>
		<table>
        <tr><td> <label class="description">Ostvareni bodovi na testu - teorija </label></td> </tr>
        <tr><td><input  required id="element_1" name="brojbodovatest" class="element text medium" type="text" maxlength="255" value="<?php echo $query2['brojbodovatest']; ?>"/> </td> </tr>
		</table>
		
		
					<li class="buttons">
			    <input type="hidden" name="form_id" value="30576" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Unesi izmene" />
		</li>
			</ul>
		</form>	
		
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>