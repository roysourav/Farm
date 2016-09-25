<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cow;
use App\CowDead;
use Session;
use Redirect;
use Carbon\Carbon;
use Image;
use Storage;


class cowDeadController extends Controller
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
        $dead_cows = CowDead::all();

        return view( 'cowDead.index-cowDead' )->withDead_cows($dead_cows);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cows = Cow::where( 'active', 1 )->get();

        return view('cowDead.create-cowDead')->withCows($cows);
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
                'date'   => 'required | date | before:'.Carbon::today(),
                'reason' => 'required | min:3 | max:15',
                
            ) );


        $dead_cow = new CowDead;

        $dead_cow->cow_id = $request->cow_id;
        $dead_cow->date   = $request->date;
        $dead_cow->reason = $request->reason;

        $dead_cow->save();

        $cow = Cow::find($dead_cow->cow_id);
        $cow->active = 0;

        $cow->save();

        Session::flash('success', 'Cow Dead Record has been saved successfully!');

        return redirect::route( 'dead-cow.edit',['id'=>$dead_cow->id] );


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $dead_cow = CowDead::find($id);
       
       return view('cowDead.show-cowDead')->withDead_cow($dead_cow);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        
        $dead_cow = CowDead::find($id);

        $cow = Cow::where( 'id', $dead_cow->cow->id )->lists('name', 'id')->toArray();

        return view('cowDead.edit-cowDead')->withDead_cow($dead_cow )->withCow($cow);
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
                'date'   => 'required | date | before:'.Carbon::today(),
                'reason' => 'required | min:3 | max:15',
                
            ) );

        $dead_cow = CowDead::find($id);

        $dead_cow->date   = $request->date;
        $dead_cow->reason = $request->reason;

        $dead_cow->save();

        Session::flash('success', 'Cow Dead Record has been Updated successfully!');

        return redirect::route( 'dead-cow.edit',['id'=>$dead_cow->id] );


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dead_cow = CowDead::find( $id );

        $cow_id = $dead_cow->cow->id;

        $cow = Cow::find( $cow_id );

       $has_reproduction = $cow->reproduction;
       $has_milks = $cow->milks;

      if( count( $has_reproduction ) > 0 || count( $has_milks ) > 0 ){

        Session::flash( 'error', 'Cow already in use, You must delete all records related with that cow first.(e.g. reproduction,milk-record etc.)' );
       }else{

         $cow->vaccines()->detach();
         
         $cow->medicines()->detach();

         $cow->milks()->delete();

         //delete cow image from images folder
        if ( $cow->img != '/images/avater.jpg' ) {
                Storage::delete ($cow->img );
            }

        $dead_cow->delete();

        $cow->delete();

        Session::flash( 'success', 'Cow Deleted Successfully !' );

       
       }

        return Redirect::route('dead-cow.index');

    }


}

