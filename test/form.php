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
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1>PROBA</h1>
		<ul><label class="description" ><a href="form.php">Unos novih učenika</a><br>
			<a href="sviuneti.php">Pregledaj spisak unetih učenika</a><br>
			<a href="stampa.php">Štampanje podataka</a></label></ul>
		
		<form id="form_30576" class="appnitro"  method="post" action="save.php">
					<div class="form_description">
					    
			<h2>Unos podataka</h2>
			<p>Formular za unošenje ocena i podataka o učeniku</p>
		</div>						
			<ul >
		<li id="li_3" >
		<label class="description" for="odeljenje">Izabrati odeljenje </label>
		<div>
		<select required class="element select medium" id="element_3" name="odeljenje"> 
			<option value="" selected="selected"></option>
<option value="e41" >E41</option>
<option value="e42" >E42</option>
		</select>
		</div><p class="guidelines" id="guide_3"><small>izabrati odeljenje</small></p> 
		</li>	
					<li id="li_1" >
		<label class="description" for="element_1">Ime </label>
		<div>
			<input required id="element_1" name="ime" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti ime učenika</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Prezime </label>
		<div>
			<input required id="element_2" name="prezime" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_2"><small>uneti prezime učenika</small></p> 
		</li>	
		<li id="li_1" >
		<label class="description" for="element_1">Broj u matičnoj knjizi </label>
		<div>
			<input required id="element_1" name="brmk" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti broj u mk</small></p>
		
		<li id="li_1" >
		<label class="description" for="element_1">Ime roditelja </label>
		<div>
			<input required id="element_1" name="imeroditelja" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti ime roditelja</small></p>	
		
		<li id="li_1" >
		<label class="description" for="element_1">Datum rodjenja (primer: 06.12.)</label>
		<div>
			<input required id="element_1" name="datumrodjenja" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti datum rodjenja primer: 07.03.</small></p>				
		
		<li id="li_1" >
		<label class="description" for="uspeh1">Izabrati godinu rodjenja </label>
		<div>
		<select required class="element select medium" id="element_3" name="godinarodjenja"> 
			<option value="" selected="selected"></option>
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
			<input required id="element_1" name="mestorodjenja" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti mesto rodjenja</small></p>			
					
		<li id="li_1" >
		<label class="description" for="element_1">Opština rodjenja </label>
		<div>
			<input required id="element_1" name="opstinarodjenja" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti opštinu rodjenja</small></p>
		
		<li id="li_1" >
		<label class="description" for="element_1">Država rodjenja </label>
		<div>
			<input required id="element_1" name="drzavarodjenja" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti državu rodjenja</small></p>
		
		<li id="li_1" >
		<label class="description" for="element_1">Delovodni broj</label><br> <label class="description" for="element_1">
		     </label>
		<div>
			<input required id="element_1" name="delovodnibridatdiplome" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti delovodni br </small></p>
		<li id="li_1" >
		<li id="li_3" >
		<label class="description" for="uspeh1">Postignut uspeh I razred (uneti samo prosek: 2.80)</label>
		<div>
			<input required id="element_1" name="uspeh1" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti uspeh I razred</small></p>
		
		<li id="li_3" >
		<label class="description" for="uspeh1">Postignut uspeh II razred (uneti samo prosek: 2.80)</label>
		<div>
			<input required id="element_1" name="uspeh2" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti uspeh II razred</small></p>
		
		<li id="li_3" >
		<label class="description" for="uspeh1">Postignut uspeh III razred (uneti samo prosek: 2.80)</label>
		<div>
			<input required id="element_1" name="uspeh3" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>uneti uspeh III razred</small></p>
		
		<li id="li_3" >
		<label class="description" for="uspeh1">Postignut uspeh IV razred (uneti samo prosek: 2.80)</label>
		<div>
			<input required id="element_1" name="uspeh4" class="element text medium" type="text" maxlength="255" value=""/> 
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
			<option value="" selected="selected"></option>
<option value="довољан(2)" > довољан(2)</option>
<option value="добар(3)" > добар(3)</option>
<option value="врло добар(4)" > врло добар(4)</option>
<option value="одличан(5)" > одличан(5)</option>
		</select> </td>
		        <td><select  required style="width:100px"class="element select medium" id="element_3" name="ocenapredmet1trecirazred"> 
			<option value="" selected="selected"></option>
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
			<option value="" selected="selected"></option>
<option value="довољан(2)" > довољан(2)</option>
<option value="добар(3)" > добар(3)</option>
<option value="врло добар(4)" > врло добар(4)</option>
<option value="одличан(5)" > одличан(5)</option>
		</select> </td>
		        <td><select required style="width:100px"class="element select medium" id="element_3" name="ocenapredmet2trecirazred"> 
			<option value="" selected="selected"></option>
<option value="довољан(2)" > довољан(2)</option>
<option value="добар(3)" > добар(3)</option>
<option value="врло добар(4)" > врло добар(4)</option>
<option value="одличан(5)" > одличан(5)</option>
		</select> </td>
		        <td><select  required style="width:100px"class="element select medium" id="element_3" name="ocenapredmet2cetvrtirazred"> 
			<option value="" selected="selected"></option>
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
			<option value="" selected="selected"></option>
<option value="A1" > A1</option>
<option value="A2" > A2</option>
<option value="A3" > A3</option>
<option value="A4" > A4</option>
<option value="A5" > A5</option>
<option value="A6" > A6</option>
<option value="A7" > A7</option>
<option value="A8" > A8</option>
		</select> </td>
		
		<td><input required id="element_1" name="brojbodova1" class="element text medium" type="text" maxlength="255" value=""/> </td>
		    </tr>
		    <tr>
		        <td><label class="description">2. zadatak: </label></td>
		        <td>
		        <select  required style="width:150px"class="element select medium" id="element_3" name="zadatak2"> 
			<option value="" selected="selected"></option>
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
		
		<td><input required id="element_1" name="brojbodova2" class="element text medium" type="text" maxlength="255" value=""/> </td>
		    </tr>
		    
		    <tr>
		        <td><label class="description">3. zadatak: </label></td>
		        <td>
		        <select  required style="width:150px"class="element select medium" id="element_3" name="zadatak3"> 
			<option value="" selected="selected"></option>
<option value="V1" > В1</option>
<option value="V2" > В2</option>
<option value="V3" > В3</option>
<option value="V4" > В4</option>

		</select> </td>
		
		<td><input  required id="element_1" name="brojbodova3" class="element text medium" type="text" maxlength="255" value=""/> </td>
		    </tr>
		</table>
		
		<br>
		<li id="li_3" >
		<label class="description">Teorija - maturski ispit</label>
		<br>
		<table>
        <tr><td> <label class="description">Ostvareni bodovi na testu - teorija </label></td> </tr>
        <tr><td><input  required id="element_1" name="brojbodovatest" class="element text medium" type="text" maxlength="255" value=""/> </td> </tr>
		</table>
		
		
					<li class="buttons">
			    <input type="hidden" name="form_id" value="30576" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Unesi" />
		</li>
			</ul>
		</form>	
		
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>
