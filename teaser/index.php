<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Reseteamos el view port a una escala inicial de 1 -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title>Colony 1209</title>
<link href="teaser.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.innerfade.js"></script>

<script type="text/javascript">
	var actual;
	var contador;
	
	var fotos = new Array();
	var textos = new Array();
	
	actual = 0;

	function bucle() {
		window.setTimeout('adelante()',7000);
		window.setTimeout('bucle()',7000);	
	}	
	
	function inicializoFotos() {
		if (window.XMLHttpRequest)
		{
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{
			// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}

		if (screen.width<=640) {
			xmlhttp.open("GET","xml/chico.xml",false);
		} else { 
			if (screen.width<=1280) {
				xmlhttp.open("GET","xml/medio.xml",false);
			} else { 
				xmlhttp.open("GET","xml/grande.xml",false);
			}  
		}
		
		xmlhttp.send();
		xmlDoc=xmlhttp.responseXML;

		var x = xmlDoc.getElementsByTagName("foto");
		for (i=0;i<x.length;i++)
		{
			fotos[i] = "images/" + x[i].getElementsByTagName("src")[0].childNodes[0].nodeValue;
			textos[i] = x[i].getElementsByTagName("texto")[0].childNodes[0].nodeValue;
		}
		
		contador = fotos.length;
				
		var src = fotos[0];	
		var texto = textos[0];
		
		document.body.style.backgroundImage = "url(" + src + ")" ;		
		document.getElementById("texto").innerHTML = texto;
	}

	function CambiarImagen(orden) {
		actual = orden;
		
		var src = fotos[actual];
		var texto = textos[actual];

		document.body.style.backgroundImage = "url(" + src + ")" ;
		document.getElementById("texto").innerHTML = texto;
		
		 if (orden == 0) {
			 document.ft0.src = "img/circle_filled.png";
		 } else {
			 document.ft0.src = "img/circle.png";
		 }
		 
		 if (orden == 1) {
			 document.ft1.src = "img/circle_filled.png";
		 } else {
			 document.ft1.src = "img/circle.png";
		 }
		 
		 if (orden == 2) {
			document.ft2.src = "img/circle_filled.png";
		 } else {
			document.ft2.src = "img/circle.png";
		 }
		 
		 if (orden == 3) {
			document.ft3.src = "img/circle_filled.png";
		 } else {
			document.ft3.src = "img/circle.png";
		 }
		 
		 if (orden == 4) {
			document.ft4.src = "img/circle_filled.png";
		 } else {
			document.ft4.src = "img/circle.png";
		 }
		 
		 if (orden == 5) {
			document.ft5.src = "img/circle_filled.png";
		 } else {
			document.ft5.src = "img/circle.png";
		 }
		 
		 if (orden == 6) {
			document.ft6.src = "img/circle_filled.png";
		 } else {
			document.ft6.src = "img/circle.png";
		 }
		 
		 if (orden == 7) {
			document.ft7.src = "img/circle_filled.png";
		 } else {
			document.ft7.src = "img/circle.png";
		 }
	}

	function atras() {
		if (actual > 0) {
			actual = actual - 1;
		} else {
			actual = contador - 1;	
		}
			
		var src = fotos[actual];
		var texto = textos[actual];

		document.body.style.backgroundImage = "url(" + src + ")" ;
		document.getElementById("texto").innerHTML = texto;
		 
		 if (actual == 0) {
			 document.ft0.src = "img/circle_filled.png";
		 } else {
			 document.ft0.src = "img/circle.png";
		 }
		 
		 if (actual == 1) {
			 document.ft1.src = "img/circle_filled.png";
		 } else {
			 document.ft1.src = "img/circle.png";
		 }
		 
		 if (actual == 2) {
			document.ft2.src = "img/circle_filled.png";
		 } else {
			document.ft2.src = "img/circle.png";
		 }
		 
		 if (actual == 3) {
			document.ft3.src = "img/circle_filled.png";
		 } else {
			document.ft3.src = "img/circle.png";
		 }
		 
		 if (actual == 4) {
			document.ft4.src = "img/circle_filled.png";
		 } else {
			document.ft4.src = "img/circle.png";
		 }
		 
		 if (actual == 5) {
			document.ft5.src = "img/circle_filled.png";
		 } else {
			document.ft5.src = "img/circle.png";
		 }
		 
		 if (actual == 6) {
			document.ft6.src = "img/circle_filled.png";
		 } else {
			document.ft6.src = "img/circle.png";
		 }
		 
		 if (actual == 7) {
			document.ft7.src = "img/circle_filled.png";
		 } else {
			document.ft7.src = "img/circle.png";
		 }
	}

	function adelante() {
		var contador_compare = contador - 1;
		
		if (actual < contador_compare) {	
			actual = actual + 1;
		} else {
			actual = 0;
		}

		var src = fotos[actual];
		var texto = textos[actual];

		document.body.style.backgroundImage = "url(" + src + ")" ;
		document.getElementById("texto").innerHTML = texto; 
			
		if (actual == 0) {
			document.ft0.src = "img/circle_filled.png";
		} else {
			document.ft0.src = "img/circle.png";
		}

		if (actual == 1) {
			document.ft1.src = "img/circle_filled.png";
		} else {
			document.ft1.src = "img/circle.png";
		}

		if (actual == 2) {
			document.ft2.src = "img/circle_filled.png";
		} else {
			document.ft2.src = "img/circle.png";
		}

		if (actual == 3) {
			document.ft3.src = "img/circle_filled.png";
		} else {
			document.ft3.src = "img/circle.png";
		}	

		if (actual == 4) {
			document.ft4.src = "img/circle_filled.png";
		} else {
			document.ft4.src = "img/circle.png";
		}

		if (actual == 5) {
			document.ft5.src = "img/circle_filled.png";
		} else {
			document.ft5.src = "img/circle.png";
		}

		if (actual == 6) {
			document.ft6.src = "img/circle_filled.png";
		} else {
			document.ft6.src = "img/circle.png";
		}

		if (actual == 7) {
			document.ft7.src = "img/circle_filled.png";
		} else {
			document.ft7.src = "img/circle.png";
		}
	}	

	function controlarDatos() {
		var puedoSeguir = 0;
		var form=document.formu;
		
		if (form.bedrom_1.checked) {
			puedoSeguir = 1;
		}

		if (form.bedrom_2.checked) {
			puedoSeguir = 1;
		} 

		if (puedoSeguir == 1) {
			if (form.first_name.value == "" || form.last_name.value == "" || form.email.value == ""){
				alert("Complete the required fields");
			} else {
				form.submit();
			}
		} else {
			alert("Complete the required fields");		
		}	
	}	
</script>

</head>

<body id="fondos" onLoad="inicializoFotos(); bucle();">
	<div id="content">    
		<?php require_once("includes/form.php"); ?>
    </div>
</body>
</html>
