<?php

namespace App\Controllers;

class Controller
{
    protected function json(array $data, int $code = 200)
    {
        header('Content-Type: application/json');

        http_response_code($code);

        echo json_encode($data);
    }

    protected function redirect(string $path)
    {
        header("Location: $path");
        die;
    }

    protected function view(string $path, array $data = [])
    {
        $viewPath = "Views/$path.php";
        $notFoundPath = 'Views/404.php';
        
        if (file_exists($viewPath)) {
            extract($data);
            include $viewPath;
        } else {
            return $this->redirect($notFoundPath);
        }
    }

    protected function dd()
    {
        $data = func_get_args();
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        die;
    }
}
