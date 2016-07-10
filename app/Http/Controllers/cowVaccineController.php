<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Cow;

use App\Vaccine;

use Session;

use Redirect;

use Carbon\Carbon;

class cowVaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccines = Vaccine::all();

        return view( 'cowVaccine.index-cowVaccine' )->withVaccines( $vaccines );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cows = Cow::where( 'active', 1 )->get();

        $vaccines = Vaccine::all();

        return view( 'cowVaccine.create-cowVaccine' )->withCows( $cows )->withVaccines( $vaccines );
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

        $this->validate( $request, array(

            'cow_id'        => 'required | numeric ',
            'vaccine_id'    => 'required | numeric',
            'date'          => 'required | date | before:'.Carbon::today(),

            ) );

        $cow_id     = $request->cow_id;
        $vaccine_id = $request->vaccine_id;
        $date       = $request->date;

        $cow = Cow::find( $cow_id );

        $cow->vaccines()->attach( $vaccine_id, ['date' => $date ] );

        Session::flash( 'success', 'New Record Saved Successfully !' );
        
        return Redirect::route( 'cow-vaccine.create' );     

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
    public function destroy($cow_id,$vaccine_id)

    {    
        $cow = Cow::find( $cow_id );





        //You can code on it, I just solved that problem
        return "Cow iD {$cow_id} and Vaccine ID {$vaccine_id}";
    }
}
