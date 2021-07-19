<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
  <title> Descarga video de tiktok</title>
<link rel="stylesheet" href="style.css">
<script  src="script.js"></script>

</head>
<body>
<div id="form">

<div class="fish" id="fish"></div>
<div class="fish" id="fish2"></div>


<form action="video.php" id="waterform" target = "vid" class="form-area" method="POST">
<div class="formgroup" id="name-form">
    <label for="name">Ingresa aquí la url del video de tiktok</label>
    <input type="text" id="name" name="name" />
</div>


	<input type="submit" value="Quitar candados!" />

	<div>

	
	</div>
	<br>
	<center>
<iframe src="video.php" name= "vid"></iframe>
</center>
<br>	<br>
</form>


</div>


</body>
</html>