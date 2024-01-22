<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Category;
use App\Models\PageLayout;

class CategoryController extends Controller
{
    public function index()
    {
        $category = new Category();
        $categories = $category->all();
        return view('admin', [
            'content' => PageLayout::admin('category'),
            'categories' => $categories
        ]);
    }

    // public function create()
    // {
    //     return $this->view('admin/category/create');
    // }

    // public function store()
    // {
    //     $category = new Category();
    //     $category->name = $_POST['name'];
    //     $category->save();
    //     return redirect('/admin/category');
    // }

    // public function edit($id)
    // {
    //     $category = Category::find($id);
    //     return $this->view('admin/category/edit', compact('category'));
    // }

    // public function update($id)
    // {
    //     $category = Category::find($id);
    //     $category->name = $_POST['name'];
    //     $category->save();
    //     return redirect('/admin/category');
    // }

    // public function destroy($id)
    // {
    //     $category = Category::find($id);
    //     $category->delete();
    //     return redirect('/admin/category');
    // }
}
