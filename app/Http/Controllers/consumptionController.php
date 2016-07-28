<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\StockConsumptionModels\Food;

use App\StockConsumptionModels\Consumption;

use Session;

use Redirect;

class consumptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $foods = Food::all();

        return view('StockConsumptionViews.consumption.create-consumption')->withFoods( $foods );
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

            'food_id'  => 'required | numeric',
            'month'    => 'required | numeric',
            'balance'  => 'required | numeric',
            'stock'    => 'required | numeric',
            'cost'     => 'required | numeric',
            'consumption' => 'required | numeric',
            'wastage'  => 'numeric',
            'adjustment'  => 'numeric',
            ) );

        $consumption = new Consumption;

        $consumption->food_id = $request->food_id;
        $consumption->month   = $request->month;
        $consumption->balance = $request->balance;
        $consumption->stock   = $request->stock;
        $consumption->cost    = $request->cost;
        $consumption->consumption = $request->consumption;
        $consumption->wastage     = $request->wastage;
        $consumption->adjustment  = $request->adjustment;

        $consumption->save();

        Session::flash( 'success', 'New Record Saved Successfully !' );

        return Redirect::route('consumption.index');
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
