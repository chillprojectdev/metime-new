<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $customers_count = UserData::getAllCustomersCount();

        return view('admin.dashboard', compact(
            'customers_count'
        ));
    }
}
