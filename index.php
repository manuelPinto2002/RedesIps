<!DOCTYPE html>
<html>
<head>
	<title>Indice</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<h1 align="Center" >Formulario</h1>
<br>
<h4 align="Center">Idenfificador de classes</h4>
<form action="ipidentificador.php" method="post" >
	<div class="input-group">
	<input class="form-control" type="text" name="caixa1" style="width: 60px">
	<input class="form-control"class="form-control" type="text" name="caixa2" style="width: 60px">
	<input class="form-control" type="text" name="caixa3" style="width: 60px">
	<input class="form-control" type="text" name="caixa4" style="width: 60px">
	<input class="btn btn-outline-secondary"  type="submit" name="Enviar">
	</div>

 
</form>
<br>
<br>
<h4 align="Center">Selecione o protocolo</h4>
<form action="protodetalhes.php" method="post" >
		<div class="input-group">
	<select  class="form-select"  name="ips">
			<div class="input-group">
		<option value="dns">DNS</option>
		<option value="ftp">FTP</option>
		<option value="http">HTTP</option>
		<option value="ip">IP</option>
	</select>
	<input class="btn btn-outline-primary" type="submit" name="Enviar">
		</div>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>