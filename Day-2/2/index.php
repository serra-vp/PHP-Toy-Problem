<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toy Problem 3</title>
</head>
<body>
  <?php 
    $abcCount = $xyzCount = $num = 0;

    //while loop ABC
    while($abcCount < 9){
      echo "abc ";
      $abcCount++;
      if($abcCount == 9) echo "\r\n";
    }
    //do while loop XYZ
    do{
      echo "xyz ";
      $xyzCount++;
      if($xyzCount == 9) echo "<br/><br/>";
    }while($xyzCount < 9);

    //for loop number
    for($x=1; $x <= 9; $x++){
      echo $x." ";
      if($x == 9) echo "<br/><br/>";
    }

    //for loop alphabet
    for($letter = 'a'; $letter <= 'f'; $letter++ && $num++){
      echo $num+1 ." Item ".strtoupper($letter)."<br/>";
      if($letter === 'f') echo "<br/><br/>";
    }

  ?>
</body>
</html>