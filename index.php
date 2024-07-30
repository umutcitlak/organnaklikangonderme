<?php
if (isset($_GET["menu"])){

    $menu = $_GET["menu"];
    if ($menu == "index"){
        include_once __DIR__ . '/src/Controllers/IndexController.php';
        $indexController = new Controllers\IndexController();
        $indexController->index();
    }
    else if ($menu == "cart"){
        include_once __DIR__ . '/src/Controllers/CartController.php';
        $cartController = new Controllers\CartController();
        $cartController->index();
    }
    else if ($menu == "product"){
        include_once __DIR__ . '/src/Controllers/ProductController.php';
        $productController = new Controllers\ProductController();
        $productController->index();
    }
    else if ($menu == "category"){
        include_once __DIR__ . '/src/Controllers/CategoryController.php';
        $categoryController = new Controllers\CategoryController();
        $categoryController->index();
    }
    else if ($menu == "user"){
        include_once __DIR__ . '/src/Controllers/UserController.php';
        $userController = new Controllers\UserController();
        $userController->index();
    }
    else if ($menu == "order"){
        include_once __DIR__ . '/src/Controllers/OrderController.php';
        $orderController = new Controllers\OrderController();
        $orderController->index();
    }
    else if ($menu == "orderdetail"){
        include_once __DIR__ . '/src/Controllers/OrderDetailController.php';
        $orderDetailController = new Controllers\OrderDetailController();
        $orderDetailController->index();
    }
    else if ($menu == "login"){
        include_once __DIR__ . '/src/Controllers/LoginController.php';
        $loginController = new Controllers\LoginController();
        $loginController->index();
    }
    else if ($menu == "logout"){
        include_once __DIR__ . '/src/Controllers/LogoutController.php';
        $logoutController = new Controllers\LogoutController();
        $logoutController->index();
    }
    else if ($menu == "register"){
        include_once __DIR__ . '/src/Controllers/RegisterController.php';
        $registerController = new Controllers\RegisterController();
        $registerController->index();
    }
    else if ($menu == "profile"){
        include_once __DIR__ . '/src/Controllers/ProfileController.php';
        $profileController = new Controllers\ProfileController();
        $profileController->index();
    }




}