<html>



<head>
<title>compra de pasajes</title>
</head>


<body>
<h1>costos de pasajes</h1>


<form action="calcular.php" method="POST">
<table>
  <tr>
    <td>tipo de pasajero</td>
    <td>
    <select name="pasajero" id="pasajero">
  <option value="0">Seleccione pasajero</option>
      <option value="estudiante">estudiante</option>
      <option value="comun">pasajero comun</option>
      </select>
    </td>


  </tr>

  <tr>
    <td>destino</td>
    <td>
    <select name="destino" id="destino">
  <option value="0">Seleccione destino</option>
      <option value="santiago">santiago</option>
      <option value="talca">talca</option>
      </select>
    </td>
  </tr>

</table>
<center> <input type="submit" value="Calcular"> </input> </center>
</form>

<br>

<?php

error_reporting(0); //esto no nos muestra errores en pantalla//

$pasajero="";
$destino="";

$pasajero=$_POST['pasajero'];
$destino=$_POST['destino'];

if ($pasajero == estudiante) {
  if ($destino==santiago )
  {
    echo "Su pasaje es $ 8.000 pesos";
  }
  elseif($destino == talca){
      echo "Su pasaje es $ 6.000 pesos";
  }
}
else
{
  if ($destino==santiago) {
    echo "Su pasaje es $ 10.000 pesos";
  }
  elseif($destino == talca){
      echo "Su pasaje es $ 7.000 pesos";
  }
}


?>
</body>

</html>
