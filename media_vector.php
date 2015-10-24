<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $suma=0;
        $v1=[10,20,30,40,50];
        for ($i=0; $i <count($v1) ; $i++) {
          $suma=$suma+$v1[$i];
        }
        $media=$suma/count($v1);
        echo "La media del vector es: $media";

        echo "<table>";
        $v2=["nombre"=>"Juanvi","apellido"=>"Sánchez"];

        foreach ($v2 as $key => $value) {
          echo "<td>$key</td><td>$value</td>";
          
        }
        echo "</table>";
     ?>
  </body>
</html>
