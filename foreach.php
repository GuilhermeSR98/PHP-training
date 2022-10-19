<?php

$wanted1 = ['name' => 'Gol D. Roger', 'reward' => 5564800000];
$wanted2 = ['name' => 'Edward Newgate', 'reward' => 5046000000];
$wanted3 = ['name' => 'Kaido', 'reward' => 4611100000];
$wanteds = ['Rei dos Piratas' => $wanted1, 'Barba Branca' => $wanted2, 'Kaido das Feras' => $wanted3];

foreach ($wanteds as $key => $value) {
    echo $value['name'] . " " . $value['reward'] . "$" . " - ID: $key" . PHP_EOL;
}

$wanteds2 = [
    'Big Mom' => ['name' => 'Charlotte Linlin', 'reward' => 4388000000],
    'Shanks, o Ruivo' => ['name' => 'Shanks', 'reward' => 4048900000],
    'Barba Negra' => ['name' => 'Marshall D. Teach', 'reward' => 3996600000]
];

//Adicionando valor em index informado
$wanteds2['Olhos de Gavião'] = [
    'name' => 'Dracule Mihawk', 'reward' => 3590000000
];

//Subtraindo valor de determinado index
$wanteds2['Olhos de Gavião']['reward'] -= 300000000;

foreach ($wanteds2 as $key => $value) {
    echo $value['name'] . " " . $value['reward'] . "$" . " - ID: $key" . PHP_EOL;
}
