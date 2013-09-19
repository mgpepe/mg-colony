<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Reseteamos el view port a una escala inicial de 1 -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title>Colony 1209</title>
<link href="teaser.css" rel="stylesheet" type="text/css">

<!-- <script type="text/javascript" src="js/jquery.js"></script> -->
<!-- <script type="text/javascript" src="js/jquery.innerfade.js"></script> -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="/js/jquery.backstretch.min.js"></script>



<script type="text/javascript">

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

<body id="fondos" >
	<div id="content">    
		<?php require_once("includes/form.php"); ?>
    </div>
    <script>
  // To attach Backstrech as the body's background
  $.backstretch([
    "../img/images/1.jpg",
    "../img/images/2.jpg",
    "../img/images/3.jpg",
    "../img/images/4.jpg",
    "../img/images/5.jpg",
    "../img/images/6.jpg",
    "../img/images/7.jpg",
    "../img/images/8.jpg",
    "../img/images/9.jpg",   
    "../img/images/10.jpg",   
    "../img/images/11.jpg"   
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
