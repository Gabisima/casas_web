<!DOCTYPE html>
<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
		</script>
		<script>
			$(document).ready(function(){
			  $("#inmueble").click(function(){
			    $("#div1").load("alta.php");
			  });
			});

			$(document).ready(function(){
			  $("#noticias").click(function(){
			    $("#div1").load("index.php");
			  });
			});
		</script>
	</head>
<body>
	<div><h2>Dynasty Real State</h2></div>
	<div><button id="inmueble">Inmuebles</button>
	<button id="noticias">Noticias</button></div>
	<div id="div1"> <h1>I Will Change!</h1></div>
</body>
</html>
