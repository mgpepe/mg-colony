<?php 	

	if ($_POST['tsk']) {
		$tsk = $_POST['tsk'];
	}else{
		$tsk = $_GET['tsk'];
	}

	switch($tsk) {	
		case"fa":
			// agregar
			
			func_agregar();

			echo "<script> alert('Thank you. Your information has been added to our database.'); </script>";
			
			echo "<script> window.location = 'index.php?tsk=g' </script>";					
		break;
		
		case "g":
			gracias();
		break;
		
		case "l":
			listar();
		break;
		
		default:
			listar();
		break;	
	}
	
	
function listar() {
?>	
	<article>
		<div id="flechaIzq">
			<a href="#" onClick="$.backstretch('prev'); return false;">
				<img src="img/arrow_left.png" width="77" height="76" alt="left_arrow"  border="0">
			</a>	
		</div>

		<div id="flechaDer">
			<a href="#" onClick="$.backstretch('next'); return false;">
				<img src="img/arrow_right.png" width="77" height="76" alt="right_arrow" border="0">
			</a>	
		</div>
		
		<div id="welcome"></div>
		
		<div id="formulario">
			<img src="img/logo_colony1209.png" width="122" height="96" alt="logo_colony1209" class="logo">   
			<h1>COMING SOON</h1>   
			<h2>REGISTER TODAY FOR OUR UPCOMING SNEAK PREVIEW EVENT THIS FALL/WINTER.</h2>
			<form action="index.php?tsk=fa" method="post" enctype="multipart/form-data" name="formu">
				<input name="first_name" type="text" value="FIRST NAME" size="28" class="campo" onFocus="if (this.value=='FIRST NAME') this.value='';" onBlur="if (this.value=='') this.value='FIRST NAME';">
				<input name="last_name" type="text" value="LAST NAME" size="28" class="campo" onFocus="if (this.value=='LAST NAME') this.value='';" onBlur="if (this.value=='') this.value='LAST NAME';">
				<input name="zipcode" type="text" value="ZIP CODE" size="28" class="campo" onFocus="if (this.value=='ZIP CODE') this.value='';" onBlur="if (this.value=='') this.value='ZIP CODE';">
				<input name="email" type="text" value="E-MAIL" size="28" class="campo" onFocus="if (this.value=='E-MAIL') this.value='';" onBlur="if (this.value=='') this.value='E-MAIL';"><br>
				<div class="room"><input name="bedrom_1" type="checkbox" value="1 bedroom"> 1	BEDROOM</div>
				<div class="room"><input name="bedrom_2" type="checkbox" value="2 bedroom"> 2 BEDROOMS</div>
				<p class="room"> *All fields are required</p>
				<div class="submit"><a href="#" onClick="controlarDatos();">SUBMIT</a></div>
			</form>  
			<img src="img/aptsandlofts.png" width="174" height="48" alt="logo_colony1209" class="logo"  border="0">    <br>
			<img src="img/rebny.png" width="46" height="13" alt="logo_colony1209" class="rebny">   
		</div>		
	</article>
	
	<footer>
		
		<div id="btnFotosFondo">
			<a id="circle-10" class="control-circle" href="#" onClick="$.backstretch('show',10);return false;">  </a>
                    <a id="circle-9" class="control-circle" href="#" onClick="$.backstretch('show',9); return false;">  </a>
                    <a id="circle-8" class="control-circle" href="#" onClick="$.backstretch('show',8); return false;">  </a>
                    <a id="circle-7" class="control-circle" href="#" onClick="$.backstretch('show',7); return false;">  </a>
                    <a id="circle-6" class="control-circle" href="#" onClick="$.backstretch('show',6); return false;">  </a>
                    <a id="circle-5" class="control-circle" href="#" onClick="$.backstretch('show',5); return false;">  </a>
                    <a id="circle-4" class="control-circle" href="#" onClick="$.backstretch('show',4); return false;">  </a>
                    <a id="circle-3" class="control-circle" href="#" onClick="$.backstretch('show',3); return false;">  </a>
                    <a id="circle-2" class="control-circle" href="#" onClick="$.backstretch('show',2); return false;">  </a>
                    <a id="circle-1" class="control-circle" href="#" onClick="$.backstretch('show',1); return false;">  </a>
                    <a id="circle-0" class="control-circle" href="#" onClick="$.backstretch('show',0); return false;"> </a>
			
			<p id="picture" class="creditos">Photograph by Travis Dubreuil - Bushwick Resident</p>
			<p id="texto" class="creditos">Picture</p>
		</div>
        
        
		<div id="iconos">
			<img src="img/follow_us.png" width="90" height="46">
			<a href="https://twitter.com/aptsandlofts" target="_blank"><img src="img/twitter.png" alt="twitter" width="46" height="46" border="0"></a>
			<a href="https://www.facebook.com/aptsandlofts" target="_blank"><img src="img/facebook.png" alt="facebook" width="46" height="46" border="0"></a>
			<a href="http://pinterest.com/source/aptsandlofts.com/" target="_blank"><img src="img/pinteres.png" alt="pinteres" width="46" height="46" border="0"></a>
		</div>
        
	</footer>
<?php
}

