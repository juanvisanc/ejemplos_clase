<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        function crearlista($vector)
        {
          echo "<ul>";
          foreach ($vector as $value) {
            echo "<li>$value</li>";
          }
          echo "</ul>";
        }
        $array=["Jesus","Pepe","Manuel","Manuela"];
        crearlista($array);
     ?>
  </body>
</html>
