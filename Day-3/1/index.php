<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toy Problem 4</title>
</head>
<body>
  <?php
    
    //Answer in Procedural
    $x=10;$y=7;
    echo "
      {$x} + {$y} = " .($x+$y). " <br/>
      {$x} - {$y} = " .($x-$y). " <br/>
      {$x} * {$y} = " .($x*$y). " <br/>
      {$x} / {$y} = " .($x/$y). " <br/>
      {$x} % {$y} = " .($x%$y). " <br/>
    ";
    
    /*
    //Answer in OOP 
    class Arithmetic{
      public function add($x,$y){
        $this->sum = $x + $y;
        echo "{$x} + {$y} = {$this->sum}";
      }
      public function subtract($x,$y){
        $this->difference = $x - $y;
        echo "{$x} - {$y} = {$this->difference}";
      }
      public function multiply($x,$y){
        $this->product = $x * $y;
        echo "{$x} * {$y} = {$this->product}";
      }
      public function divide($x,$y){
        $this->quotient = $x / $y;
        echo "{$x} / {$y} = {$this->quotient}";
      }
      public function modulo($x,$y){
        $this->remainder = $x % $y;
        echo "$x % {$y} = {$this->remainder}";
      }
    }
    $x=10;$y=7;
    $result = new Arithmetic();
    echo $result->add($x,$y)."<br>";
    echo $result->subtract($x,$y)."<br>";
    echo $result->multiply($x,$y)."<br>";
    echo $result->divide($x,$y)."<br>";
    echo $result->modulo($x,$y)."<br>";
    */
  ?>
</body>
</html>