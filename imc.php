<?php
$peso = 40;
$altura = 1.76;
$imc = $peso / $altura ** 2;
if ($imc < 17) {
    echo "Very underweight";
} elseif ($imc > 17 && $imc < 18.49) {
    echo "Under weight";
} elseif ($imc > 18.5 && $imc < 24.99) {
    echo "Normal weight";
} elseif ($imc > 25 && $imc < 29.99) {
    echo "Overweight";
} elseif ($imc > 30 && $imc < 34.99) {
    echo "Grade I obesity";
} elseif ($imc > 35 && $imc <  39.99) {
    echo "Grade II obesity";
} elseif ($imc > 40) {
    echo "Grade III obesity";
};
