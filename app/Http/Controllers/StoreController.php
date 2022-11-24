<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Store;
use Illuminate\Http\Request;
use App\ModelHelpers\SaveModel;
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
        $data = $request->validated() + ['created_by' => auth()->id()];

        $store = (new SaveModel(new Store, $data))->execute();

        return redirect()->route('stores.index');

    }
}
