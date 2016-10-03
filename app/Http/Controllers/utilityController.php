<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\AccountModels\Utility;
use Redirect;
use Session;

class utilityController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of utility.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utilities = Utility::all();

        return view( 'AccountViews.utility.index-utility' )->withUtilities($utilities);
    }

  
    /**
     * Store a newly created utility in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //validate data
         $this->validate($request, array(

            'name' => 'required | Min:3 | max:100 | unique:utilities,name',

            ));

         //storing data
         $utility = new Utility;

         $utility->name = $request->name;

         $utility->save();

         Session::flash('success', 'New Utility Added Successfully !');

         return Redirect::route('utility.index');
    }

   

    /**
     * Show the form for editing the specified utility.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $utility = Utility::find($id);

        return view('AccountViews.utility.edit-utility')->withUtility( $utility );
    }

    /**
     * Update the specified utility in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate data
        $this->validate($request, array(

            'name' => 'required | Min:3 | max:100 | unique:utilities,name,'.$id,

            ));

        //update data
        $utility = Utility::find($id);

        $utility->name = $request->name;

        $utility->save();

        Session::flash( 'success', 'Utility has been updated successfully !' );

        return Redirect::route( 'utility.edit', ['id'=>$utility->id] );


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
