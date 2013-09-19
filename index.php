<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Reseteamos el view port a una escala inicial de 1 -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title>Colony 1209</title>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/css/styles.css" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="/js/jquery.backstretch.min.js"></script>



</head>

<body>
    <div class="container">
        <div id="the-header" class="row">
            <div class="col-md-2">
                <div id="the-logo">
                    <a href="/">Colony 1209</a>

                </div>
            </div>
            <div class="col-md-10" style="position:relative;height:100px;">
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
            </div>
        </div>
        <div class="row">
            <div id="the-content" class="col-md-12 ">

            </div>
        </div>
        <div class="row">
            <div id="the-footer" class="col-md-12 ">
                <div id="iconos">
                    <img src="img/follow_us.png" width="90" height="46">
                    <a href="https://twitter.com/aptsandlofts" target="_blank"><img src="img/twitter.png" alt="twitter" width="46" height="46" border="0"></a>
                    <a href="https://www.facebook.com/aptsandlofts" target="_blank"><img src="img/facebook.png" alt="facebook" width="46" height="46" border="0"></a>
                    <a href="http://pinterest.com/source/aptsandlofts.com/" target="_blank"><img src="img/pinteres.png" alt="pinteres" width="46" height="46" border="0"></a>
                </div>
                
                
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
                    
                    <p id="texto" class="creditos">This is a picture taken by somebody</p>
                </div>
            </div>
        </div>
    </div>

<div id="flechaIzq">
    <a href="#" onClick="$.backstretch('prev'); return false;">
        <img src="img/arrow_left.png" width="77" height="76" alt="left_arrow">
    </a>    
</div>
<div id="flechaDer">
    <a href="#" onClick="$.backstretch('next'); return false;">
        <img src="img/arrow_right.png" width="77" height="76" alt="right_arrow">
    </a>    
</div>

			     	
            
        

        
        <footer>
        	
		</footer>
    
<div id="slideshow">

</div>
<script>
  // To attach Backstrech as the body's background
  $.backstretch([
    "/img/images/1.jpg",
    "/img/images/2.jpg",
    "/img/images/3.jpg",
    "/img/images/4.jpg",
    "/img/images/5.jpg",
    "/img/images/6.jpg",
    "/img/images/7.jpg",
    "/img/images/8.jpg",
    "/img/images/9.jpg",   
    "/img/images/10.jpg",   
    "/img/images/11.jpg"   
  ], {duration: 5000, fade:500});
var instance = $('body').data('backstretch');
$(window).on("backstretch.after", function (e, instance, index) {
    unfill_all();
    $('#circle-'+index).addClass('filled');
});
function unfill_all(){
    $('.control-circle').removeClass('filled');
}
</script>
</body>
</html>
