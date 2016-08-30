<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\HrmModels\Customer;

use Session;

use Redirect;

class customerController extends Controller
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
        $customers = Customer::all();

        return view(  'HrmViews.customer.index-customer' )->withCustomers($customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'HrmViews.customer.create-customer' );
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
                'mobile'      => 'required | digits:11 | unique:customers,mobile',
                'email'       => 'required | email | unique:customers,email',
                'address'     => 'required | min:10 |',
                'account_no'  => 'required | numeric | unique:customers,account_no',
                'bank_name'   => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'branch_name' => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                

            ) );

        $customer = new Customer;

        $customer->name        = $request->name;
        $customer->mobile      = $request->mobile;
        $customer->email       = $request->email;
        $customer->address     = $request->address;
        $customer->account_no  = $request->account_no;
        $customer->bank_name  = $request->bank_name;
        $customer->branch_name  = $request->branch_name;
        

        $customer->save();

        Session::flash( 'success', 'New customer has been saved successfully!' );

        return view( 'HrmViews.customer.edit-customer' )->with( 'customer', $customer );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $customer = Customer::find($id);

       return view( 'HrmViews.customer.show-customer' )->withCustomer($customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find( $id );

        return view( 'HrmViews.customer.edit-customer' )->with( 'customer', $customer );
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
                'mobile'      => 'required | digits:11 | unique:suppliers,mobile,'.$id,
                'email'       => 'required | email | unique:suppliers,email,'.$id,
                'address'     => 'required | min:10 |',
                'account_no'  => 'required | numeric | unique:suppliers,account_no,'.$id,
                'bank_name'   => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'branch_name' => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
              
            ) );

        //save data

        $customer = Customer::find( $id );

        $customer->name        = $request->name;
        $customer->mobile      = $request->mobile;
        $customer->email       = $request->email;
        $customer->address     = $request->address;
        $customer->account_no  = $request->account_no;
        $customer->bank_name  = $request->bank_name;
        $customer->branch_name  = $request->branch_name;
        

        $customer->save();

        Session::flash( 'success' , 'Customer has been updated successfully!' );

        return view( 'HrmViews.customer.edit-customer' )->with( 'customer', $customer );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);

        $has_dist_record = $customer->distribution;

        if( count( $has_dist_record ) > 0 )
        {
            Session::flash( 'error', 'That Customer already in use, You must delete all records related with that customer first !( e.g. Distribution etc)' );
        }else{
            $customer->delete();

             Session::flash( 'success', 'Customer Has Been Deleted Successfully !' );
        }

        return Redirect::route('customer.index');
    }
}
