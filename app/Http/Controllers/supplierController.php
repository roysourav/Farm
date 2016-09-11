<?php

namespace App\Http\Controllers;

use App\Reproduction;
use Illuminate\Http\Request;
use App\Http\Controllers\Credential\CheckExistenceController;
use App\Http\Requests;
use App\HrmModels\Supplier;
use App\Cow;
use Session;
use Redirect;
use Image;
use Storage;

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

        return view( 'HrmViews.supplier.index-supplier' )->with( 'suppliers', $suppliers );
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view( 'HrmViews.supplier.create-supplier' );
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
                'email'       => 'email | unique:suppliers,email',
                'address'     => 'required | min:10 |',
                'account_name'=> 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'account_no'  => 'required | numeric | unique:suppliers,account_no',
                'bank_name'   => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'branch_name' => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'agreement'   => ' Min:2',
                

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
        $supplier->account_name = $request->account_name;
        $supplier->account_no  = $request->account_no;
        $supplier->bank_name   = $request->bank_name;
        $supplier->branch_name = $request->branch_name;
        $supplier->agreement   = $request->agreement;
        
       //Supplier image upload
        if( $request->hasFile('img') ){

            $img = $request->file('img');

            $original_ext = $img->getClientOriginalExtension();

            $img_name = time().'.'.$original_ext;

            $img_path = 'images/'.$img_name;

            Image::make($img)->resize(150,150)->save( $img_path );

            $supplier->img = $img_path;
        }else{

            $supplier->img = '/images/avater.jpg';
        }


        $supplier->save();

        Session::flash( 'success', 'New supplier has been saved successfully!' );

        return Redirect::route( 'supplier.edit', ['id' => $supplier->id] );

       
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

        return view( 'HrmViews.supplier.show-supplier' )->with( 'supplier', $supplier );
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

        return view( 'HrmViews.supplier.edit-supplier' )->with( 'supplier', $supplier );
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
                'additional_mobile_one' => 'digits:11 | unique:suppliers,mobile,'.$id,
                'additional_mobile_two' => 'digits:11 | unique:suppliers,mobile,'.$id,
                'email'       => 'email | unique:suppliers,email,'.$id,
                'address'     => 'required | min:10 |',
                'account_name'=> 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'account_no'  => 'required | numeric | unique:suppliers,account_no,'.$id,
                'bank_name'   => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'branch_name' => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'agreement'   => ' Min:2',
                

            ) );


        //save data

        $supplier = Supplier::find( $id );

        $supplier->name        = $request->name;
        $supplier->cat         = $request->cat;
        $supplier->mobile      = $request->mobile;
        $supplier->additional_mobile_one = $request->additional_mobile_one;
        $supplier->additional_mobile_two = $request->additional_mobile_two;
        $supplier->email       = $request->email;
        $supplier->address     = $request->address;
        $supplier->account_name = $request->account_name;
        $supplier->account_no  = $request->account_no;
        $supplier->bank_name   = $request->bank_name;
        $supplier->branch_name = $request->branch_name;
        $supplier->agreement   = $request->agreement;
        
        //Supplier image update
            if( $request->hasFile('img') ){

                $img = $request->file('img');

                $original_ext = $img->getClientOriginalExtension();

                $img_name = time().'.'.$original_ext;

                $img_path = 'images/'.$img_name;

                Image::make($img)->resize(150,150)->save( $img_path );

                //delete old image from images folder
                if ( $supplier->img != '/images/avater.jpg' ) {
                   Storage::delete ($supplier->img );
                }
                

                $supplier->img = '/images/'.$img_name;

                
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

           $has_supplier_records = $supplier->cows;

           $has_reproduction_records = $supplier->reproduction;

           if( count( $has_supplier_records )  || count( $has_reproduction_records ) > 0 ){

            Session::flash('error', 'That Supplier is in use. You Must Delete related records First !(e.g. cow,reproduction etc)');
            
          }else{

            //delete supplier image from images folder
            if ( $supplier->img != '/images/avater.jpg' ) {
                   Storage::delete ($supplier->img );
                }

            $supplier->delete();

           Session::flash('success', 'Supplier Has Been Deleted Successfully !');
       }

           return Redirect::route('supplier.index');
        
    }

    }


