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
        $viewPath = "src/views/$path.php";

        if (file_exists($viewPath)) {
            extract($data);
            include $viewPath;
        } else {
            return $this->redirect('/404');
        }
    }
}
