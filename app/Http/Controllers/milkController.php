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

    public function index()
    {
        
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
