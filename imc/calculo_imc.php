<?php

class Deportista {

  public  $nombre;
  private $rut;
  private $edad;
  private $peso;
  private $altura;
  private $IMC;
  private $estado;


  function __construct ($parametro1,
                        $parametro2,
                        $parametro3,
                        $parametro4,
                        $parametro5)
      {
          $this->nombre=$parametro1;
          $this->rut=$parametro2;
          $this->edad=$parametro3;
          $this->peso=$parametro4;
          $this->altura=$parametro5;
      }

// <---- función para Nombre ----> //
      function getNombre ()
      {
          return $this->nombre;
      }

// <---- función para Rut ----> //
      function getRut ()
      {
          return $this->rut;
      }

// <---- función para edad ----> //
      function getEdad ()
      {
          return $this->edad;
      }

// <---- función para peso----> //
      function getPeso ()
      {
          return $this->peso;
      }

// <---- función para altura----> //
      function getAltura ()
      {
          return $this->altura;
      }


//<---- función del calculo de IMC---->//
      function getCalculoimc()
      {

          $peso=$this->peso;
          $altura=$this->altura;
          //Aquí hacemos el calculo //
          $this->IMC= $peso/($altura*$altura);
          return $this->IMC;
      }

      function getDefinirimc()
      {
          $evaluador=$this->IMC;

          if($evaluador<24.9)
          {
            $estado= "Su estado es Normal";
          }
          if($evaluador>=25.0 && $evaluador<29.9)
          {
            $estado= "Su estado es Sobrepeso";
          }
          elseif ($evaluador>=30)
          {
            $estado= "Su estado es Obeso";
          }

          return $estado;
      }

}

?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Deportista</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  </head>
  <body>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <div class="container"><h3>Calculo IMC</h3></div>

</div>
    <div class="container">
      <form class="row "action="calculo_imc.php" method="POST">
        <div class="col-sm-12   col-md-12   col-lg-4   col-xl-4 ">
          <br>Nombre<br>
          <input type="text" name="nombre" placeholder="Ingrese su nombre">
          <br>Rut<br>
          <input type="text" name="rut" placeholder="Ingrese Rut">
        </div>
        <div class="col-sm-12   col-md-12   col-lg-4   col-xl-4 ">
              <br>Edad<br>
              <input type="text" name="edad" placeholder="Ingrese edad">
              <br>Peso<br>
              <input type="text" name="peso" placeholder="Ingrese peso ej: 90 kilos">
        </div>
        <div class"col-sm-12   col-md-12   col-lg-4   col-xl-4 ">
              <br>Altura (en Metros)<br>
              <input type="text" name="altura" placeholder="ej: 1.60 (no use coma)">
              <br>
              <br>
        </div>
        <div class="col-12">
              <button type="submit" name="calcular" class="btn btn-success">Calcular</button>

        </div><br><br>

      </form>
    </div>

    <div class="container">
      <?php
          //Creando el objeto o Instanciando la clase Cuenta
          if(isset($_POST['calcular'])){
              $persona = new Deportista( $_POST['nombre'],
                                            $_POST['rut'],
                                            $_POST['edad'],
                                            $_POST['peso'],
                                            $_POST['altura']);

              //Para mostrar un dato creado con Private
              echo "Estimado sr/srta : ".$persona->getNombre() . "<br>";
              echo "RUT : ".$persona->getRut() . "<br>";
              echo "Edad : ".$persona->getEdad() . " años <br>";
              echo "Su peso es : ".$persona->getPeso() . " Kilos<br>";
              echo "Usted mide : ".$persona->getAltura() . " Metros<br>";
              echo "Su IMC es: <kbd>".$persona->getCalculoimc() . "</kbd> Por lo tanto<br>";
              echo "Su estado es : <kbd>".$persona->getDefinirimc() . "</kbd> <br>";
          }
      ?>
    </div>
  </body>
</html>
