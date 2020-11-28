<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehicle;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = vehicle::latest()->paginate(5);

        return view('vehicle.index',compact('vehicles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'make' => 'required',
            'model' => 'required',
            'license_number' => 'required',
            'license_expiry' => 'required',

        ]);

        vehicle::create($request->all());

        return redirect()->route('vehicle.index')
            ->with('success','vehicle created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicles = vehicle::find($id);
        return view('vehicle.show',compact('vehicles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicles = vehicle::find($id);
        return view('vehicle.edit',compact('vehicles','id'));
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
        $vehicles = vehicle::find($id);
        $vehicles->make = request('make');
        $vehicles->model = request('model');
        $vehicles->license_number = request('license_number');
        $vehicles->license_expiry = request('license_expiry');



        $vehicles->save();
        $request->validate([

            'make' => 'required',
            'model' => 'required',
            'license_number' => 'required',
            'license_expiry' => 'required',
        ]);
        $vehicles->update($request->all());

        return redirect()->route('vehicle.index')
            ->with('success','vehicle updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicles = vehicle::find($id);

        if(empty($vehicles)) {
            return;
        }

        $vehicles->delete();

        return redirect()->route('vehicle.index')
            ->with('success','vehicle deleted successfully');
    }
}
