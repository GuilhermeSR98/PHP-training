<?php

$ageList = [19, 23, 24, 26, 27, 30, 31];
$extract1 = ['name' => 'Guilherme', 'balance' => 1000];
$extract2 = ['name' => 'Eduarda', 'balance' => 2000];
$extract3 = ['name' => 'Luffy', 'balance' => 9000];
$extracts = [$extract1, $extract2, $extract3];

//Adicionando valor no proximo index
$ageList[] = 35;

for ($i = 0; $i < count($ageList); $i++) {
    echo $ageList[$i] . PHP_EOL;
};
for ($i = 0; $i < count($extracts); $i++) {
    echo $extracts[$i]['name'] . PHP_EOL;
}
