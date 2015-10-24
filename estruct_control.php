<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        echo "<ul>";//la etiqueta puede ir tb fuera de php en el body.
        for ($i=1; $i <=10;$i++){
            echo "<li>LINEA $i</li>";
        }
        echo "</ul>";

        //mostrar los 10 primeros nuemeros impares.
        $i=0;
        $cont=0;
        while ($cont < 10) {
          if ($i%2==1) {
            echo "$i<br>";
            $cont++;
            $i++;
          }else {
            $i++;
          }
        }

        //tabla de multiplicar
        $num=5;
        echo "<table style='border: solid 1px black'><thead><tr><th>TABLA DEL $num</th></tr></thead>";
        echo "<tbody>";
        for ($cont=0; $cont<=10 ; $cont++) {
          echo "<tr><td>$num x $cont = ".$num*$cont."</td></tr>";
        }
        echo "</tbody></table>";

    ?>
  </body>
</html>
