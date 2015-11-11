<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        function contienecadena($vector,$cadena)
        {

          foreach ($vector as $value) {
            if ($value==$cadena) {
              return true;
            }
          }
          return false;
        }
        $array=["Jesus","Pepe","Manuel","Manuela"];
        $cad="Jesus";
        if (contienecadena($array, $cad)) {
          echo "si contiene";
        }
        else {
          echo "no contiene";
        }
     ?>
  </body>
</html>
