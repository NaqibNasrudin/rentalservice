<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
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
        return view('admin.add');
        /*$user = new User;
        $id = $user->id;
        $vehicles = DB::table('vehicles')->where('owner_id', $id)->get();
        return view('admin.dashboard',['vehicles'=>$vehicles]);*/
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
        //$id = $user->id;
        $id = Auth::id();
        $vehicles = new Vehicle;
        $vehicles['owner_id']=$id;
        $vehicles->plate_number = $request->input('plate');
        $vehicles->vehicle_type = $request->input('type');
        $vehicles->vehicle_model = $request->input('model');
        $vehicles->save();
        $owners = DB::table('owners')->where('user_id', $id)->first();
        $vehicles = Vehicle::all()->where('owner_id', $id);
        return view('admin.dashboard',['owners'=>$owners,'vehicles'=>$vehicles]);

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
        return view('admin.update',['vehicles'=>$vehicles]);
    }

    public function show2($vehicle_id)
    {
        $customers = Customer::all()->where('vehicle_id', $vehicle_id);
        $rowcount = $customers->count();
        if ($rowcount==0) {
            /*$id = Auth::id();
            $owners = DB::table('owners')->where('user_id', $id)->first();
            $vehicles = Vehicle::all()->where('owner_id', $id);
            return view('admin.dashboard',['owners'=>$owners,'vehicles'=>$vehicles]);*/
            echo "No record available";
            echo '<a href = "/dashboard">Click Here</a> to go back.';
        } else {
            return view('admin.customer',['customers'=>$customers]);
        }

        //return view('admin.customer',['customers'=>$customers]);
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
    public function update(Request $request, $vehicle_id)
    {
        $id = Auth::id();
        $plate = $request->input('plate');
        $type = $request->input('type');
        $model = $request->input('model');
        /*$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);*/
        /*DB::table('student')->update($data);*/
        /* DB::table('student')->whereIn('id', $id)->update($request->all());*/
        $vehicles = DB::update('update vehicles set plate_number = ?,vehicle_type=?,vehicle_model=? where vehicle_id = ?',[$plate,$type,$model,$vehicle_id]);
        $owners = DB::table('owners')->where('user_id', $id)->first();
        $vehicles = Vehicle::all()->where('owner_id', $id);
        return view('admin.dashboard',['owners'=>$owners,'vehicles'=>$vehicles]);

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
