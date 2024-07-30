<?php

namespace Models;

class Cart
{
    public $items = [];

    public function add(Product $product)
    {
        $this->items[] = $product;
    }
}