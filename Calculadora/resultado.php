<!DOCTYPE html>
<Html>
  <Head>
  <title>Resultados</title>
  <meta charset="utf-8"/>
  </Head>
  <Body bgcolor="#6B7DB1">
  <Center><H1>Resultados de las Operaciones</H1></Center>
  <div style=" margin-left:500px; margin-top:150px; width:400px">
<?php
	if ($_POST ["valor1"] !="" and $_POST ["valor2"]!="")
	{
		if ($_POST["operador"] == "suma")
		{
			echo 'El resultado de la suma es: <br>';
			echo $resultado = $_POST ["valor1"] + $_POST ["valor2"];		
		}
		elseif ($_POST["operador"] == "resta")
		{
				echo 'El resultado de la resta es: <br>';
				echo $resultado = $_POST ["valor1"] - $_POST ["valor2"];
		}
		elseif ($_POST["operador"] == "multiplicacion")
		{
				echo 'El resultado de la multiplicacion es: <br>';
				echo $resultado = $_POST ["valor1"] * $_POST["valor2"];
		}
		elseif ($_POST["operador"] == "division")
		{
				echo 'El resultado de la division es: <br>';
				echo $resultado = $_POST ["valor1"] / $_POST["valor2"];
		}
	}
	else
	{
		echo "<H3>Ingresa Algun Valor</H3>";
	}
		echo '<br /><a href="index.php">Volver</a>';
?>		
</div>
</Body>
</Html>