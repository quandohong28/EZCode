<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Course;
use App\Models\PageLayout;

class CourseController extends Controller
{
    public function index()
    {
        $course = new Course();
        $courses = $course->all();
        return view('admin', [
            'content' => PageLayout::admin('course'),
            'categories' => $courses
        ]);
    }
}
