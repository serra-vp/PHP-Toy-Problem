<?php
  function toWeirdCase($string) {
    $string = explode(" ",$string);
     
     foreach($string as $indexArr => $word):
       $characters = str_split($word);
       foreach($characters as $index => $char):
          $newArray[$indexArr][] = ($index % 2 == 0) ? strtoupper($char) : strtolower($char);
       endforeach;
       $newArray[$indexArr] = implode("",$newArray[$indexArr]);
     endforeach;
     return implode(" ",$newArray);  
   }
   echo toWeirdCase('Hello world foo bar baz');
?>
