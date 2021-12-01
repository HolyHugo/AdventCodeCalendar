<?php
//PART 1 
 $file = fopen('input.txt','r');
 $lastLine = fgets($file);
 $index = 0;
 while(!feof($file)){
     $ligne = fgets($file);
     $index = intval($ligne) > intval($lastLine) ? ++$index : $index;    
    $lastLine = $ligne;
 }
 echo $index;

// PART 2 
$file = file('input.txt');
$index = $nbrChange = $lastWindow = $window = 0;
foreach ($file as $key => $val) {
    $window = 0;
    for ($i = $key; $i <  $key + 3; $i++) {
        $window += intval($file[$i]);
    }
    $nbrChange = $window > $lastWindow ? ++$nbrChange : $nbrChange;
    $lastWindow = $window;
    $index++;
}

echo $nbrChange-1;
