<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStoreRequest;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Inertia\Inertia;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class StoreController extends Controller
{
    public function create(CreateStoreRequest $request) {
        Store::create($request->all());

        return redirect(route('dashboard', absolute: false));
    }

    public function index(Request $request) {
        $recentStores = Store::orderByDesc('updated_at')->limit(5)->get();
        $allStores = Store::get();

        return Inertia::render('Dashboard', ["recentStores" => $recentStores, "allStores" => $allStores]);
    }
}