function gracias() {
?>	
	<article>
		<div id="flechaIzq">
			<a href="#" onClick="$.backstretch('prev'); return false;">
				<img src="img/arrow_left.png" width="77" height="76" alt="left_arrow"  border="0">
			</a>	
		</div>

		<div id="flechaDer">
			<a href="#" onClick="$.backstretch('next'); return false;">
				<img src="img/arrow_right.png" width="77" height="76" alt="right_arrow" border="0">
			</a>	
		</div>
		
		<div id="welcome"></div>	
		
	  <div id="formulario">
			<img src="img/logo_colony1209.png" width="122" height="96" alt="logo_colony1209" class="logo">
			<h1>COMING SOON</h1>   
			<h2>REGISTER TODAY FOR OUR UPCOMING SNEAK PREVIEW EVENT THIS FALL/WINTER.</h2>
			<div id="gracias">
			<span style="">
			THANK YOU.
			<br>
			YOUR INFORMATION HAS BEEN ADDED TO OUR DATABASE.
			</div>
			<img src="img/aptsandlofts.png" width="174" height="48" alt="logo_colony1209" class="logo"  border="0">    <br>
			<img src="img/rebny.png" width="46" height="13" alt="logo_colony1209" class="rebny">   
		</div>			
	</article>
	
	<footer>
		
		<div id="btnFotosFondo">
			<a id="circle-10" class="control-circle" href="#" onClick="$.backstretch('show',10);return false;">  </a>
                    <a id="circle-9" class="control-circle" href="#" onClick="$.backstretch('show',9); return false;">  </a>
                    <a id="circle-8" class="control-circle" href="#" onClick="$.backstretch('show',8); return false;">  </a>
                    <a id="circle-7" class="control-circle" href="#" onClick="$.backstretch('show',7); return false;">  </a>
                    <a id="circle-6" class="control-circle" href="#" onClick="$.backstretch('show',6); return false;">  </a>
                    <a id="circle-5" class="control-circle" href="#" onClick="$.backstretch('show',5); return false;">  </a>
                    <a id="circle-4" class="control-circle" href="#" onClick="$.backstretch('show',4); return false;">  </a>
                    <a id="circle-3" class="control-circle" href="#" onClick="$.backstretch('show',3); return false;">  </a>
                    <a id="circle-2" class="control-circle" href="#" onClick="$.backstretch('show',2); return false;">  </a>
                    <a id="circle-1" class="control-circle" href="#" onClick="$.backstretch('show',1); return false;">  </a>
                    <a id="circle-0" class="control-circle" href="#" onClick="$.backstretch('show',0); return false;"> </a>
			
			<p id="picture" class="creditos">Photograph by Travis Dubreuil - Bushwick Resident</p>
			<p id="texto" class="creditos">Picture</p>
		</div>
        
        
		<div id="iconos">
			<img src="img/follow_us.png" width="90" height="46">
			<a href="https://twitter.com/aptsandlofts" target="_blank"><img src="img/twitter.png" alt="twitter" width="46" height="46" border="0"></a>
			<a href="https://www.facebook.com/aptsandlofts" target="_blank"><img src="img/facebook.png" alt="facebook" width="46" height="46" border="0"></a>
			<a href="http://pinterest.com/source/aptsandlofts.com/" target="_blank"><img src="img/pinteres.png" alt="pinteres" width="46" height="46" border="0"></a>
		</div>
        
	</footer>


<?php
}

