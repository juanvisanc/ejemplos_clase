<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        function pintatabla($fila,$columna)
        {
          echo "<table>";
          for ($i=0; $i <$fila ; $i++) {
            echo "<tr>";
            for ($j=0; $j <$columna ; $j++) {
              echo "<td>$i,$j</td>";
            }
            echo "</tr>";
          }
          echo "</table>";
        }

        pintatabla(5,20);
     ?>
  </body>
</html>
