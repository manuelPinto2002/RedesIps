<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
</head>
<body>
<?php
$nome = $_POST['ips'];


if ($nome=='dns') {
	echo "<h1 align='Center'>DNS [Domain Name System]</h1>";
	echo "<br>";
	echo "<p align='Center'>É o protocolo utilizado para associar a cada endereço IP um nome, pois desta forma é mais fácil
de ser memorizado pelos utilizadores. Por exemplo, www.portoeditora.pt, poderá,
corresponder ao endereço IP 192.16831.32.</p>";
echo "<div align='Center'><img  src='https://www.hardware.com.br/filters:format:(jpeg)/@/static/wp/2019/12/30/90-2.jpg' class='img-thumbnail' width='320' height='205'> </div";
}
elseif ($nome=='ftp') {
	echo "<h1 align='Center'>FTP [File Transfer Protocol]</h1>";
		echo "<br>";
	echo "<p align='Center'>É o protocolo utilizado para a transferência de ficheiros. Serve para fazermos o download ou
upload de ficheiros de ou para servidores FTP, aquele cujo endereço começa por ftp://.</p>";
echo "<div align='Center'><img  src='http://pplware.sapo.pt/wp-content/uploads/2014/01/ftp_00_thumb.jpg' class='img-thumbnail' width='320' height='205'> </div";
}
elseif ($nome=='http') {
	echo "<h1 align='Center'>HTTP [HyperText Transfer Protocol]</h1>";
		echo "<br>";
	echo "<p align='Center'>É o protocolo utilizado para controlar a comunicação entre o servidor de Internet e o browser,
ou seja, serve de suporte à World Wide Web. É o que nos permite escrever na Barra de
Endereços do nosso browser um endereço URL [Uniform Resource Locator] e rapidamente
receber a página Web correspondente.</p>";
echo "<div align='Center'><img  src='http://www.pcmanias.com/wp-content/uploads/2015/02/http.jpg' class='img-thumbnail' width='320' height='205'> </div";
}
elseif ($nome=='ip') {
	echo "<h1 align='Center'>IP [Internet Protocol]</h1>";
		echo "<br>";
	echo "<p align='Center'>É o protocolo responsável por estabelecer a ligação entre os computadores emissor e recetor
para que a informação não se perca na rede.</p>";
echo "<div align='Center'><img  src='https://networkencyclopedia.com/wp-content/uploads/2019/09/internet-protocol-in-tcp-ip.jpg' class='img-thumbnail' width='320' height='205'> </div";
}
else{
	echo "Erro";
}

?>
<br>

<div align="center">
 <a  href="index.php"><button type="button" class="btn btn-outline-success">Menu</button></a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>