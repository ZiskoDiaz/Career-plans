<?php



if (isset ($_POST ['numero']))
{
$numero=$_POST ["numero"];
$total= "";
$total="";
if ($numero>0)

{
  $signo= "-";
  $nada="";
  $x="*";
for($i=1 ; $i<$numero;$i++) //se coloca un termino antes de que I sea = a Numero
{

  $total= $total.'('.$i*2 .$signo. $i*3 .')'.$x;
  //Aqui va el if else para cambiar el menos y el mas //
  if($i%2==0)
  {
    $signo = '-';
  }
  elseif ($i%2==1)
  {
      $signo = '+';
  }


  if($i<$numero)
  $x="*";


} //fin del ciclo for

$total= $total.'('.$i*2 .$signo. $i*3 .')'; //ultimo cuadro de la serie se debe mostrar luego sin signo

}
}
else
{
  $total="";
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

<title>Series</title>
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
	border: 1px solid #8a7dd6;
	background-color: #475590;
}
.tabla2 {
	background-color: #8a7dd6;
	border: 1px solid #475590;
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
<form name="f1" //action="series.php"// method="POST">
<table class="tabla1" width="50%" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="boton">Generemos serie de datos</td>
  </tr>
   <tr>
    <td class="tdTitulo">Ingrese numero:</td>
  </tr>
  <tr>
    <td><table class="tabla2" width="100%"  cellspacing="0" cellpadding="0">
      <tr>
        <td width="40%"></td>
        <td width="67%"><label>
          <input type="text" name="numero" id="numero" size="20"/>
        </label></td>
      </tr>
    </table></td>
  </tr>

   <tr>
    <td class="tdTitulo">La serie es:</td>
  </tr>
  <tr>
    <td><table class="tabla2" width="100%"  cellspacing="0" cellpadding="0">
      <tr>
        <td width="40%"></td>
        <td width="67%"><label>
        <textarea name="total" id="total" rows="20" cols="18">S='.$total.'
        </textarea>
        </label></td>
      </tr>
    </table></td>
  </tr>


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
