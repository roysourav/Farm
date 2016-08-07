<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cow;
use App\StockConsumptionModels\Medicine;
use App\HrmModels\Doctor;
use Session;
use Redirect;
use Carbon\Carbon;
use DB;


class cowMedicineController extends Controller
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
        $medicines = Medicine::all();

        return view('cowMedicine.index-cowMedicine')->withMedicines($medicines);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cows = Cow::where('active', 1)->get();

        $medicines = Medicine::all();

        return view('cowMedicine.create-cowMedicine')->withCows($cows)
                                                     ->withMedicines($medicines);
                                                    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(

            'cow_id'       => 'required | numeric',
            'medicine_id'  => 'required | numeric',
            'dose'         => 'required | numeric',
            'days'         => 'required | numeric',
            'date'         => 'required | date | before:'.Carbon::today(),

            ));

            $cow_id      = $request->cow_id;
            $medicine_id = $request->medicine_id;
            $dose        = $request->dose;
            $days        = $request->days;
            $date        = $request->date;


            $medicine = Medicine::find($medicine_id);
            //total units used
            $units = $dose * $days;
            //check stock
            if( $medicine->stock < $units ){

                Session::flash( 'error', 'Insufficient stock,You need to stock the medicine first !');

                return Redirect::route('cow-medicine.create');
            }

            //attch cow with medicine
            $cow = Cow::find($cow_id);

            $cow->medicines()->attach( $medicine_id, [ 'dose'=> $dose, 'days'=> $days, 'date'=> $date ] );

            //medicine stock maintain

            $medicine->decrement( 'stock', $units );

            Session::flash('success', 'New Record Saved Successfully !');

            return Redirect::route( 'cow-medicine.create' );

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicine = Medicine::find($id);

        return view('cowMedicine.show-cowMedicine')->withMedicine($medicine);
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
