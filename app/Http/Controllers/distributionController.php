<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\HrmModels\Customer;
use App\MilkModels\Distribution;
use App\MilkModels\Milk;
use Session;
use Redirect;
use Carbon\Carbon;

class distributionController extends Controller
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

            return redirect::route('distribution.create')->withInput();

        }

        $has_production = Milk::where( 'date', $request->date )->count();

        if( $has_production < 1 )
         {
            Session::flash('error', 'No production record found of that date, please add milk production first.');

            return redirect::route('distribution.create')->withInput();
         }  

         $morning_production =  Milk::where( 'date', $request->date )->sum('morning');

         $evening_production =  Milk::where( 'date', $request->date )->sum('evening');
        
         $total_production = $morning_production + $evening_production;
         

         $about_to_dist = $request->morning + $request->evening + $request->waste;

         if( $total_production != $about_to_dist  )
         {
            Session::flash('error', 'Total distribution (morning + evening + waste) must be equal to production of the day (Total production is '.$total_production.' Ltr )');

            return redirect::route('distribution.create')->withInput();
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

         $is_exists = Distribution::where( 'date', $request->date )->count();

         $distribution =  Distribution::find( $id );

         

        if(  $is_exists > 0 )   
        {
            if( $distribution->date != $request->date )
            {
                Session::flash('error', 'Record of that same date was already added !');

                return redirect::route('distribution.edit' ,['id'=> $distribution->id] );
            } 
        }



        $has_production = Milk::where( 'date', $request->date )->count();

        if( $has_production < 1 )
         {
            Session::flash('error', 'No production record found of that date, please add milk production first.');

            return redirect::route('distribution.edit' ,['id'=> $distribution->id] );
         } 



         $morning_production =  Milk::where( 'date', $request->date )->sum('morning');

         $evening_production =  Milk::where( 'date', $request->date )->sum('evening');
        
         $total_production = $morning_production + $evening_production;
         

         $about_to_dist = $request->morning + $request->evening + $request->waste;

         if( $total_production != $about_to_dist  )
         {
            Session::flash('error', 'Total distribution (morning + evening + waste) must be equal to production of the day (Total production is '.$total_production.' Ltr )');

            return redirect::route('distribution.edit' ,['id'=> $distribution->id] );
         }

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
