<?php
// PART 1
$file = file('input.txt');
$depth = $forward = 0;
foreach ($file as $line) {
    $lineValue = intval(substr($line, strpos($line, ' ')));
    strlen($line) > 7 ?
        $forward += $lineValue : (strlen($line) > 5 ? $depth += $lineValue : $depth -= $lineValue);
}
echo $forward*$depth;

// PART 2
$file = file('input.txt');
$aim = $depth = $forward = 0;
foreach ($file as $line) {
    $lineValue = intval(substr($line, strpos($line, ' ')));
    strlen($line) > 7 ?
        $forward += $lineValue and $depth += $lineValue * $aim : (strlen($line) > 5 ? $aim += $lineValue : $aim -= $lineValue);
}
echo $forward * $depth;