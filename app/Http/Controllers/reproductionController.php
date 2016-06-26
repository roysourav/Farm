<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Cow;

use App\Supplier;

use App\Doctor;

use App\Reproduction;

use Session;

use Redirect;

use Carbon\Carbon;

class reproductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $reproductions = Reproduction::all();

        return view( 'reproduction.index-reproduction' )->withReproductions( $reproductions );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cows = Cow::lists('name' , 'id')->toArray();

        $suppliers = Supplier::where( 'cat', '=', 'seed' )->lists('name', 'id')->toArray();

        $doctors = Doctor::lists('name' , 'id')->toArray();

        return view('reproduction.create-reproduction')->withCows( $cows )
                                                       ->withSuppliers( $suppliers )
                                                       ->withDoctors( $doctors );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validating data

        $this->validate($request,array(

            'cow_id' => 'required | numeric',
            'date_of_ai' => 'required | date | before:'.Carbon::today()->tz('Asia/Kolkata'),
            'percentage' => 'required | numeric | between:0,100',
            'supplier_id' => 'required | numeric',
            'doctor_id'   => 'required | numeric',
            'date_of_check' => 'date | before:'.Carbon::today()->tz('Asia/Kolkata'),
            'pregnancy' =>'numeric',
            'preg_confirm_doctor_id'=> 'required_if:pregnancy,1 | numeric',

            ));

        //store in database

        $reproduction = new Reproduction;

        $reproduction->cow_id = $request->cow_id;
        $reproduction->date_of_ai = $request->date_of_ai;
        $reproduction->percentage = $request->percentage;
        $reproduction->supplier_id = $request->supplier_id;
        $reproduction->doctor_id = $request->doctor_id;
        $reproduction->date_of_check = $request->date_of_check;
        $reproduction->pregnancy = $request->pregnancy;
        $reproduction->preg_confirm_doctor_id = $request->preg_confirm_doctor_id;

        $reproduction->save();

        Session::flash('success', 'New Reproduction Record has been saved successfully!');

        return Redirect::route( 'reproduction.edit', [ 'id' => $reproduction->id ] );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $reproduction = Reproduction::find( $id );

       return view( 'reproduction.show-reproduction' )->withReproduction( $reproduction );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reproduction = Reproduction::find( $id );

        $cows = Cow::lists( 'name' , 'id' )->toArray();

        $suppliers = Supplier::where( 'cat', '=', 'seed' )->lists('name', 'id')->toArray();

        $doctors = Doctor::lists('name' , 'id')->toArray();

        return view( 'reproduction.edit-reproduction' )->withReproduction( $reproduction )
                                          ->withCows( $cows )
                                          ->withSuppliers( $suppliers )
                                          ->withDoctors( $doctors );
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
        //validating data

        $this->validate($request,array(

            'cow_id' => 'required | numeric',
            'date_of_ai' => 'required | date | before:'.Carbon::today()->tz('Asia/Kolkata'),
            'percentage' => 'required | numeric | between:0,100',
            'supplier_id' => 'required | numeric',
            'doctor_id'   => 'required | numeric',
            'date_of_check' => 'date | before:'.Carbon::today()->tz('Asia/Kolkata'),
            'pregnancy' =>'numeric',
            'preg_confirm_doctor_id'=> 'required_if:pregnancy,1 | numeric',

            ));


        //store in database

        $reproduction = Reproduction::find( $id );

        $reproduction->cow_id      = $request->cow_id;
        $reproduction->date_of_ai  = $request->date_of_ai;
        $reproduction->percentage  = $request->percentage;
        $reproduction->supplier_id = $request->supplier_id;
        $reproduction->doctor_id   = $request->doctor_id;
        $reproduction->date_of_check = $request->date_of_check;
        $reproduction->pregnancy   = $request->pregnancy;
        $reproduction->preg_confirm_doctor_id = $request->preg_confirm_doctor_id;

        $reproduction->save();

        Session::flash('success', 'Reproduction Record has been Updated successfully!');

        return Redirect::route( 'reproduction.edit', [ 'id' => $reproduction->id ] );


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
