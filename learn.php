<?php

$var[] = ['a','b','c','a','c','a','c','b','a','c'];

$count = [];

foreach($var[0] as $a => $b){

    if(!isset($count[$b])){
        $count[$b] = 0;     
    }

    $count[$b]++;

    if ($count[$b] % 2 != 0) {
       $var[0][$a] = $b . " keluar";
    }else{
       $var[0][$a] = $b. " datang";
    }
    echo "Huruf $b muncul ke-" . $count[$b] . ".\n";
}

foreach ($count as $huruf => $jumlah) {
    echo "Huruf $huruf muncul total $jumlah kali" . PHP_EOL;
}

print_r($var);

$sentence = "aku senang belajar coding";
print_r(strlen($sentence) . "\n");
$string = strtolower($sentence);
$cn;
for ($l = 0; $l < strlen($sentence); $l++){
    $char = $string[$l];

    if (!ctype_alpha($char)) {
        continue;
    }

    if (!isset($cn[$char])) {
        $cn[$char] = 0;
    }

    $cn[$char]++;
}

foreach ($cn as $huruf => $jumlah) {
    echo "Huruf $huruf muncul $jumlah kali" . PHP_EOL;
}

print_r("\n===========\n");

$sentence2 = "kamu merindukan aku kan";
$string2 = strtolower($sentence2);
print_r($string2 ."\n");
$count2 = [];

$chars = str_split($string2);

foreach ($chars as $char) {

    if (!ctype_alpha($char)) {
        continue;
    }

    if (!isset($count2[$char])) {
        $count2[$char] = 0;
    }

    $count2[$char]++;
}

foreach ($count2 as $huruf => $jumlah) {
    echo "Huruf $huruf muncul $jumlah kali" . PHP_EOL;
}

?>