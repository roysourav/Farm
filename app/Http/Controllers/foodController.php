<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\StockConsumptionModels\Food;

use Session;

use Redirect;

class foodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = food::all();

        return view( 'StockConsumptionViews.food.index-food' )->withFoods($foods);
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

            'name' => 'required | Min:3 | max:100 | unique:foods,name',

            ) );

        //storing data

        $food = new Food;

        $food->name = $request->name;

        $food->save();

        Session::flash('success', 'New Food Created Successfully !');

        return Redirect::route('food.index');

    }

    /**
     * edit form of species.
     *
     */

    public function edit($id)
    {
        $food = Food::find($id);

        return view( 'StockConsumptionViews.food.edit-food' )->withFood( $food );

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
        $this->validate($request, array(

            'name' => 'required | Min:3 | max:100 | unique:foods,name,'.$id,

            ) );

        $food = Food::find($id);

        $food->name = $request->name;

        $food->save();

        Session::flash('success', 'Food Updated Successfully !');

        return Redirect::route('food.edit', [ 'id' => $food->id ] );


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = Food::find($id);

        $food->delete();

        Session::flash('success', 'Dood has been deleted successfully !');

        return Redirect::route( 'food.index' );
    }
}
