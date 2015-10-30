<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        if(empty($_GET)){
          echo "No has hecho nada";
        } else {
          var_dump($_GET);
        }
     ?>
  </body>
</html>
