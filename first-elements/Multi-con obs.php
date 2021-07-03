<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>Documento sin título</title>
			<style type="text/css">
			<!--
			.boton {
				text-align: center;
				font-weight: bold;
				color: #FFF;
				padding-top: 4px;
				padding-bottom: 4px;
			}
			body {
				font-family: Tahoma, Geneva, sans-serif;
				font-size: 12px;
			}
			.tabla1 {
				border: 1px solid #0635A4;
				background-color: #2365E0;
			}
			.tabla2 {
				background-color: #4D82E6;
				border: 1px solid #1A53D9;
				color: #E0E0E0;
			}
			.tdTitulo {
				color: #FFF;
				background-color: #036;
				font-weight: bold;
				text-align: center;
				padding-top: 5px;
				padding-bottom: 5px;
			}
			-->
			</style>
		</head>
		<body>
			<form name="tabla" action="Multi.php" method="POST">

				<table class="tabla1" width="55%" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td class="boton">IMPARES</td>
					</tr>
					<tr>
						<td class="tdTitulo">CANTIDAD FINAL</td>
					</tr>
					<tr>
						<td><table class="tabla2" width="100%"  cellspacing="0" cellpadding="0">
					<tr>
						<td width="38%">Ingrese Numero</td>
						<td width="80%"><label>
						  <input type="text" name="n1" id="n1" size="20"/>
						</label></td>

					</tr>
					<tr>
						<td class="boton" colspan="2">

						<input type="submit" name="registro" id="registro" value="CALCULAR" />
					</td>
					</tr>
				</table>
			</form>
			<?php

			$i=2;
			if(isset($_POST['n1'])) //aqui pregunto si está o no el valor de n
			{
					$n=$_POST['n1'];
				if ($n<1) //aquí valido si n es menor que 1 y mayor que 12
				{
						echo "debes escribir un numero mayor a 1";
				} //aquí ya valide, si es falso, paso al siguiente - elseif -
				elseif($n>1)
					{ //cuando el valor de n está entre 1 y 12 - inicio tabla n
						echo"<h4>  $n:</h4>";
						$i=1;
						while ($i<=12)
						{//inicio while
							echo "$n*$i=".$n*$i.".<br/>"; //aqui hago el ejercicio
							$i++;
						} //cierre while
					} //aqui termina el calculo de la tabla n

			}
			else //si no está inicializado el valor n, debe aparecer espacio vacío
			{
					$n='';
			}
?>

		</body>
	</html>
