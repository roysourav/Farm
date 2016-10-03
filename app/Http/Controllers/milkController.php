<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cow;
use App\MilkModels\Milk;
use Session;
use Redirect;


class milkController extends Controller
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

    public function getdate()
    {
        return view( 'MilkViews.milk.create-milk-date' );

    }

    public function storedate(Request $request)
    {
        $this->validate($request, array(

            'date' => 'required | date ',

            ) );

        $date = $request->date;

       Session::put('date', $date );
       
        return redirect::route('milk.create');
    }

    //milk details as per date

    public function details($date)
    {   
        $date = date('m/d/Y', $date);
        
        $milks = Milk::where('date',$date)->orderBy('cow_id', 'ASC')->get();

        return view( 'MilkViews.milk.milk-details' )->withMilks( $milks )->withDate( $date );
       
    }
    //list view for cow milk details
     public function cowMilkList()
    {   
        $cows = Cow::where( 'active', 1 )->get();

        return view( 'MilkViews.milk.cow-milk-list' )->withCows( $cows );
       
    }
    //milk details as per cow
     public function cowMilkDetails($id) 
    {   
        $cow = Cow::find($id);

        $milks = Milk::where('cow_id',$id)->orderBy('date', 'DESC')->take(60)->get();

        return view( 'MilkViews.milk.cow-milk-details' )->withMilks( $milks )->withCow($cow);
       
    }

    //milk details as per cow

    public function index()
    {
        $milks = Milk::orderBy('date', 'DESC')->groupBy('date')->selectRaw('sum(morning) as morning, date')->selectRaw('sum(evening) as evening, date')->take(60)->get();
        
        return view('MilkViews.milk.index-milk')->withMilks($milks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        if( Session::has('date') )
        {

        $date = Session::get('date');


        $milks = Milk::where( 'date', $date )->orderby('created_at','DESC')->get();

        $cows = Cow::where( 'active', 1 )->get();

        return view('MilkViews.milk.create-milk')->withDate($date)->withMilks($milks)->withCows($cows);

        }
        else
        {
            Session::flash('error', 'You Must Select Milk Entry Date First !');

            return redirect::route('milk.date.get');
        }
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

            'cow_id' => 'required | numeric ',
            'date'   => 'required | date ',
            'morning' => 'required | numeric ',
            'evening' => 'required | numeric ',

            ) );

        $is_exists = Milk::where( ['date' => $request->date, 'cow_id'=> $request->cow_id ] )->count();

        if( $is_exists > 0 )
        {
            Session::flash('error', 'Record of that cow was already added !');

            return redirect::route('milk.create');

        }

        $milk = new Milk;

        $milk->cow_id = $request->cow_id;
        $milk->date   = $request->date;
        $milk->morning = $request->morning;
        $milk->evening = $request->evening;

        $milk->save();

        Session::flash('success', 'Milk Record Added Successfully !');
        
        return redirect::route('milk.create');
        
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $milk = Milk::find($id);

        return view('MilkViews.milk.edit-milk')->withMilk($milk);

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

            
            'date'   => 'required | date ',
            'morning' => 'required | numeric ',
            'evening' => 'required | numeric ',

            ) );

        $milk = Milk::find($id);

       
        $milk->morning = $request->morning;
        $milk->evening = $request->evening;

        $milk->save();

        Session::flash('success','Record updaed successfully !');

        return redirect::route('milk.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $milk = Milk::find($id);

        $milk->delete();

        Session::flash('success', 'Record Deleted Successfully !');

        return redirect::route('milk.create');
    }
}
