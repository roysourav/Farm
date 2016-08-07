<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Cow;

use App\StockConsumptionModels\Vaccine;

use Session;

use Redirect;

use Carbon\Carbon;

use DB;

class cowVaccineController extends Controller
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

        //check vaccine stock
        $vaccine = Vaccine::find($vaccine_id);
        
        if( $vaccine->stock < 1 ){
             Session::flash( 'error', 'Insufficient stock,You need to stock the vaccine first' );

            return Redirect::route( 'cow-vaccine.create' );
        }


        //checking whether before shedule date 

        $row = DB::table('cow_vaccine')->where('cow_id',$cow_id)->where('vaccine_id',$vaccine_id)->first();

        if ( count($row) > 0 ) {

            $vaccine = Vaccine::find($row->vaccine_id);
            $vaccine_duration = $vaccine->duration;

           if (Carbon::parse($row->date)->diff( Carbon::now() )->days < $vaccine->duration*30 ){

            Session::flash( 'error', 'Same vaccine is already given to this cow,You can not use same vaccine before next schedule date' );

            return Redirect::route( 'cow-vaccine.create' );

           }  
        }
        
        //attch cow with vaccine
        $cow = Cow::find( $cow_id );

        $cow->vaccines()->attach( $vaccine_id, ['date' => $date ] );


        //vaccine stock maintain
        $vaccine = Vaccine::find($vaccine_id);

        $vaccine->decrement('stock',1);



        Session::flash( 'success', 'New Record Saved Successfully !' );
        
        return Redirect::route( 'cow-vaccine.create' );     

    }

   /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $vaccine = Vaccine::find($id);

       return view('cowVaccine.show-cowVaccine')->withVaccine( $vaccine );
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($cow_id,$vaccine_id)

    {    
        $cow = Cow::find( $cow_id );

        $cow->vaccines()->detach( $vaccine_id );

        Session::flash( 'success', 'Record Deleted Successfully !' );
        
        return Redirect::route( 'cow-vaccine.show', [ 'id'=> $vaccine_id ] );


    }
}
