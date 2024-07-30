<?php

namespace Core;

class BaseController
{

    public function render($view, $params = [])
    {
        extract($params);
        include_once __DIR__ . "/../Views/$view.php";
    }

    public function redirect($url)
    {
        header("Location: $url");
    }
    public function redirectBack()
    {
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }

    public function redirectWithMessage($url, $message)
    {
        $_SESSION['message'] = $message;
        $this->redirect($url);
    }

    public function redirectBackWithMessage($message)
    {
        $_SESSION['message'] = $message;
        $this->redirectBack();
    }

    public function redirectWithError($url, $error)
    {
        $_SESSION['error'] = $error;
        $this->redirect($url);
    }

    public function redirectBackWithError($error)
    {
        $_SESSION['error'] = $error;
        $this->redirectBack();
    }

    // geriye json formatında veri döndürür
    public function json($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }

}