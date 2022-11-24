<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Requests\CreateStoreRequest;

class StoreController extends Controller
{
    public function index()
    {
        return Inertia::render('Store/Stores');
    }

    public function create()
    {
        return Inertia::render('Store/Create');
    }

    public function store(CreateStoreRequest $request)
    {
        $data = $request->validated();

        $store = new Store;
        $store->name = $request->name;
        $store->created_by = auth()->id();
        $store->save();

        

    }
}
