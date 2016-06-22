<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\CowSeller;

use Session;

use Redirect;

class cowsellerController extends Controller
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
        $cowsellers = CowSeller::all();

        return view('cowseller.index-cowseller')->withCowsellers($cowsellers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view( 'cowseller.create-cowseller' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //validating data

        $this->validate( $request , array(

                'name'        => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'img'         => 'image | max:500 | min:50',
                'mobile'      => 'required | digits:11 | unique:cow_sellers,mobile',
                'email'       => 'email | unique:cow_sellers,email',
                'address'     => 'required | min:10 |',
                'account_no'  => 'numeric | unique:cow_sellers,account_no',
                'bank_name'   => 'regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'branch_name' => 'regex:/^[\pL\s\-]+$/u | Min:3 | max:100',


            ) );

        $cowseller = new CowSeller;

        $cowseller->name        = $request->name;
        $cowseller->mobile      = $request->mobile;
        $cowseller->email       = $request->email;
        $cowseller->address     = $request->address;
        $cowseller->account_no  = $request->account_no;
        $cowseller->bank_name   = $request->bank_name;
        $cowseller->branch_name = $request->branch_name;

        if( $request->hasFile('img') ){

            $img = $request->file('img');

            $original_name = $img->getClientOriginalName();

            $img_name = time().'-'.$original_name;

            $img->move('images' , $img_name);

            $img_path = '/images/'.$img_name;

            $cowseller->img = $img_path;
        }else{
            $cowseller->img = '/images/avatar-cowseller.png';
        }

         $cowseller->save();

        Session::flash( 'success', 'New Cow Seller has been saved successfully!' );

        return view( 'customer.edit-customer' )->with( 'customer', $customer );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cowseller = CowSeller::find($id);

        return view('cowseller.show-cowseller')->withCowseller($cowseller);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cowseller = CowSeller::find($id);
        return view( 'cowseller.edit-cowseller' )->withCowseller($cowseller);

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
          //validating data

        $this->validate( $request , array(

                'name'        => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'img'         => 'image | max:500 | min:50',
                'mobile'      => 'required | digits:11 | unique:cow_sellers,mobile,'.$id,
                'email'       => 'email | unique:cow_sellers,email,'.$id,
                'address'     => 'required | min:10 |',
                'account_no'  => 'numeric | unique:cow_sellers,account_no,'.$id,
                'bank_name'   => 'regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'branch_name' => 'regex:/^[\pL\s\-]+$/u | Min:3 | max:100',


            ) );

        $cowseller = CowSeller::find($id);

        $cowseller->name        = $request->name;
        $cowseller->mobile      = $request->mobile;
        $cowseller->email       = $request->email;
        $cowseller->address     = $request->address;
        $cowseller->account_no  = $request->account_no;
        $cowseller->bank_name   = $request->bank_name;
        $cowseller->branch_name = $request->branch_name;

        if( $request->hasFile('img') ){

            $img = $request->file('img');

            $original_name = $img->getClientOriginalName();

            $img_name = time().'-'.$original_name;

            $img->move('images' , $img_name);

            $img_path = '/images/'.$img_name;

            $cowseller->img = $img_path;
        }else{
            $cowseller->img = '/images/avatar-cowseller.png';
        }

         $cowseller->save();

        Session::flash( 'success', 'New Cow Seller has been saved successfully!' );

        return view( 'cowseller.edit-cowseller' )->with( 'cowseller', $cowseller );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cowseller = CowSeller::find($id);

        $cowseller->delete();

        Session::flash('success', 'Cow Seller Has Been Deleted Successfully !');

        return Redirect::route('cowseller.index');
    }
}
