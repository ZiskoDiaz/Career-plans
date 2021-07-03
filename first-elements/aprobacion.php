<?php

// con esto se valida si existe o no ya la variable (si está inicializada) //
if (isset ($_POST ['nota'])){

//aquí se guarda la variable "$POST ["nota"]" en $nota //
  $nota=$_POST ["nota"];

//aquí va if - else //
  if ($nota <1) {
    $respuesta = "ERROR: Ingresó nota inferior a 1.0";
  } elseif ($nota <= 3.5)
      {
      $respuesta = "Estudiante Reprobado";
      }
      elseif ($nota <= 5.5)
      {
      $respuesta = "Rinde Examen";
      }
      elseif ($nota <= 7.0)
      {
      $respuesta = "Aprobado";
      }
      else {
        $respuesta = "ERROR: ingreso nota superior a 7.0";
      }
//cuando la variable no está inicializada no hace el if-else interior//
//y nos devuelve la caja vacía//
} else {
  $respuesta=" ";
}

echo '

<!DOCTYPE> <!-- con !DOCTYPE inicia el código html -->
<html>
<head>

<!--
El atributo charset se explicita en utf-8 para que reconozca las tildes
y caracteres especiales del español.
-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Gotario</title>
<style type="text/css">

/* Inicio de Estilo de botón*/

.boton {
	text-align: center;
	font-weight: bold;
	color: #FFF;
	padding-top: 4px;
	padding-bottom: 4px;

/* fin de Estilo de botón */

}
body {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
}
.tabla1 {
	border: 1px solid #3a98f9;
	background-color: #2242c9;
}
.tabla2 {
	background-color: #2860cb;
	border: 1px solid #2242c9;
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

</style>
</head>

<body>
<form name="f1" //action="aprobacion.php"// method="POST">
<table class="tabla1" width="50%" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="boton">ESTADO DE APROBACIÓN</td>
  </tr>
   <tr>
    <td class="tdTitulo">Ingrese su promedio de Notas</td>
  </tr>
  <tr>
    <td><table class="tabla2" width="100%"  cellspacing="0" cellpadding="0">
      <tr>
        <td width="40%"></td>
        <td width="67%"><label>
          <input type="text" name="nota" id="nota" size="20"/>
        </label></td>
      </tr>
    </table></td>
  </tr>

<!-- Aqui ingreso el campo para evaluar si aprobó o no -->

   <tr>
    <td class="tdTitulo">Actualmente usted :</td>
  </tr>
  <tr>
    <td><table class="tabla2" width="100%"  cellspacing="0" cellpadding="0">
      <tr>
        <td width="40%"></td>
        <td width="67%"><label>
          <input type="text" name="respuesta" id="respuesta" size="20" value ="'.$respuesta.'"/>
        </label></td>
      </tr>
    </table></td>
  </tr>

<!-- Aquí termina -->
  <tr>
    <td class="boton">

      <label>
        <input type="submit" name="registro" id="registro" value="Enviar" />
    </label></td></tr>
</table>
</form>
</body>
</html>


';


?>
