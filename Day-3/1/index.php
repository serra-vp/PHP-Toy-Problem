<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toy Problem 4</title>
</head>
<body>
  <?php 
    class Arithmetic{
      public function add($x,$y){
        $this->sum = $x + $y;
        return "{$x} + {$y} = {$this->sum}";
      }
      public function subtract($x,$y){
        $this->difference = $x - $y;
        return "{$x} + {$y} = {$this->difference}";
      }
      public function multiply($x,$y){
        $this->product = $x * $y;
        return "{$x} + {$y} = {$this->product}";
      }
      public function divide($x,$y){
        $this->quotient = $x / $y;
        return "{$x} + {$y} = {$this->quotient}";
      }
      public function modulo($x,$y){
        $this->remainder = $x % $y;
        return "{$x} + {$y} = {$this->remainder}";
      }
    }
    $x=10;$y=7;
    $result = new Arithmetic();
    echo $result->add($x,$y)."<br>";
    echo $result->subtract($x,$y)."<br>";
    echo $result->multiply($x,$y)."<br>";
    echo $result->divide($x,$y)."<br>";
    echo $result->modulo($x,$y)."<br>";
  ?>
</body>
</html>