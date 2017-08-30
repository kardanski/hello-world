<!DOCTYPE html>
<!-- saved from url=(0062)file:///home/laki/Desktop/GOTOVO/TEHNICARI/tehnicarStampa.html -->
<html lang="en"><head><meta http-equiv="Content-Type"  content="text/html;charset=UTF-8">
		<title>Stampanje</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="tehnicarKalibrator_files/stilTehnicar.css">
		<script src="tehnicarKalibrator_files/jquery-3.js"></script>
	<!-- <script src="tehnicarKalibrator_files/mrdalo.js"></script> -->
	    <script src="tehnicarKalibrator_files/stampaNORMAL.js"></script>
	   
	</head>
	
	<body>	
<?php
	
	require_once 'login.php';
	require_once 'spisak.php';
$conn=new mysqli($hn,$un,$pw,$db);
mysqli_set_charset($conn, 'utf8');

if ($conn->connect_error)die($conn->connect_error);
$odel=$_GET['odel'];
$ucen=$_GET['ucenik'];

$query="SELECT * FROM $odel WHERE id=$ucen ORDER BY id DESC";
$result=$conn->query($query);
if(!$result)die($conn->error);

$row=$result->fetch_array(MYSQLI_ASSOC);

if ($row['uspeh1'] <2.5 ){ $textuspeh1="довољан(2)";}
elseif(2.5<= $row['uspeh1']  and $row['uspeh1'] <3.5) {$textuspeh1="добар(3)";}
elseif(3.5<= $row['uspeh1']  and $row['uspeh1'] <4.5) {$textuspeh1="врло добар(4)";}
elseif(4.5<= $row['uspeh1']  and $row['uspeh1'] <=5) {$textuspeh1="одличан(5)";}

if ($row['uspeh2'] <2.5 ){ $textuspeh2="довољан(2)";}
elseif(2.5<= $row['uspeh2']  and $row['uspeh2'] <3.5) {$textuspeh2="добар(3)";}
elseif(3.5<= $row['uspeh2']  and $row['uspeh2'] <4.5) {$textuspeh2="врло добар(4)";}
elseif(4.5<= $row['uspeh2']  and $row['uspeh2'] <=5) {$textuspeh2="одличан(5)";}


if ($row['uspeh3'] <2.5 ){ $textuspeh3="довољан(2)";}
elseif(2.5<= $row['uspeh3']  and $row['uspeh3'] <3.5) {$textuspeh3="добар(3)";}
elseif(3.5<= $row['uspeh3']  and $row['uspeh3'] <4.5) {$textuspeh3="врло добар(4)";}
elseif(4.5<= $row['uspeh3']  and $row['uspeh3'] <=5) {$textuspeh3="одличан(5)";}

if ($row['uspeh4'] <2.5 ){ $textuspeh4="довољан(2)";}
elseif(2.5<= $row['uspeh4']  and $row['uspeh4'] <3.5) {$textuspeh4="добар(3)";}
elseif(3.5<= $row['uspeh4']  and $row['uspeh4'] <4.5) {$textuspeh4="врло добар(4)";}
elseif(4.5<= $row['uspeh4']  and $row['uspeh4'] <=5) {$textuspeh4="одличан(5)";}



$total=($row['brojbodova1'])+($row['brojbodova2'])+($row['brojbodova3']);

if ($total <=150 ){ $uspehzadatak="недовољан(1)";}
elseif(151<= $total  and $total <=189) {$uspehzadatak="довољан(2)";}
elseif(190<= $total  and $total <=225) {$uspehzadatak="добар(3)";}
elseif(226<= $total  and $total <=260) {$uspehzadatak="врло добар(4)";}
elseif(261<= $total  and $total <=300) {$uspehzadatak="одличан(5)";}

if ($row['brojbodovatest'] <=50 ){ $uspehtest="недовољан(1)";}
elseif(50.5<= $row['brojbodovatest']  and $row['brojbodovatest'] <=63) {$uspehtest="довољан(2)";}
elseif(63.5<= $row['brojbodovatest']  and $row['brojbodovatest'] <=75) {$uspehtest="добар(3)";}
elseif(75.5<= $row['brojbodovatest']  and $row['brojbodovatest'] <=87) {$uspehtest="врло добар(4)";}
elseif(87.5<= $row['brojbodovatest']  and $row['brojbodovatest'] <=100) {$uspehtest="одличан(5)";}

if ($row['zadatak1']=="A1") {$aspisak=$A1;}
elseif ($row['zadatak1']=="A2") {$aspisak=$A2;}
elseif ($row['zadatak1']=="A3") {$aspisak=$A3;}
elseif ($row['zadatak1']=="A4") {$aspisak=$A4;}
elseif ($row['zadatak1']=="A5") {$aspisak=$A5;}
elseif ($row['zadatak1']=="A6") {$aspisak=$A6;}
elseif ($row['zadatak1']=="A7") {$aspisak=$A7;}
elseif ($row['zadatak1']=="A8") {$aspisak=$A8;}

