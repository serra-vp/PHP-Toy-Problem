<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toy Problem 5</title>
</head>
<body>
  <?php 
    $x = 8;
    echo "
      Value is now {$x}. <br/>
      Add 2. Value is now " .($x += 2). ". <br/>
      Subtract 4. Value is now ".($x -= 4).". <br/>
      Multiply by 5. Value is now ".($x *= 5).". <br/>
      Divide by 3. Value is now ".($x /= 3).". <br/>
      Increment value by one. Value is now ".(++$x).". <br/>
      Decrement value by one. Value is now ".(--$x).".
    ";
  ?>
</body>
</html>