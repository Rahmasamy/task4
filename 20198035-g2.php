<?php
$langs = array("English", "Arabic", "french", "germany", "spanish"); 

for ($x = 0; $x <=count($langs) ; $x++) {
  
  echo "The number is: $langs[$x]. <br>";
}

$newLangs = implode($langs);
echo "array after converting to string : <br>";
echo $newLangs;

?>