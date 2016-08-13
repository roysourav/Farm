<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\HrmModels\Customer;

use App\MilkModels\Distribution;

use Session;

use Redirect;

use Carbon\Carbon;

class distributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distributions = Distribution::orderBy( 'date', 'DESC' )->take(60)->get();

        return view( 'MilkViews.distribution.index-distribution' )->withDistributions( $distributions );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();

        return view( 'MilkViews.distribution.create-distribution' )->withCustomers( $customers );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate( $request, array(

            'customer_id' => 'required | numeric ',
            'date'        => 'required | date | before:'.Carbon::today(),
            'price'       => 'required | numeric ',
            'morning'     => 'required | numeric ',
            'evening'     => 'required | numeric ',
            'waste'       => 'numeric ',

            ) );

        $is_exists = Distribution::where( 'date', $request->date )->count();

        if( $is_exists > 0 )
        {
            Session::flash('error', 'Record of that same date was already added !');

            return redirect::route('distribution.create');

        }

        $distribution = new Distribution;

        $distribution->customer_id = $request->customer_id;
        $distribution->date     = $request->date;
        $distribution->price    = $request->price;
        $distribution->morning  = $request->morning;
        $distribution->evening  = $request->evening;
        $distribution->waste    = $request->waste;

        $distribution->save();

        Session::flash('success', 'New Distribution Record Added Successfully !');

        return Redirect::route('distribution.index');
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $distribution = Distribution::find( $id );

        $customers = Customer::all();

        return view( 'MilkViews.distribution.edit-distribution' )->withDistribution( $distribution )
                                                                 ->withCustomers($customers);
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
        $this->validate( $request, array(

            'customer_id' => 'required | numeric ',
            'date'        => 'required | date | before:'.Carbon::today(),
            'price'       => 'required | numeric ',
            'morning'     => 'required | numeric ',
            'evening'     => 'required | numeric ',
            'waste'       => 'numeric ',

            ) );

        $distribution =  Distribution::find( $id );

        $distribution->customer_id = $request->customer_id;
        $distribution->date     = $request->date;
        $distribution->price    = $request->price;
        $distribution->morning  = $request->morning;
        $distribution->evening  = $request->evening;
        $distribution->waste    = $request->waste;

        $distribution->save();

        Session::flash('success','Record updaed successfully !');

        return redirect::route('distribution.edit', [ 'id' => $distribution->id ] );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $distribution = Distribution::find($id);

        $distribution->delete();

        Session::flash('success', 'Record Deleted Successfully !');

        return redirect::route('distribution.index');
    }
}
