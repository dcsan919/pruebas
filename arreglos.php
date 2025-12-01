<?php

$items = [
    ['name' => 'Apple', 'price' => 1.00],
    ['name' => 'Banana', 'price' => 0.50],
    ['name' => 'Cherry', 'price' => 0.25],
];

function DC_CalculateTotal($items) {
    $total = 0;
    $totalesApple = [];

    for($i = 0; $i < count($items); $i++)
    {
        // implementar la logica aquí
    }
    return $total;
}

echo "Total: $" . DC_CalculateTotal($items);

?>