<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Spisak učenika koji su uneti u bazu</title>
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
	<ul><label class="description" > <a href="form.php">Unos novih učenika</a><br>
			<a href="sviuneti.php">Pregledaj spisak unetih učenika</a><br>
			<a href="stampa.php">Štampanje podataka</a></label><br></ul>
	
							<div class="form_description">
					    
		<ul>	<h3>Spisak učenika unetih u bazu podataka: </h3>
			
		</div>						
			
			
				
	    <br>
	    
		<label class="description" for="odeljenje">Izabrati odeljenje: </label>
		<ul >
		    <li id="li_3" >
		    <a href=sviuneti2.php?ode=e41>E41</a><br>
		    <li id="li_3" >
		    <a href=sviuneti2.php?ode=e42>E42</a>
		    
				
			
			</ul>
		
		 
				
			
			
		
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>