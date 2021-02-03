<?php
function priceWithVAT(float $price, float $vat): float
{
    return $price + ($price * ($vat / 100));
}
