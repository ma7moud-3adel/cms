<?php

namespace App\Http\Controllers\Dashboard\Category;

use App\Http\Controllers\Controller;
use Domain\Category\DataTables\CategoryDataTable;

class CategoryController extends Controller
{
    public function index(CategoryDataTable $dataTable)
    {
        return view('dashboard.category.index');
    }

    public function indexDataTable(CategoryDataTable $dataTable)
    {
       return $dataTable->render();
    }
}
