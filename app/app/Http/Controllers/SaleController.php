<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SaleController extends Controller
{
    public function index(Request $request) {
        $sales = Sale::where('store_id', $request->get('store_id'))->get();

        return Inertia::render('Store/Sales', ['sales' => $sales]);
    }
}
