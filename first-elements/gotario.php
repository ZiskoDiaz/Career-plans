<?php

// con esto se valida si existe o no ya la variable (si está inicializada) //
if (isset ($_POST ['edad'])){

//aquí se guarda la variable "$POST ["nota"]" en $nota //
  $defi=$_POST ["definicion"];
  $edad=$_POST ["edad"];
//aquí va if - else //
  if ($edad <18) {
    $respuesta = "ERROR: Menor de Edad";
  }
  elseif($edad>=18 && $edad<=25)
  {
    if($defi==1)
    {
      $respuesta = "Estudiante: Sala Green";
    }
    elseif($defi==2)
    {
      $respuesta = "trabajador: Sala Black";
    }
  }
  elseif($edad>=26 && $edad<=30)
  {
    if($defi==1)
    {
      $respuesta = "Estudiante: Sala Red";
    }
    elseif($defi==2)
    {
      $respuesta = "trabajador: Sala Gold";
    }
  }
  elseif($edad>=31)
  {
    if($defi==1)
    {
      $respuesta = "Estudiante: Sala Blue";
    }
    elseif($defi==2)
    {
      $respuesta = "trabajador: Sala Platinum";
    }
  }
//cuando la variable no está inicializada no hace el if-else interior//
//y nos devuelve la caja vacía//
} else {
  $edad="";
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
	color: #ffffff;
	padding-top: 4px;
	padding-bottom: 4px;

/* fin de Estilo de botón */

}
body {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
}
.tabla1 {
	border: 1px solid #850303;
	background-color: #884c04;
}
.tabla2 {
	background-color: #57190b;
	border: 1px solid #5d3a0c;
	color: #E0E0E0;
}
.tdTitulo {
	color: #FFF;
	background-color: #2f0000;
	font-weight: bold;
	text-align: center;
	padding-top: 5px;
	padding-bottom: 5px;
}

</style>
</head>

<body>
<form name="f1" //action="gotario.php"// method="POST">
<table class="tabla1" width="50%" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="boton">CONTROL DE ACCESO</td>
  </tr>
   <tr>
    <td class="tdTitulo">Ingrese Edad:</td>
  </tr>
  <tr>
    <td><table class="tabla2" width="100%"  cellspacing="0" cellpadding="0">
      <tr>
        <td width="40%"></td>
        <td width="67%"><label>
          <input type="text" name="edad" id="edad" size="20"/>
        </label></td>
      </tr>
    </table></td>
  </tr>
  <tr>
   <td class="tdTitulo">Indique: (1) Estudiante (2) Trabajador</td>
  </tr>
  <tr>
   <td><table class="tabla2" width="100%"  cellspacing="0" cellpadding="0">
     <tr>
       <td width="40%"></td>
       <td width="67%"><label>
         <input type="text" name="definicion" id="definicion" size="20"/>
       </label></td>
     </tr>
   </table></td>
  </tr>

   <tr>
    <td class="tdTitulo">Usted:</td>
  </tr>
  <tr>
    <td><table class="tabla2" width="100%"  cellspacing="0" cellpadding="0">
      <tr>
        <td width="40%"></td>
        <td width="67%"><label>
            <input type="text" name="validez" id="respuesta" size="20" value ="'.$respuesta.'"/>
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
