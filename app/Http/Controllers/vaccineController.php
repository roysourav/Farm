<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Vaccine;

use Redirect;

use Session;

class vaccineController extends Controller
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
        $vaccines = Vaccine::all();

        return view( 'vaccine.index-vaccine' )->withVaccines( $vaccines );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'vaccine.create-vaccine' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validating vata

        $this->validate($request, array(

            'name'      => 'required | Min:3| unique:vaccines,name',
            'duration'  => 'required | numeric'

            ));

        //Storing data

        $vaccine = new Vaccine;

        $vaccine->name      = $request->name;
        $vaccine->duration  = $request->duration;

        $vaccine->save();

        Session::flash( 'success', 'New Vaccine Has Been Created Successfully !' );

        return Redirect::route( 'vaccine.edit', [ 'id' => $vaccine->id ] );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vaccine = Vaccine::find( $id );

        return view( 'vaccine.edit-vaccine' )->withVaccine( $vaccine );
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
         //Validating vata

        $this->validate($request, array(

            'name'      => 'required | Min:3| unique:vaccines,name,'.$id,
            'duration'  => 'required | numeric'

            ));

        //updating data

        $vaccine = Vaccine::find( $id );

        $vaccine->name      = $request->name;
        $vaccine->duration  = $request->duration;

        $vaccine->save();

        Session::flash( 'success', 'Vaccine Info Has Been Updated Successfully !' );

        return Redirect::route( 'vaccine.edit', [ 'id' => $vaccine->id ] );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vaccine = Vaccine::find( $id );

        $vaccine->cows()->detach();

        $vaccine->delete();

        Session::flash( 'success', 'Vaccine has been deleted successfully !' );

        return Redirect::route('vaccine.index');
    }




}
