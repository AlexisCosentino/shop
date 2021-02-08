<?php
function priceWithVAT(float $price, float $vat): float
{
    return $price + ($price * ($vat / 100));
}

function fancyPrice(float $price, float $vat = 0): string
{
    return number_format(priceWithVAT($price, $vat), 2, ',', ' ') . ' €';
}
