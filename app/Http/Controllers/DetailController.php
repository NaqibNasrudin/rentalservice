<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Owner;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.detail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $owners = new Owner;
        $id = Auth::id();
        //$user = new User;
        $owners['user_id']=$id;
        $owners->f_name = $request->input('fname');
        $owners->l_name = $request->input('lname');
        $owners->phone_number = $request->input('number');
        $owners->save();
        //$vehicles = DB::table('vehicles')->where('owner_id', $id)->get();
        $vehicles = Vehicle::all()->where('owner_id', $id);
        return view('admin.dashboard',['owners'=>$owners, 'vehicles'=>$vehicles]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cust_id)
    {
        Customer::where('cust_id',$cust_id)->delete();
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/dashboard">Click Here</a> to go back.';
    }
}
