<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toy Problem 6</title>
</head>
<body>
  <?php 
    // function recArea($l,$w){
    //   return "A rectangle of length {$l} and width {$w} has an area of ".$w*$l.".";
    // }
    function recArea($l,$w){
      $area = $l * $w;
      return "A rectangle of length $l and width $w has an area of $area.";
    }
    echo recArea(3,2);
  ?>
</body>
</html>