function func_agregar() {
	
	$first_name = addslashes(secureSQL($_POST['first_name']));
	$last_name = addslashes(secureSQL($_POST['last_name']));
	$zip = addslashes(secureSQL($_POST['zipcode']));
	$email = addslashes(secureSQL($_POST['email']));
	$bedrom_1 = addslashes(secureSQL($_POST['bedrom_1']));
	$bedrom_2 = addslashes(secureSQL($_POST['bedrom_2']));

	if ($bedrom_1 == "1 bedroom") {
		$bedrom_1 = 1;
	} else {
		$bedrom_1 = 0;	
	}
	
	if ($bedrom_2 == "2 bedroom") {
		$bedrom_2 = 1;
	} else {
		$bedrom_2 = 0;	
	}
	
	if ($bedrom_1 == 1) {
		$bedrom_1 = "Yes";
	} else {
		$bedrom_1 = "No";
	}

	if ($bedrom_2 == 1) {
		$bedrom_2 = "Yes";
	} else {
		$bedrom_2 = "No";
	}
	
	$mensaje = 
	"
	A new potential client for 1209 Colony has sent their information. See below.
	<br><br>
	First Name: ".$first_name."<br>
	Last Name: ".$last_name."<br>
	Zip: ".$zip."<br>
	Email: ".$email."<br>	
	1 bedrom: ".$bedrom_1."<br>
	2 bedroms: ".$bedrom_2."
	";
	
	correo($mensaje);
	
}

function correo($mensaje) {

	require_once("includes/phpmailer/class.phpmailer.php");	

	$mail = new PHPMailer();

	$mail->SetLanguage("es", "phpmailer/language/");
	$mail->Mailer   ="mail";	
	$mail->Encoding ="8bit";
	$mail->CharSet  ="iso-8859-1";
	$mail->Host = "mail.visualecom.com";
	$mail->Port = 25;	
	$mail->From = "colony@aptsandlofts.com";
	$mail->FromName = "1209 Colony";
	$mail->Subject = "New potential client for 1209 colony";
	$mail->IsHTML(true);
	$mail->Body = $mensaje;
	
	$mail->AddAddress("colony@aptsandlofts.com");
				
	if(!$mail->Send()) {
		// no pudo mandar el msj
	} else {
		// se mandó el mail
	}
	
	$mail->ClearAddresses();
	
}	

function secureSQL($strVar) {
		$strVar = str_replace("SELECT", "", $strVar);
		$strVar = str_replace("UPDATE", "", $strVar);
		$strVar = str_replace("INSERT", "", $strVar);
		$strVar = str_replace("DELETE", "", $strVar);
		$strVar = str_replace("FROM", "", $strVar);
		$strVar = str_replace("XP_", "", $strVar);
		$strVar = str_replace("select", "", $strVar);
		$strVar = str_replace("update", "", $strVar);
		$strVar = str_replace("insert", "", $strVar);
		$strVar = str_replace("delete", "", $strVar);
		$strVar = str_replace("from", "", $strVar);
		$strVar = str_replace("xp_", "", $strVar);
		$strVar = str_replace(";", "", $strVar);
		$strVar = str_replace("--", "", $strVar);
		$strVar = str_replace("'", "", $strVar);
		$strVar = str_replace("*", "", $strVar);
		return $strVar;
	}
?>
