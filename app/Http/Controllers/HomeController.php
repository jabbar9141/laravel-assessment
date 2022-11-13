<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
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

        $available_products = Products::all();
        return view('home' , compact('available_products'));
    }

    public function admin()
    {
       $user_list = User::where('user_type' , 'user')->get();
       $Products_list = Products::all();

        return view('admin.dashboard', [
            'users' => $user_list,
            'products' => $Products_list
        ]);

    }


}
