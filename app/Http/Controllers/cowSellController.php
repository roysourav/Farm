<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Cow;

use App\CowSell;

use Session;

use Redirect;

use Carbon\Carbon;

class cowSellController extends Controller
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
        $sold_cows = CowSell::all();

        return view( 'cowSell.index-cowSell' )->withSold_cows( $sold_cows );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cows = Cow::where( 'active', 1 )->lists( 'name', 'id' )->toArray();

        return view( 'cowSell.create-cowSell' )->withCows($cows);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data

        $this->validate( $request, array(

                'cow_id' => 'required | numeric',
                'date'   => 'required | date | before:'.Carbon::today()->tz('Asia/Kolkata'),
                'price'  => 'required | digits_between:4,6',
                
            ) );

        $sell_cow = new CowSell;

        $sell_cow->cow_id   =   $request->cow_id;
        $sell_cow->date     =   $request->date;
        $sell_cow->price    =   $request->price;

        $sell_cow->save();

        $cow = Cow::find($sell_cow->cow_id);
        $cow->active = 0;

        $cow->save();

        Session::flash('success', 'Cow Sell Record has been saved successfully!');

        return redirect::route( 'sell-cow.edit',['id'=>$sell_cow->id] );


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
        $sell_cow = CowSell::find($id);

        $cow = Cow::where( 'id', $sell_cow->cow_id )->lists('name', 'id')->toArray();

        return view( 'cowSell.edit-cowSell' )->withSell_cow( $sell_cow )->withCow($cow);
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
         //validate data

        $this->validate( $request, array(

                'cow_id' => 'required | numeric',
                'date'   => 'required | date | before:'.Carbon::today()->tz('Asia/Kolkata'),
                'price'  => 'required | digits_between:4,6',
                
            ) );

        $sold_cow = CowSell::find( $id );

        $sold_cow->cow_id   =   $request->cow_id;
        $sold_cow->date     =   $request->date;
        $sold_cow->price    =   $request->price;

        $sold_cow->save();


        Session::flash('success', 'Cow Sell Record has been Updated successfully!');

        return redirect::route( 'sell-cow.edit',['id'=>$sold_cow->id] );


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
