<html>
	<head>
		<title>Ammar Fakhri</title>
	</head>
<style>
body {
	color: yellow;
	font-size: 25px;
	font-family: Arial;
}
.VAR {
	display: inline-block;
	background-color: green;
	padding: 50px;
}
input {
	margin-right: 100px;
	display: inline-block;
	border-radius: 5px;	
}
#judul {
	color: red;
	font-size: 30px;
}
#submit {
	font-size: 15px;
	height: 25px;
}
#submit:hover {
	color: white;
	background-color: #232323;
}
</style>
<body class="VAR">
<form method="post">
<p id="judul"><strong>
Mencari Angka Yang Besar.</strong>
</p>
<label name="varA">Variable A : <label><input type="text" name="varA" id="varA"></input>
<p>
<label name="varB">Variable B : <label><input type="text" name="varB" id="varB"></input>
<p>
<label name="varc">Variable C : <label><input type="text" name="varC" id="varC"></input>
<p>
<input type="submit" name="submit" id="submit" value="Hasil nilai besar">
<p name="a">Variable a= </p>
<p name="b">Variable b= </p>
<p name="c">Variable c= </p>
<p name="hasil">Variable nilai terbesar adalah = </p>
</form>
</body>
</html>

<?php
$varA=$_POST['varA'];
$varB=$_POST['varB'];
$varC=$_POST['varC'];

$a= 9;
$b= 15;
$c= 7;

echo max($varA,$varB,$varC)."<br>";
echo max($a,$b,$c);
?>
