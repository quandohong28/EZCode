<?php
namespace App\Routes;

use App\Controllers\ExceptionController;

class Exception {
    public static function route()
    {
        Router::route('/404', function () {
            $exception = new ExceptionController();
            $exception->notFound();
        });

        Router::route('/405', function () {
            $exception = new ExceptionController();
            $exception->notAllowed();
        });
    }
}