if ($row['zadatak2']=="B1") {$bspisak=$B1;}
elseif ($row['zadatak2']=="B2") {$bspisak=$B2;}
elseif ($row['zadatak2']=="B3") {$bspisak=$B3;}
elseif ($row['zadatak2']=="B4") {$bspisak=$B4;}
elseif ($row['zadatak2']=="B5") {$bspisak=$B5;}
elseif ($row['zadatak2']=="B6") {$bspisak=$B6;}
elseif ($row['zadatak2']=="B7") {$bspisak=$B7;}
elseif ($row['zadatak2']=="B8") {$bspisak=$B8;}
elseif ($row['zadatak2']=="B9") {$bspisak=$B9;}

if ($row['zadatak3']=="V1") {$vspisak=$V1;}
elseif ($row['zadatak3']=="V2") {$vspisak=$V2;}
elseif ($row['zadatak3']=="V3") {$vspisak=$V3;}
elseif ($row['zadatak3']=="V4") {$vspisak=$V4;}

?>
							<div id="alati" style="width:100%;height:10mm;margin-top:10mm;padding:0px;background-color:transparent;position:fixed;width:100%;z-index:100;border-style:none;">
	
	
									
					<a href="form.php"><button id="upisUBazu" style="background-image:url('upis.svg');"></button></a>
	
					<button id="izborUcenika" style=" background-image:url('ucenik.svg');"></button>
					<a href="stampa.php"><button id="izgedPreStampe" style=" background-image:url('preview.svg');"></button></a>
					<button id="stampa" onclick="myFunction()" style="background-image:url('stampa.svg');"></button>

					
				</div>	
