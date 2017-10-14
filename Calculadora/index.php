<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora</title>
		<style type="text/css">
		.auto-style1 {
			margin-left: 116px;
			margin-top: 20px;
		}
		.auto-style2 {
			margin-left: 127px
		}
		.auto-style3 {
			margin-left: 127px;
		}
		</style>
	</head>
	<body bgcolor="#6B7DB1">
	<center><H1>CALCULADORA</H1></center>
		<div style="background-color:#0444FA; margin-left:500px; margin-top:150px; width:400px">
			<form action="resultado.php" method="post">
				<select name="operador" class="auto-style1" style="width: 169px">
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="multiplicacion">Multiplicacion</option>
				<option value="division">Division</option>
				</select><br />
				<p Align="center">Valor 1:</p>
				<input type="text" name="valor1" class="auto-style2"><br>
				<p Align="center">Valor 2:</p>
				<input type="text" name="valor2" class="auto-style2"><br>
				<br>
				<input type="submit" value="calcular" class="auto-style3"><br>
			</form>
		</div>
	</body>
</html>
