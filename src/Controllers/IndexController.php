<?php
namespace Controllers;
include_once __DIR__ . '/../../vendor/autoload.php';

use Core\BaseController;
use Models\Cart;
use Models\Product;

class IndexController extends BaseController
{
    public function index()
    {
        $products = [
            new Product(1, 'Product 1', 100),
            new Product(2, 'Product 2', 200),
            new Product(3, 'Product 3', 300),
        ];

        $cart = new Cart();
        $cart->add($products[0]);
        $cart->add($products[1]);

        $this->render('index', [
            'products' => $products,
            'cart' => $cart,
        ]);
    }
}