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
<script src="SpryAssets/SpryEffects.js" type="text/javascript"></script>
<script type="text/javascript">

function fondo() {
	var src = "img/background_place.jpg";
	
	document.body.style.backgroundImage = "url(" + src + ")" ;
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
function MM_effectAppearFade(targetElement, duration, from, to, toggle)
{
	Spry.Effect.DoFade(targetElement, {duration: duration, from: from, to: to, toggle: toggle});
}
</script>

</head>

<body onLoad="fondo();">
	<div id="content">
        <header>
			<img src="img/logo_colony1209.png" width="122" height="96" alt="logo_colony1209">        	
            <nav>
            	<ul>
                	<li><a href="index.php">HOME</a></li>
                	<li><a href="about.php">ABOUT COLONY 1209</a></li>
                	<li><a href="amenities.php">BUILDING AMENITIES</a></li>
                	<li class="seleccionado">WHERE IS THIS PLACE?</li>
                	<li><a href="available.php">WHAT'S AVAILABLE?</a></li>
                	<li><a href="visit.php">VISIT</a></li>
            	</ul>
            </nav>
        </header>
        
		<article> 
        	<div id="redSocial">
				<div id="twitter">
					<a class="twitter-timeline" width="219" height="473" href="https://twitter.com/BushwickDaily" data-widget-id="359780134150098944" data-chrome="nofooter">Tweets by @BushwickDaily</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>					
				</div>            	 
			</div>              
		</article>
        
        <footer>        	
        	<div id="iconosplace">
            	<img src="img/follow_us.png" width="90" height="46">
        		<a href="https://www.facebook.com/aptsandlofts" target="_blank"><img src="img/facebook.png" alt="facebook" width="46" height="46" border="0"></a>
            	<a href="https://twitter.com/aptsandlofts" target="_blank"><img src="img/twitter.png" alt="twitter" width="46" height="46" border="0"></a>
            	<a href="http://pinterest.com/source/aptsandlofts.com/" target="_blank"><img src="img/pinteres.png" alt="pinteres" width="46" height="46" border="0"></a>
            </div>
		</footer>
    
    </div>
</body>
</html>
