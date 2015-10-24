<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <?php
          $tam=8;
          $contador=0;

          echo "<tr>";
          for ($j=0; $j <$tam ; $j++) {
            echo "<tr>";
            for ($i=0; $i <$tam ; $i++) {
              echo "<td>$contador</td>";
              $contador++;
            }
            echo "</tr>";
          }
      ?>
   </table>
  </body>

</html>
