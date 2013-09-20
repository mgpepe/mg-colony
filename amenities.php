<?php $page_title = 'Building Amenities - Colony 1209'; ?>
<?php include ('includes/header.php'); ?>

    <div class="container" id="xpcontent">
        <?php include ('includes/flechas.php'); ?>

        <div id="the-header" class="row">
            <div class="span2">
                <div id="the-logo">
                    <a href="/">Colony 1209</a>

                </div>
            </div>
            <div class="span10" style="position:relative;height:100px;">
                <nav>
                    <ul>
                        <li ><a href="/">HOME</a></li>
                        <li ><a href="about.php">ABOUT COLONY 1209</a></li>
                        <li class="seleccionado">BUILDING AMENITIES</li>
                        <li><a href="place.php">WHERE IS THIS PLACE?</a></li>
                        <li><a href="available.php">WHAT'S AVAILABLE?</a></li>
                        <li><a href="visit.php">VISIT</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row" id="the-content">
            <div  class="span11  ">
            	<h1>AMENITIES</h1>
            </div>
            <div  class="span6   ">
            	
            	<p class="body-text">
            		Lorem ipsum dolor sit amet, ad quo audiam periculis, dolore ignota singulis in nec. No quem quaerendum pri, vivendo appetere ea qui, nam id semper facilisi pertinax. Cibo rationibus cu pri, solum discere invidunt eum ex. Causae deseruisse eum no, vidisse bonorum democritum ex est. Eu error tollit sed, graeco mandamus iudicabit usu an, at harum eruditi mel.

            	</p>
            </div>
            <div  class="span6   ">
            	<p class="body-text">
            		Lorem ipsum dolor sit amet, ad quo audiam periculis, dolore ignota singulis in nec. No quem quaerendum pri, vivendo appetere ea qui, nam id semper facilisi pertinax. Cibo rationibus cu pri, solum discere invidunt eum ex. Causae deseruisse eum no, vidisse bonorum democritum ex est. Eu error tollit sed, graeco mandamus iudicabit usu an, at harum eruditi mel.
            	</p>
            </div>
        </div>
        <div class="row">
            <div id="the-footer" class="span12 ">
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
<?php include ('includes/footer.php'); ?>