<?php
echo <<<_END
                <div id="spoljna" style="background-image:url('spol256x385.jpg');page-break-after:always;position:relative;left:0mm;top:0mm;">
				
				
			<!-- ime skole -->	
			<textarea class="krupno" style="left: 815.667px; top: 91px; width: 616px; height: 37px; color: yellow; border-style: dotted;">ТЕХНИЧКА ШКОЛА ГСП</textarea>
			
			
			<!-- delovodni broj uverenja itd -->
			<textarea class="krupno" style="left: 835.333px; top: 130px; width: 269px; height: 38px; color: yellow; border-style: dotted; resize: none;">Београду</textarea>
			<textarea class="srednje" placeholder="delUver" style="left: 826.583px; top: 179px; width: 286px; height: 30px; color: yellow; border-style: dotted;">$fiksuverenja$row[delovodnibridatdiplome] $datuverenja</textarea>
			<textarea class="srednje" placeholder="brMaticna" style="left: 964.417px; top: 217px; width: 147px; height: 30px; color: yellow; border-style: dotted;">$row[brmk]</textarea>
			


			
			
			<!-- odobrenje skoli-->
			<textarea placeholder="resenjeSkola" style="left: 1213.58px; top: 144px; width: 115px; height: 28px; color: yellow; border-style: dotted; font-family: &quot;Arial Narrow&quot;; font-size: 14px;">022-05-155/94-03</textarea>
			<textarea placeholder="od" style="left: 1321.5px; top: 145px; width: 129px; height: 21px; color: yellow; border-style: dotted; font-family: &quot;Arial Narrow&quot;; font-size: 14px;">07.06.2011. год.</textarea>			
					<textarea placeholder="Minist" style="left: 1128.5px; top: 182px; width: 307px; height: 38px; color: yellow; border-style: dotted; font-family:'Arial Narrow';font-size: 14px;">Министарство просвете Републике Србије</textarea>
					
			<!-- podaci o  uceniku -->
			<textarea class="ime" placeholder="Ime i Prezime" style="left: 916.5px; top: 477px; width: 414px; height: 37px; color: yellow; border-style: dotted;">$row[ime] $row[prezime]</textarea>
			<textarea class="srednje" placeholder="Roditelj" style="left: 827.333px; top: 522px; width: 122px; height: 36px; color: yellow; border-style: dotted;">$row[imeroditelja]</textarea>			
			<textarea class="srednje" placeholder="rodjDanMes" style="left: 1007.58px; top: 523px; width: 77px; height: 33px; color: yellow; border-style: dotted;">$row[datumrodjenja]</textarea>
			<textarea class="srednje" placeholder="rodjGod" style="left: 1082.5px; top: 523px; color: yellow; border-style: dotted; width: 63px; height: 30px;">$row[godinarodjenja]</textarea>
			<textarea class="srednje" placeholder="rodjMest" style="left: 1171.42px; top: 522px; width: 258px; height: 33px; color: yellow; border-style: dotted;">$row[mestorodjenja]</textarea>
			<textarea class="srednje" placeholder="Opstina" style="left: 869.667px; top: 560px; width: 249px; height: 37px; color: yellow; border-style: dotted;">$row[opstinarodjenja]</textarea>
			<textarea class="srednje" placeholder="Drzava" style="left: 1169.58px; top: 559px; width: 260px; height: 36px; color: yellow; border-style: dotted;">$row[drzavarodjenja]</textarea>
			<textarea class="srednje" placeholder="delDiplome" style="left: 930.5px; top: 696px; width: 388px; height: 29px; color: yellow; border-style: dotted;">$fiksdiplome$row[delovodnibridatdiplome]$datdiplome</textarea>	
					
		</div>
		
		
		
	<!--   -----------ovde pocinje druga stana-------------------------------------------------------------------------------------------- -->
		
		<div id="unutrasnja" style="background-image:url('unut256x385.jpg');position:relative;left:0mm;top:0mm;">
			
			
			<!-- Podaci o nastavnom planu i programu-->
			<textarea class="srednje" placeholder="glasnik" style="left: 558.017px; top: 43px; color: yellow; border-style: dotted; width: 87px; height: 28px;">2011/12</textarea>
			<textarea class="srednje" placeholder="podrucje" style="left: 166.017px; top: 72px; color: yellow; border-style: dotted; width: 485px; height: 24px;">Електротехника и шпанцовање</textarea>
			<textarea class="srednje" placeholder="oblast" style="left: 166.017px; top: 102px; color: yellow; border-style: dotted; width: 485px; height: 26px;">Електротехника</textarea>
			<textarea class="srednje" placeholder="profil" style="left: 168.017px; top: 132px; color: yellow; border-style: dotted; width: 481px; height: 30px;">Електротехничар за електронику на возилима</textarea>
			<textarea class="srednje" placeholder="trajanje" style="left: 183.017px; top: 162px; color: yellow; border-style: dotted; width: 449px; height: 32px;">Четири године</textarea>
			<textarea class="srednje" placeholder="opstOB" style="left: 554.017px; top: 194px; color: yellow; border-style: dotted; width: 94px; height: 27px;">1000</textarea>
			<textarea class="srednje" placeholder="Strucni" style="left: 553.017px; top: 224px; color: yellow; border-style: dotted; width: 95px; height: 38px;">1000</textarea>
			<textarea class="srednje" placeholder="Izbor" style="left: 552.017px; top: 255px; color: yellow; border-style: dotted; width: 96px; height: 30px;">1000</textarea>
			<textarea placeholder="Prak" style="left: 553.017px; top: 301px; color: yellow; border-style: dotted; width: 96px; height: 37px;">1000</textarea>
			<textarea class="srednje" placeholder="napomena" style="left: 178.017px; top: 361px; color: yellow; border-style: dotted; width: 458px; height: 98px;">Ко је вама дао на правите обрзац, ни пакао му неће тешко пасти!!!!</textarea>
			
			<!-- Ostavareni ishodi...Znanja Kompetincije..... -->
			<textarea class="sitno" placeholder="znanja" style="left: 20.0167px; top: 552px; color: yellow; border-style: dotted; width: 186px; height: 387px;">Све уме, ал неће!</textarea>
			<textarea class="sitno" placeholder="vestine" style="left: 232.017px; top: 552px; color: yellow; border-style: dotted; width: 195px; height: 386px;">Лоповске лоповске лоповске</textarea>
			<textarea class="sitno" placeholder="kompeten" style="left: 450.017px; top: 551px; color: yellow; border-style: dotted; width: 191px; height: 389px;">Још какоЈТЈГЈДЈДЈГДЈЈЈ</textarea>	
			
			<!-- Podaci o postignutom uspehu na kraju svake godine -->		
			<textarea class="sitno" placeholder="Uspeh1" style="left: 925.017px; top: 71px; color: yellow; border-style: dotted; width: 115px; height: 32px;">$textuspeh1</textarea>			
			<textarea class="sitno" placeholder="Uspeh2" style="left: 1056.02px; top: 71px; color: yellow; border-style: dotted; width: 115px; height: 32px;">$textuspeh2</textarea>
			<textarea class="sitno" placeholder="Uspeh3" style="left: 1185.02px; top: 71px; color: yellow; border-style: dotted; width: 125px; height: 29px;">$textuspeh3</textarea>
			<textarea class="sitno" placeholder="Uspeh4" style="left: 1320.02px; top: 72px; color: yellow; border-style: dotted; width: 119px; height: 34px;">$textuspeh4</textarea>
			<textarea class="sitno" placeholder="prosek1" style="left: 920.017px; top: 94px; color: yellow; border-style: dotted; width: 126px; height: 32px;">$row[uspeh1]</textarea>
			<textarea class="sitno" placeholder="prosek2" style="left: 1065.02px; top: 95px; color: yellow; border-style: dotted; width: 100px; height: 37px;">$row[uspeh2]</textarea>
			<textarea class="sitno" placeholder="prosek3" style="left: 1185.02px; top: 94px; color: yellow; border-style: dotted; width: 126px; height: 29px;">$row[uspeh3]</textarea>
			<textarea class="sitno" placeholder="prosek4" style="left: 1332.02px; top: 94px; color: yellow; border-style: dotted; width: 95px; height: 32px;">$row[uspeh4]</textarea>
			
			<!-- Uspeh iz znacajnih predmeta -->
			<textarea class="uskiFont" placeholder="SUS" style="left: 800.017px; top: 205px; color: yellow; border-style: dotted; width: 249px; height: 18px;">Мотори СУС и моторна возила </textarea>
			<textarea class="sitno" placeholder="SUS2" style="left: 1149.02px; top: 203px; color: yellow; border-style: dotted; width: 98px; height: 28px;">$row[ocenapredmet1drugirazred]</textarea>
			<textarea class="sitno" placeholder="SUS3" style="left: 1251.02px; top: 203px; color: yellow; border-style: dotted; width: 94px; height: 28px;">$row[ocenapredmet1trecirazred]</textarea>
			<textarea class="uskiFont" placeholder="EES" style="left: 800.017px; top: 227px; color: yellow; border-style: dotted; width: 250px; height: 21px;">Електрични и електронски системи на возилима</textarea>
			<textarea class="sitno" placeholder="EES2" style="left: 1154.02px; top: 226px; color: yellow; border-style: dotted; width: 88px; height: 30px;">$row[ocenapredmet2drugirazred]</textarea>
			<textarea class="sitno" placeholder="EES3" style="left: 1251.02px; top: 226px; color: yellow; border-style: dotted; width: 94px; height: 28px;">$row[ocenapredmet2trecirazred]</textarea>
			<textarea class="sitno" placeholder="EES4" style="left: 1348.02px; top: 227px; color: yellow; border-style: dotted; width: 97px; height: 23px;">$row[ocenapredmet2cetvrtirazred]</textarea>
			
			<!-- Maturski zadaci i bodovi -->
	
	
			
			<textarea class="sitno" placeholder="crtaPrekoZavrsnog" style="left: 840.017px; top: 316px; color: yellow; border-style: dotted; width: 97px; height: 23px;">=========</textarea>
			
			<textarea placeholder="zadatakA" style="left: 802.017px; top: 386px; color: yellow; border-style: dotted; width: 345px; height: 19px; font-family: &quot;Arial Narrow&quot;; font-size: 8px;">$aspisak
			
			                        </textarea>
            <textarea class="sitno" placeholder="bodA" style="left: 1150.02px; top: 388px; color: yellow; border-style: dotted; width: 97px; height: 23px;">$row[brojbodova1]</textarea>
			<textarea placeholder="zadatakB" style="left: 802.017px; top: 408px; color: yellow; border-style: dotted; width: 348px; height: 22px; font-family: &quot;Arial Narrow&quot;; font-size: 8px;">$bspisak
    
                                    </textarea>
            <textarea class="sitno" placeholder="bodB" style="left: 1150.02px; top: 409px; color: yellow; border-style: dotted; width: 97px; height: 23px;">$row[brojbodova2]</textarea>
			<textarea placeholder="zadatakV" style="left: 801.017px; top: 431px; color: yellow; border-style: dotted; width: 347px; height: 19px; font-family: &quot;Arial Narrow&quot;; font-size: 8px;">$vspisak
 
                                    </textarea>	
            <textarea class="sitno" placeholder="bodV" style="left: 1150.02px; top: 432px; color: yellow; border-style: dotted; width: 97px; height: 23px;">$row[brojbodova3]</textarea>		
			<textarea class="srednje" placeholder="UkBod" style="left: 1249.02px; top: 414px; color: yellow; border-style: dotted; width: 97px; height: 28px;">$total</textarea>
			<textarea class="sitno" placeholder="UspMat" style="left: 1351.02px; top: 417px; color: yellow; border-style: dotted; width: 92px; height: 66px;">$uspehzadatak</textarea>
			
			
			
			<!-- TEST na maturskom -->
			<textarea class="sitno" placeholder="TestBod" style="left: 805.017px; top: 569px; color: yellow; border-style: dotted; width: 337px; height: 26px;">$row[brojbodovatest]</textarea>
			<textarea class="sitno" placeholder="TestOcen" style="left: 1154.02px; top: 569px; color: yellow; border-style: dotted; width: 287px; height: 25px;">$uspehtest</textarea>
			
			
		</div>
	
_END;
?>

























</body></html>
