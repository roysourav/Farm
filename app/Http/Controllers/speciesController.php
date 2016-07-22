<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Species;

use Session;

use Redirect;

class speciesController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

     /**
     * Display list of species and form to add new species.
     *
     */

    public function getlist()
    {
    	$specieses = Species::all();

    	return view( 'species.index-species' )->withSpecieses($specieses);
    }

    /**
     * Adding new species.
     *
     */

    public function store(Request $request)
    {
    	 //validate data
        $this->validate( $request, array(

                'name'   => 'required | unique:species,name',

            ) );

        //storing data

        $species = new Species;

        $species->name  = $request->name;

        $species->save();

        Session::flash( 'success', 'New Species Added Successfully !' );

        return Redirect::route('species.index');
    }

    /**
     * edit form of species.
     *
     */

    public function edit($id)
    {
        $species = Species::find($id);

        return view('species.edit-species')->withSpecies($species);

    }

    /**
     * update of species.
     *
     */

    public function update(Request $request, $id)
    {
        //validate data
        $this->validate( $request, array(

                'name'  => 'required | unique:species,name,'.$id,

            ) );

        //storing data

        $species = Species::find($id);

        $species->name  = $request->name;

        $species->save();

        Session::flash( 'success', 'Species Updated Successfully !' );

        return Redirect::route('species.index');
    }

    /**
     * destroy of a species.
     *
     */

    public function destroy($id)
    {
        $species = Species::find($id);

        $has_cow = $species->cow;

        if( count( $has_cow ) > 0 ){

            Session::flash( 'error', 'Species already in use, You must delete all cows under that species first !' );
        }else{

            $species->delete();

            Session::flash( 'success', 'Species Deleted Successfully !' );
        }

        

        return Redirect::route('species.index');

    }

}
