<?php

	$mobile_browser = '0';

	//$_SERVER['HTTP_USER_AGENT'] -> el agente de usuario que está accediendo a la página.
	//preg_match -> Realizar una comparación de expresión regular

	if(preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone)/i',strtolower($_SERVER['HTTP_USER_AGENT']))){
		$mobile_browser++;
	}

	//$_SERVER['HTTP_ACCEPT'] -> Indica los tipos MIME que el cliente puede recibir. 
	if((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml')>0) or
		((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))){
		$mobile_browser++;
	}

	$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'],0,4));
	$mobile_agents = array(
		'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
		'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
		'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
		'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
		'newt','noki','oper','palm','pana','pant','phil','play','port','prox',
		'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
		'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
		'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
		'wapr','webc','winw','winw','xda','xda-');

	//buscar agentes en el array de agentes
	if(in_array($mobile_ua,$mobile_agents)){
		$mobile_browser++;
	}

	//$_SERVER['ALL_HTTP'] -> Todas las cabeceras HTTP
	//strpos -> Primera aparicion de una cadena dentro de otra
	if(strpos(strtolower($_SERVER['ALL_HTTP']),'OperaMini')>0) {
		$mobile_browser++;
	}
	if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'windows')>0) {
		$mobile_browser=0;
	}
		
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Reseteamos el view port a una escala inicial de 1 -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title>Colony 1209</title>
<?php
	if ($mobile_browser > 0) {
		?>
		<link href="colony_m.css" rel="stylesheet" type="text/css">
		<?php
	} else {
		?>
		<link href="colony.css" rel="stylesheet" type="text/css">
		<?php
	}	
?>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	var actual;
	var contador;
	
	var fotos = new Array();
	var textos = new Array();
	
	actual = 0;
	
	function bucle() {
		window.setTimeout('adelante()',10000);
		window.setTimeout('bucle()',10000);	
	}	
	
	function inicializoFotos(mb) {
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

		if (mb > 0) {
			xmlhttp.open("GET","xml/home_m.xml",false);
		} else {
			xmlhttp.open("GET","xml/home.xml",false);		
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
		 
		 if (orden == 8) {
			document.ft8.src = "img/circle_filled.png";
		 } else {
			document.ft8.src = "img/circle.png";
		 }
		 
		 if (orden == 9) {
			document.ft9.src = "img/circle_filled.png";
		 } else {
			document.ft9.src = "img/circle.png";
		 }
		 
		 if (orden == 10) {
			document.ft10.src = "img/circle_filled.png";
		 } else {
			document.ft10.src = "img/circle.png";
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
		 
		 if (actual == 8) {
			document.ft8.src = "img/circle_filled.png";
		 } else {
			document.ft8.src = "img/circle.png";
		 }
		 
		 if (actual == 9) {
			document.ft9.src = "img/circle_filled.png";
		 } else {
			document.ft9.src = "img/circle.png";
		 }
		 
		 if (actual == 10) {
			document.ft10.src = "img/circle_filled.png";
		 } else {
			document.ft10.src = "img/circle.png";
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

		if (actual == 8) {
			document.ft8.src = "img/circle_filled.png";
		} else {
			document.ft8.src = "img/circle.png";
		}

		if (actual == 9) {
			document.ft9.src = "img/circle_filled.png";
		} else {
			document.ft9.src = "img/circle.png";
		}

		if (actual == 10) {
			document.ft10.src = "img/circle_filled.png";
		} else {
			document.ft10.src = "img/circle.png";
		}
	}	
	
$(function()
	{

		$("#mostrar").click(function(event) 
			{
				event.preventDefault();
				$("#miTexto").slideToggle();
			}
		);

		$("#miTexto a").click(function(event)
			{
				event.preventDefault();
				$("#miTexto").slideUp();
			}
		);
	}
);
</script>
<script type="text/javascript">
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
</script>

</head>

<body onLoad="inicializoFotos(<?php echo $mobile_browser; ?>); bucle();">
	<div id="content">
        <header>
			<img src="img/logo_colony1209.png" width="122" height="96" alt="logo_colony1209">        	
            <nav>
            	<ul>
                	<li class="seleccionado">HOME</li>
                	<li><a href="about.php">ABOUT COLONY 1209</a></li>
                	<li><a href="amenities.php">BUILDING AMENITIES</a></li>
                	<li><a href="place.php">WHERE IS THIS PLACE?</a></li>
                	<li><a href="available.php">WHAT'S AVAILABLE?</a></li>
                	<li><a href="visit.php">VISIT</a></li>
            	</ul>
            </nav>
        </header>
        
		<article>
        	<div id="flechaIzq">
				<a href="#" onClick="atras();">
					<img src="img/arrow_left.png" width="77" height="76" alt="left_arrow">
				</a>	
			</div>
            <div id="flechaDer">
				<a href="#" onClick="adelante();">
					<img src="img/arrow_right.png" width="77" height="76" alt="right_arrow">
				</a>	
			</div>
		</article>
        
        <footer>
        	<div id="iconos">
            	<img src="img/follow_us.png" width="90" height="46">
            	<a href="https://twitter.com/aptsandlofts" target="_blank"><img src="img/twitter.png" alt="twitter" width="46" height="46" border="0"></a>
        		<a href="https://www.facebook.com/aptsandlofts" target="_blank"><img src="img/facebook.png" alt="facebook" width="46" height="46" border="0"></a>
            	<a href="http://pinterest.com/source/aptsandlofts.com/" target="_blank"><img src="img/pinteres.png" alt="pinteres" width="46" height="46" border="0"></a>
            </div>
            
            
			<div id="btnFotosFondo">
				<a href="#" onClick="CambiarImagen(0);"> <img src="img/circle_filled.png" width="16" height="16" alt="btn" name="ft0" border="0"></a>
				<a href="#" onClick="CambiarImagen(1);"> <img src="img/circle.png" width="16" height="16" alt="btn" name="ft1" border="0"></a>
				<a href="#" onClick="CambiarImagen(2);"> <img src="img/circle.png" width="16" height="16" alt="btn" name="ft2" border="0"></a>
				<a href="#" onClick="CambiarImagen(3);"> <img src="img/circle.png" width="16" height="16" alt="btn" name="ft3" border="0"></a>
				<a href="#" onClick="CambiarImagen(4);"> <img src="img/circle.png" width="16" height="16" alt="btn" name="ft4" border="0"></a>
				<a href="#" onClick="CambiarImagen(5);"> <img src="img/circle.png" width="16" height="16" alt="btn" name="ft5" border="0"></a>
				<a href="#" onClick="CambiarImagen(6);"> <img src="img/circle.png" width="16" height="16" alt="btn" name="ft6" border="0"></a>
				<a href="#" onClick="CambiarImagen(7);"> <img src="img/circle.png" width="16" height="16" alt="btn" name="ft7" border="0"></a>
				<a href="#" onClick="CambiarImagen(8);"> <img src="img/circle.png" width="16" height="16" alt="btn" name="ft8" border="0"></a>
				<a href="#" onClick="CambiarImagen(9);"> <img src="img/circle.png" width="16" height="16" alt="btn" name="ft9" border="0"></a>
				<a href="#" onClick="CambiarImagen(10);"> <img src="img/circle.png" width="16" height="16" alt="btn" name="ft10" border="0"></a>
				
                <p id="texto" class="creditos">This is a picture taken by somebody</p>
            </div>
		</footer>
    
    </div>
</body>
</html>
