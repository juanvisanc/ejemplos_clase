<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function media_vector($vector)
      {
        $suma=0;
        for ($i=0; $i <count($vector) ; $i++) {
          $suma=$suma+$vector[$i];
        }
        $media=$suma/count($vector);
        return $media;
      }
      $v1=[10,20,30,40,50];
      $var=media_vector($v1);
      echo "La media es $var";

     ?>
  </body>
</html>
