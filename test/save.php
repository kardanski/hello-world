<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once 'login.php';
$link = mysqli_connect($hn,$un,$pw,$db);
mysqli_set_charset($link, 'utf8');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$odeljenje = mysqli_real_escape_string($link, $_REQUEST['odeljenje']);
$ime = mysqli_real_escape_string($link, $_REQUEST['ime']);
$prezime = mysqli_real_escape_string($link, $_REQUEST['prezime']);
$brmk = mysqli_real_escape_string($link, $_REQUEST['brmk']);
$imeroditelja = mysqli_real_escape_string($link, $_REQUEST['imeroditelja']);
$datumrodjenja = mysqli_real_escape_string($link, $_REQUEST['datumrodjenja']);
$godinarodjenja = mysqli_real_escape_string($link, $_REQUEST['godinarodjenja']);
$mestorodjenja = mysqli_real_escape_string($link, $_REQUEST['mestorodjenja']);
$opstinarodjenja = mysqli_real_escape_string($link, $_REQUEST['opstinarodjenja']);
$drzavarodjenja = mysqli_real_escape_string($link, $_REQUEST['drzavarodjenja']);
$delovodnibridatdiplome = mysqli_real_escape_string($link, $_REQUEST['delovodnibridatdiplome']);
$uspeh1 = mysqli_real_escape_string($link, $_REQUEST['uspeh1']);
$uspeh2 = mysqli_real_escape_string($link, $_REQUEST['uspeh2']);
$uspeh3 = mysqli_real_escape_string($link, $_REQUEST['uspeh3']);
$uspeh4 = mysqli_real_escape_string($link, $_REQUEST['uspeh4']);



$ocenapredmet1drugirazred = mysqli_real_escape_string($link, $_REQUEST['ocenapredmet1drugirazred']);
$ocenapredmet1trecirazred = mysqli_real_escape_string($link, $_REQUEST['ocenapredmet1trecirazred']);


$ocenapredmet2drugirazred = mysqli_real_escape_string($link, $_REQUEST['ocenapredmet2drugirazred']);
$ocenapredmet2trecirazred = mysqli_real_escape_string($link, $_REQUEST['ocenapredmet2trecirazred']);
$ocenapredmet2cetvrtirazred = mysqli_real_escape_string($link, $_REQUEST['ocenapredmet2cetvrtirazred']);

$zadatak1 = mysqli_real_escape_string($link, $_REQUEST['zadatak1']);
$zadatak2 = mysqli_real_escape_string($link, $_REQUEST['zadatak2']);
$zadatak3 = mysqli_real_escape_string($link, $_REQUEST['zadatak3']);

$brojbodova1 = mysqli_real_escape_string($link, $_REQUEST['brojbodova1']);
$brojbodova2 = mysqli_real_escape_string($link, $_REQUEST['brojbodova2']);
$brojbodova3 = mysqli_real_escape_string($link, $_REQUEST['brojbodova3']);

$brojbodovatest = mysqli_real_escape_string($link, $_REQUEST['brojbodovatest']);


// attempt insert query execution
$sql = "INSERT INTO $odeljenje (ime, prezime, brmk, imeroditelja, datumrodjenja, godinarodjenja, mestorodjenja, opstinarodjenja, drzavarodjenja, delovodnibridatdiplome, 
uspeh1, uspeh2, uspeh3, uspeh4, ocenapredmet1drugirazred, ocenapredmet1trecirazred,
 ocenapredmet2drugirazred, ocenapredmet2trecirazred, ocenapredmet2cetvrtirazred,
   zadatak1, zadatak2, zadatak3, brojbodova1, brojbodova2, brojbodova3, brojbodovatest) 
VALUES ('$ime', '$prezime', '$brmk', '$imeroditelja', '$datumrodjenja', '$godinarodjenja', '$mestorodjenja', '$opstinarodjenja', '$drzavarodjenja', '$delovodnibridatdiplome',
'$uspeh1', '$uspeh2', '$uspeh3', '$uspeh4', '$ocenapredmet1drugirazred', '$ocenapredmet1trecirazred',
'$ocenapredmet2drugirazred', '$ocenapredmet2trecirazred', '$ocenapredmet2cetvrtirazred',
   '$zadatak1', '$zadatak2', '$zadatak3', '$brojbodova1', '$brojbodova2', '$brojbodova3', '$brojbodovatest')";
if(mysqli_query($link, $sql)){
    header('Location: uneto.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
//header('Location: form.html');
?>
<html>
<body>

</body>
</html> 