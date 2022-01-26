<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Vehicle;

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
        $id = Auth::id();
        //$owners = DB::select('select * from owners');
        $owners = DB::table('owners')->where('user_id', $id)->first();
        $vehicles = Vehicle::all()->where('owner_id', $id);
        return view('admin.dashboard',['owners'=>$owners,'vehicles'=>$vehicles]);
    }
}
