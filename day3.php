<?php 
// PART 1
$file = file('input.txt');
$epsilon = $gamma = $comsumption = null;
$occurences = array();
foreach ($file as $line) {
    for($i = 0; $i < iconv_strlen(trim($line)); $i++){
        $characters = str_split($line);
        $occurences[$i][] =  intval($characters[$i]);
    }
}
foreach ($occurences as $occurence){
    $arValues = $values = array_count_values($occurence);
    arsort($arValues);
    $common = array_slice(array_keys($arValues),0,1);
    asort($values);
    $uncommon = array_slice(array_keys($values),0,1);
    $gamma .= $common[0];
    $epsilon .= $uncommon[0];
}
echo bindec($gamma) * bindec($epsilon);

// PART 2 