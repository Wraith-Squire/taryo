<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StoreController extends Controller
{
    public function create(Request $request) {
        Store::create($request->all());

        return Inertia::render('Dashboard');
    }

    public function index(Request $request) {

    }
}
