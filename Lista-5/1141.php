<?php
// Cultivando Stings

while (true) {
    $n = intval(fgets(STDIN));
    if ($n == 0) {
      break;
    }
    
    $origens = 0;
    $j = 0;

    for ($i = 0; $i < $n; $i++) {
        $strings[$i] = (fgets(STDIN));
    }

    function ordenaStrings($strings) {
      usort($strings, function($a, $b) {
          return strlen($a) - strlen($b);
      });
      return $strings;
  }
  
  
  function verificaOrigem($string, $origem) {
    if (strpos($string, $origem) !== false) {
        return true;
    } else {
        return false;
    }
  }

  $strings = ordenaStrings($strings);
  for ($i = 1; $i < n; $i++) {

    if (verificaOrigem($strings[$i], $strings[$j])) {
        $j++;
        $origens++;
    } 
    }

    echo $origens;
    
  }
?>