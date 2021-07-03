<?PhP

$nota=$_POST ["nota"];

if ($nota <1) {
  echo "ERROR: Ingresó nota inferior a 1.0";
} elseif ($nota <= 3.5)
    {
    echo "Estudiante Reprobado";
    }
    elseif ($nota <= 5.5)
    {
    echo "Rinde Examen";
    }
    elseif ($nota <= 7.0)
    {
    echo "Aprobado";
    }
    else {
      echo "ERROR: ingreso nota superior a 7.0";
    }
?>
