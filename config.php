<?php
function loadEnv()
{
    $envFilePath = './.env';
    if (file_exists($envFilePath)) {
        $envContent = file_get_contents($envFilePath);

        $lines = explode("\n", $envContent);

        $envCache = [];

        foreach ($lines as $line) {
            $line = trim($line);

            if (!empty($line) && strpos($line, '=') !== false) {
                list($key, $value) = explode('=', $line, 2);

                $key = trim($key);
                $value = trim($value);

                $envCache[$key] = $value;
            }
        }

        return $envCache;
    } else {
        echo "File .env không tồn tại.";
        return null;
    }
}

function env(string $key, $default = null)
{
    static $envCache;

    if (!$envCache) {
        $envCache = loadEnv();
    }

    return isset($envCache[$key]) ? $envCache[$key] : $default;
}


function dd()
{
    $data = func_get_args();
    echo '<div style="background-color: black; color: red; padding: 10px"><pre>';
    print_r($data);
    echo '</pre></div>';
    die;
}
