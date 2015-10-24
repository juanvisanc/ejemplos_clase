<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      //Media de los valores contenidos en el vector
        $suma=0;
        $v1=[10,20,30,40,50];
        for ($i=0; $i <count($v1) ; $i++) {
          $suma=$suma+$v1[$i];
        }
        $media=$suma/count($v1);
        echo "La media del vector es: $media";

        //Tabla con el contenido del vector asociativo
        $v2=["nombre"=>"Juanvi","apellido"=>"Sánchez"];
        echo "<table>";
        echo "<tr>";
        foreach ($v2 as $key => $value) {
          echo "<td>$key</td>";
        }
        echo "<tr>";
        foreach ($v2 as $key => $value) {
          echo "<td>$value</td>";
        }
        echo "</tr>";
        echo "</table>";
     ?>
  </body>
</html>
