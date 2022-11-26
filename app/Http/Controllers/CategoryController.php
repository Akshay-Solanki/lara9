<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Http\Request;
use App\ModelHelpers\SaveModel;
use App\Http\Requests\CategoryCreateRequest;

class CategoryController extends Controller
{

    public function index()
    {
        return Inertia::render('Category/Categories');
    }
    public function create()
    {
        return Inertia::render('Category/Create');
    }

    public function store(CategoryCreateRequest $request)
    {
        $data = $request->validated() + [
            'created_by'    =>  auth()->id()
        ];

        $category = (new SaveModel(new Category, $data))->execute();

        return redirect()->route('categories.index')->withSuccess('Category Created Successfully');

    }

}
