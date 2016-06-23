<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Supplier;

use Session;

use Redirect;

class supplierController extends Controller
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
        $suppliers = Supplier::all();

        return view( 'supplier.index-supplier' )->with( 'suppliers', $suppliers );
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view( 'supplier.create-supplier' );
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

                'name'        => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'cat'         => 'required ',
                'img'         => 'image | max:500 | min:50',
                'mobile'      => 'required | digits:11 | unique:suppliers,mobile',
                'additional_mobile_one' => ' digits:11 | unique:suppliers,mobile',
                'additional_mobile_two' => 'digits:11 | unique:suppliers,mobile',
                'email'       => 'required | email | unique:suppliers,email',
                'address'     => 'required | min:10 |',
                'account_no'  => 'required | numeric | unique:suppliers,account_no',
                'bank_name'   => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'branch_name' => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                

            ) );

        //store in database

        $supplier = new Supplier;

        $supplier->name        = $request->name;
        $supplier->cat         = $request->cat;
        $supplier->mobile      = $request->mobile;
        $supplier->additional_mobile_one = $request->additional_mobile_one;
        $supplier->additional_mobile_two = $request->additional_mobile_two;
        $supplier->email       = $request->email;
        $supplier->address     = $request->address;
        $supplier->account_no  = $request->account_no;
        $supplier->bank_name   = $request->bank_name;
        $supplier->branch_name = $request->branch_name;
        
        if( $request->hasFile('img') ){

            $img = $request->file('img');

            $original_name = $img->getClientOriginalName();

            $img_name = time().'-'.$original_name;

            $img->move('images' , $img_name);

            $img_path = '/images/'.$img_name;

            $supplier->img = $img_path;
        }else{
            $supplier->img = '/images/avatar-supplier.png';
        }


        $supplier->save();

        Session::flash( 'success', 'New supplier has been saved successfully!' );

        return Redirect::route( 'supplier.edit', ['id' => $supplier->id] );

        //return view( 'supplier.edit-supplier' )->with( 'supplier', $supplier );
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $supplier = Supplier::find( $id );

        return view( 'supplier.show-supplier' )->with( 'supplier', $supplier );
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $supplier = Supplier::find( $id );

        return view( 'supplier.edit-supplier' )->with( 'supplier', $supplier );
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

                'name'        => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'cat'         => 'required ',
                'img'         => 'image | max:500 | min:50',
                'mobile'      => 'required | digits:11 | unique:suppliers,mobile,'.$id,
                'additional_mobile_one' => ' digits:11 | unique:suppliers,mobile,'.$id,
                'additional_mobile_two' => 'digits:11 | unique:suppliers,mobile,'.$id,
                'email'       => 'required | email | unique:suppliers,email,'.$id,
                'address'     => 'required | min:10 |',
                'account_no'  => 'required | numeric | unique:suppliers,account_no,'.$id,
                'bank_name'   => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'branch_name' => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                

            ) );


        //save data

        $supplier = Supplier::find( $id );

        $supplier->name        = $request->name;
        $supplier->cat        = $request->cat;
        $supplier->mobile      = $request->mobile;
        $supplier->additional_mobile_one = $request->additional_mobile_one;
        $supplier->additional_mobile_two = $request->additional_mobile_two;
        $supplier->email       = $request->email;
        $supplier->address     = $request->address;
        $supplier->account_no  = $request->account_no;
        $supplier->bank_name  = $request->bank_name;
        $supplier->branch_name  = $request->branch_name;
        
        if( $request->hasFile('img') ){

            $img = $request->file('img');

            $original_name = $img->getClientOriginalName();

            $img_name = time().'-'.$original_name;

            $img->move('images' , $img_name);

            $img_path = '/images/'.$img_name;

            $supplier->img = $img_path;
        }else{
            $supplier->img = '/images/avatar-supplier.png';
        }

        $supplier->save();

        Session::flash( 'success' , 'Supplier has been updated successfully!' );

        return Redirect::route( 'supplier.edit', ['id' => $supplier->id] );
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $supplier = Supplier::find( $id );

        $supplier->delete();

        Session::flash('success', 'Supplier Has Been Deleted Successfully !');

        return Redirect::route('supplier.index');
    }






}
