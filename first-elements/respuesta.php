<?php
$num1=$_POST ['n1'];
$num2=$_POST ['n2'];
$op=$_POST ['genero'];


if ($op == "suma") {
  $resultado = $num1+$num2;
    } elseif ($op == "resta")
    {
    $resultado = $num1-$num2;
    }
    elseif ($op == "multiplicacion")
    {
    $resultado = $num1*$num2;
    }
    elseif ($op == "division")
    {
    $resultado = $num1/$num2;
    }
    //echo 'El resultado es '.$resultado;//

echo ' <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<form name="f1" //action="respuesta.php"// method="POST">
<table class="tabla1" width="50%" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="boton">CALCULADORA</td>
  </tr>
   <tr>
    <td class="tdTitulo">OPERADORES</td>
  </tr>
  <tr>
    <td><table class="tabla2" width="100%"  cellspacing="0" cellpadding="0">
      <tr>
        <td width="33%">Primer numero</td>
        <td width="67%"><label>
          <input type="number" name="n1" id="n1" size="20" />
        </label></td>
      </tr>
      <tr>
        <td>Segundo numero</td>
        <td><label>
          <input type="number" name="n2" id="n2" size="20" />
        </label></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td class="tdTitulo">OPERACIONES</td>
 </tr>
   <tr>
    <td><table class="tabla2" width="100%"  cellspacing="0" cellpadding="0">
      <tr>
        <td width="33%"></td>
        <td width="67%"><p>

           + <input type="radio" name="genero" value="suma" id="genero_0"/>
            -<input type="radio" name="genero" value="resta" id="genero_1" />
			*<input type="radio" name="genero" value="multiplicacion" id="genero_0"/>
            /<input type="radio" name="genero" value="division" id="genero_1" />

          <br />
        </p></td>
      </tr>


    </table></td>
  </tr>
  <tr>
    <td class="tdTitulo">RESULTADO</td>
  </tr>
  <tr>
    <td><table class="tabla2" width="100%"  cellspacing="0" cellpadding="0">
      <tr>
        <td width="33%"></td>
        <td width="67%"><label>
          <input type="text" name="N1" id="N1" size="15" value="'.$resultado.'" />
        </label></td>
      </tr>

    </table></td>
  </tr>
  <tr>
    <td class="boton">

      <label>
        <input type="submit" name="registro" id="registro" value="Calcular!!" />
    </label></td></tr>
</table>
</form>
</body>
</html>
';
?>
