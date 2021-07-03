<?php
$nn=$_POST['nombre'];
echo "su nombre es: ".$nn;
$nn=$_POST['mail'];
echo "<br>su email es: ".$nn;
$nn=$_POST['pass'];
echo "<br>password: ".$nn;
//condicional if-else
 if( isset($_POST['genero'])   ){
echo "<br>su genero es: ".$_POST['genero'];
 }
else{
echo"<br>no selecciono genero";
}
$nn=$_POST['comuna'];
echo "<br>su comuna es: ".$nn;
$nn=$_POST['nacto2'];
echo "<br>su fecha de nacimiento es: ".$nn;
$nn=$_POST['legales1'];
echo "<br>legalidades: ".$nn;
$nn=$_POST['legales2'];
echo "<br>acepta condiciones de uso: ".$nn;


?>
