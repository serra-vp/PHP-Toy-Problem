<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toy Problem 7</title>
</head>
<body>
  <?php 
    function parallelogram($height,$base,$diagonal){
      $angle = ($height*$height + $base*$base - $diagonal*$diagonal) / (2*$height*$diagonal);
      $inverseCos = round((acos($angle)) * 180/3.14);
      return (($inverseCos == 90) ? "This is rectangles." : "This is rhombus.")."<br/>";
    }
    echo parallelogram(3,4,5);
    echo parallelogram(6,6,9);
  ?>
</body>
</html>