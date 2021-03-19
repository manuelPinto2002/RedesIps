<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
</head>
<body>
	<div align="center">
		<h1>
	<?php 
$caixa1 = $_POST['caixa1'];
$caixa2 = $_POST['caixa2'];
$caixa3 = $_POST['caixa3'];
$caixa4 = $_POST['caixa4'];

if ($caixa1>=1 && $caixa1<=126) {
	echo "O endereço ".$caixa1.".".$caixa2.".".$caixa3.".".$caixa4." é Classe A";
}
elseif ($caixa1>=128 && $caixa1<=191 ) {
		echo "O endereço ".$caixa1.".".$caixa2.".".$caixa3.".".$caixa4." é Classe B";
}
elseif ($caixa1>=192 && $caixa1<=223) {
		echo "O endereço ".$caixa1.".".$caixa2.".".$caixa3.".".$caixa4." é Classe C";
}
elseif ($caixa1>=224 && $caixa1<=239) {
		echo "O endereço ".$caixa1.".".$caixa2.".".$caixa3.".".$caixa4." é Classe D";
}
elseif ($caixa1>=240 && $caixa1<=254) {
		echo "O endereço ".$caixa1.".".$caixa2.".".$caixa3.".".$caixa4." é Classe E";
}
else {
		echo "O endereço ".$caixa1.".".$caixa2.".".$caixa3.".".$caixa4." Não existe";
}

	 ?>
	 </h1>
</div>
<br>
<div align="center">
	<?php

if (($caixa1 ==192 && $caixa2==168) || $caixa1==10) {
	echo "endereço privado";
}
elseif ($caixa1==172 && $caixa2>=16 && $caixa2<=31) {
echo "endereço privado";
}
elseif ($caixa1==127 ) {
echo "endereço reservado";
}
else{
	echo "endereço publico";
}
 ?> 
 </div>
 <br>
 <br>
	 <div align="center">
 <a  href="index.php"><button type="button" class="btn btn-outline-success">Menu</button></a>
	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>