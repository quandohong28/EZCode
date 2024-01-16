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
        $viewPath = "src/Views/$path.php";
        $notFoundPath = 'src/Views/404.php';

        if (file_exists($viewPath)) {
            extract($data);
            include $viewPath;
        } else {
            return $this->redirect($notFoundPath);
        }
    }

    protected function env(string $key)
    {
        $envFilePath = './.env';
        if (file_exists($envFilePath)) {
            $envContent = file_get_contents($envFilePath);

            // Chia nội dung thành mảng các dòng
            $lines = explode("\n", $envContent);

            // Duyệt qua từng dòng và lấy giá trị
            foreach ($lines as $line) {
                // Loại bỏ khoảng trắng ở đầu và cuối dòng
                $line = trim($line);

                // Kiểm tra xem dòng có phải là một cặp key-value hay không
                if (!empty($line) && strpos($line, '=') !== false) {
                    // Tách key và value
                    list($key, $value) = explode('=', $line, 2);

                    // Loại bỏ khoảng trắng ở đầu và cuối key và value
                    $key = trim($key);
                    $value = trim($value);

                    // Sử dụng $key và $value theo nhu cầu của bạn
                    return $value;
                }
            }
        } else {
            echo "File .env không tồn tại.";
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
