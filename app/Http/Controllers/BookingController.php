<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Owner;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('User.welcome');
    }

    public function carindex()
    {
        //$vehicles = Vehicle::all();
        //$id = DB::table('customers')->where('vehicle_id',null);
        //$vehicles = Vehicle::all()->where('vehicle_id', $id);
        $vehicles = Vehicle::leftJoin('customers', function($join) {
            $join->on('vehicles.vehicle_id', '=', 'customers.vehicle_id');
            })
            ->whereNull('customers.cust_id')
            ->where('vehicle_type','=','Car')
            ->get(['vehicles.vehicle_id','vehicles.plate_number','vehicles.vehicle_type','vehicles.vehicle_model' ]);
        return view('user.car',['vehicles'=>$vehicles]);
    }

    public function motorindex()
    {
        //$vehicles = Vehicle::all();
        //$id = DB::table('customers')->where('vehicle_id',null);
        //$vehicles = Vehicle::all()->where('vehicle_id', $id);
        $vehicles = Vehicle::leftJoin('customers', function($join) {
            $join->on('vehicles.vehicle_id', '=', 'customers.vehicle_id');
            })
            ->whereNull('customers.cust_id')
            ->where('vehicle_type','=','Motorcycle')
            ->get(['vehicles.vehicle_id','vehicles.plate_number','vehicles.vehicle_type','vehicles.vehicle_model' ]);
        return view('user.motor',['vehicles'=>$vehicles]);
    }

    public function vanindex()
    {
        //$vehicles = Vehicle::all();
        //$id = DB::table('customers')->where('vehicle_id',null);
        //$vehicles = Vehicle::all()->where('vehicle_id', $id);
        $vehicles = Vehicle::leftJoin('customers', function($join) {
            $join->on('vehicles.vehicle_id', '=', 'customers.vehicle_id');
            })
            ->whereNull('customers.cust_id')
            ->where('vehicle_type','=','Van')
            ->get(['vehicles.vehicle_id','vehicles.plate_number','vehicles.vehicle_type','vehicles.vehicle_model' ]);
        return view('user.van',['vehicles'=>$vehicles]);
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
        $id = $request -> input('id');
        $customer = new Customer;
        $customer['vehicle_id']=$id;
        $customer -> cust_fname = $request -> input('fname');
        $customer -> cust_lname = $request -> input('lname');
        $customer -> cust_email = $request -> input('email');
        $customer -> cust_phoneno = $request -> input('number');
        $customer -> date_start = $request -> input('pick');
        $customer -> date_return = $request -> input('return');
        $customer->save();
        $vehicles = Vehicle::all()->where('vehicle_id', $id)->first();
        return view('user.confirm',['customer'=>$customer,'vehicles'=>$vehicles]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($vehicle_id)
    {
        $vehicles = Vehicle::all()->where('vehicle_id', $vehicle_id)->first();

        return view('user.booking',['vehicles'=>$vehicles]);

    }
    public function show2($vehicle_id)
    {
        $owners = Owner::leftJoin('Vehicles', function($join) {
            $join->on('owners.owner_id', '=', 'vehicles.owner_id');
            })
            ->where('vehicles.vehicle_id','=',$vehicle_id)
            ->get(['owners.f_name','owners.l_name','owners.phone_number' ]);
        return view('user.owner',['owners'=>$owners]);
    }

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
    public function destroy($id)
    {
        //
    }
}
