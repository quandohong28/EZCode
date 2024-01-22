<?php

namespace App\Routes;

use App\Controllers\Admin\HomeController;
use App\Controllers\Admin\CategoryController;
use App\Controllers\Admin\CourseController;
use App\Controllers\Admin\PaymentController;
use App\Controllers\Admin\PostController;
use App\Controllers\Admin\UserController;

use App\Controllers\Api\NotiController;

class Admin
{
    public static function route()
    {
        Router::get('/admin', function () {
            $home = new HomeController();
            $home->index();
        });

        Router::get('/admin/category', function () {
            $category = new CategoryController();
            $category->index();
        });

        Router::get('/admin/course', function () {
            $course = new CourseController();
            $course->index();
        });

        Router::get('/admin/user', function () {
            $user = new UserController();
            $user->index();
        });

        Router::get('/admin/payment', function () {
            $payment = new PaymentController();
            $payment->index();
        });

        Router::get('/admin/post', function () {
            $post = new PostController();
            $post->index();
        });

        Router::get('/admin/profile/{id}', function ($id) {
            $profile = new UserController();
            $profile->show($id);
        });

        // Router::get('/admin/feedback', function () {
        //     $feedback = new FeedbackController();
        //     $feedback->index();
        // });

        Router::get('/api/noti/{id}', function ($id) {
            $noti = new NotiController();
            $noti->show($id);
        });
    }
}
