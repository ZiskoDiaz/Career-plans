<?php
$nombre="Diego Perez";
$correo="minombre@dominio.cl";
$password="123456789";
$radio="checked";
$select="selected";
$checkbox="checked";
$fecha="1992-01-11";
echo '
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
<form name="f1" action="recibe.php" method="POST">
<table class="tabla1" width="55%" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="boton">CALCULADORA</td>
  </tr>
   <tr>
    <td class="tdTitulo">ingrese numeros</td>
  </tr>
  <tr>
    <td><table class="tabla2" width="100%"  cellspacing="0" cellpadding="0">
      <tr>
        <td width="33%">Nombre</td>
        <td width="67%"><label>
          <input type="text" name="nombre" id="nombre" size="20" value="'.$nombre.'"/>
        </label></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><label>
          <input type="email" name="mail" id="mail" size="20" value="'.$correo.'"/>
        </label></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><label>
          <input type="password" name="pass" id="pass" size="20" value="'.$password.'"/>
        </label></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td class="tdTitulo">Datos Personales</td>
 </tr>
   <tr>
    <td><table class="tabla2" width="100%"  cellspacing="0" cellpadding="0">
      <tr>
        <td width="33%">Genero</td>
        <td width="67%"><p>
          <label>
            <input type="radio" name="genero" value="Femenino" id="genero_0" checked="'.$radio.'" />
            Femenino</label>
          <br />
          <label>
            <input type="radio" name="genero" value="Masculino" id="genero_1"/>
            Masculino</label>
          <br />
        </p></td>
      </tr>
      <tr>
        <td>Comuna</td>
        <td><label>
          <select name="comuna" id="comuna">
		  <option value="0">Seleccione comuna</option>
          <option value="Lota" selected="'.$select.'" >Lota</option>
          <option value="Coronel">Coronel</option>
          <option value="San Pedro de la Paz">San Pedro de la Paz</option>
          <option value="Curanilahue">Curanilahue</option>
          <option value="Arauco">Arauco</option>
          </select>

        </label><br></td>
      </tr>
	  <tr>
        <td>Fecha Nacimiento</td>
        <td>  <br>
		  <input type="date" name="nacto2" value="'.$fecha.'" />
        </td>
      </tr>
      <tr>
        <td>Legalidades</td>
        <td><p>
          <label>
            <input type="checkbox" name="legales1" value="mayor" id="legales_0" checked="'.$checkbox.'" />
            Mayor de 18 Años</label>
          <br />
          <label>
            <input type="checkbox" name="legales2" value="acepta" id="legales_1" checked="'.$checkbox.'" />
            Acepto condiciones de uso</label>
          <br />
        </p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td class="boton">

      <label>
        <input type="submit" name="registro" id="registro" value="REGISTRAR" />
    </label></td></tr>
</table>
</form>
</body>
</html>
';
?>
