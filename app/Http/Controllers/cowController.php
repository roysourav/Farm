<?php

namespace App\Http\Controllers;

use App\Reproduction;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cow;
use App\HrmModels\Supplier;
use App\Species;
use Session;
use Redirect;
use Carbon\Carbon;
use App\Http\Controllers\Credential\CheckExistenceController;
use Image;
use Storage;

class cowController extends Controller
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
        $cows = Cow::where('active', 1)->get();

        return view('cow.index-cow')->with('cows', $cows);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $suppliers = Supplier::where('cat', '=','cow')->get();
       
       $species = Species::all();


       return view( 'cow.create-cow' )->withSuppliers($suppliers)->withSpecies($species);

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

                'name'          => 'required |  Min:3 | max:100 | unique:cows,name',
                'sex'           => 'required | string' ,
                'color'         => 'required | string' ,
                'img'           => 'image | max:800 | min:30',
                'date_of_birth' => 'required | date | before:'.Carbon::today(),
                'species_id'    => 'required | numeric',
                'percentage'    => 'required | numeric | between:0,100',
                'weight'        => 'required | digits_between:2,3',
                'significant_sign' => 'regex:/^[\pL\s\-]+$/u',
                'price'            => 'required | digits_between:4,6',
                'date_of_purchase' => 'required | date | before:'.Carbon::today(),
                'supplier_id'      => 'required | numeric',
                'milking_channels' => 'required | digits:1',
                'date_of_milking'  => 'date | before:'.Carbon::today(),
                'date_of_dryness'  => 'date | before:'.Carbon::today(),
                'disease'          => 'regex:/^[\pL\s\-]+$/u',

                
            ) );

        //store in database

        $cow = new Cow;

        $cow->name             = $request->name;
        $cow->sex              = $request->sex;
        $cow->color            = $request->color;
        $cow->date_of_birth    = $request->date_of_birth;
        $cow->species_id       = $request->species_id;
        $cow->percentage       = $request->percentage;
        $cow->weight           = $request->weight;
        $cow->significant_sign = $request->significant_sign;
        $cow->price            = $request->price;
        $cow->date_of_purchase = $request->date_of_purchase;
        $cow->supplier_id      = $request->supplier_id;
        $cow->milking_channels = $request->milking_channels;
        $cow->date_of_milking  = $request->date_of_milking;
        $cow->date_of_dryness  = $request->date_of_dryness;
        $cow->disease          = $request->disease;
        $cow->active          = 1;

        //cow image upload
        if( $request->hasFile('img') ){

            $img = $request->file('img');

            $original_ext = $img->getClientOriginalExtension();

            $img_name = time().'.'.$original_ext;

            $img_path = 'images/'.$img_name;

            Image::make($img)->resize(150,150)->save( $img_path );

            $cow->img = $img_path;
        }else{

            $cow->img = '/images/avater.jpg';
        }

        $cow->save();

        Session::flash( 'success', 'New cow has been saved successfully!' );

        return Redirect::route( 'cow.edit', ['id'=> $cow->id] );



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cow = Cow::find($id);

        return view( 'cow.show-cow' )->withCow($cow);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cow = Cow::find($id);

        $suppliers = Supplier::where('cat', '=','cow')->lists('name','id');

        $species = Species::all()->lists( 'name', 'id' )->toArray();

        return view('cow.edit-cow')->withCow($cow)->withSuppliers($suppliers)->withSpecies($species);
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

                'name'          => 'required |  Min:3 | max:100 | unique:cows,name,'.$id,
                'sex'           => 'required | string' ,
                'color'         => 'required | string' ,
                'img'           => 'image | max:500 | min:50',
                'date_of_birth' => 'required | date | before:'.Carbon::today(),
                'species_id'    => 'required | numeric',
                'percentage'    => 'required | numeric | between:0,100',
                'weight'        => 'required | digits_between:2,3',
                'significant_sign' => 'regex:/^[\pL\s\-]+$/u',
                'price'         => 'required | digits_between:4,6',
                'date_of_purchase' => 'required | date | before:'.Carbon::today(),
                'supplier_id'     => 'required | numeric',
                'milking_channels' => 'required | digits:1',
                'date_of_milking' => 'date | before:'.Carbon::today(),
                'date_of_dryness' => 'date | before:'.Carbon::today(),
                'disease'       => 'regex:/^[\pL\s\-]+$/u',
                
            ) );

        //updating data

        $cow = Cow::find($id);

        $cow->name             = $request->name;
        $cow->sex              = $request->sex;
        $cow->color            = $request->color;
        $cow->date_of_birth    = $request->date_of_birth;
        $cow->species_id       = $request->species_id;
        $cow->percentage       = $request->percentage;
        $cow->weight           = $request->weight;
        $cow->significant_sign = $request->significant_sign;
        $cow->price            = $request->price;
        $cow->date_of_purchase = $request->date_of_purchase;
        $cow->supplier_id      = $request->supplier_id;
        $cow->milking_channels = $request->milking_channels;
        $cow->date_of_milking  = $request->date_of_milking;
        $cow->date_of_dryness  = $request->date_of_dryness;
        $cow->disease          = $request->disease;

        //cow image upload
        if( $request->hasFile('img') ){

            $img = $request->file('img');

            $original_ext = $img->getClientOriginalExtension();

            $img_name = time().'.'.$original_ext;

            $img_path = 'images/'.$img_name;

            Image::make($img)->resize(150,150)->save( $img_path );
            //delete old image from images folder
            if ( $cow->img != '/images/avater.jpg' ) {
                   Storage::delete ($cow->img );
                }

            $cow->img = '/images/'.$img_name; 

        }

        $cow->save();

        Session::flash( 'success' , 'Cow Info. has been updated successfully!' );

        return Redirect::route( 'cow.edit' ,['id'=>$cow->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $cow = Cow::find( $id );

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

         $cow->delete();

         Session::flash( 'success', 'Cow Deleted Successfully !' );
       }


       return Redirect::route('cow.index');
    }
}
