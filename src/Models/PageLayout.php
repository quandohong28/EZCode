<?php

namespace App\Models;

class PageLayout
{
    public static function render($role)
    {
        self::header();

        if ($role === 'admin') {
            self::adminContent();
        } elseif ($role === 'user') {
            self::userContent();
        }

        self::footer();
    }

    private static function header()
    {
        echo "<header><h1>Common Header</h1></header>";
    }

    private static function adminContent()
    {
        echo "<main><p>Welcome, Admin!</p></main>";
    }

    private static function userContent()
    {
        echo "<main><p>Welcome, User!</p></main>";
    }

    private static function footer()
    {
        echo "<footer><p>Common Footer</p></footer>";
    }
}
