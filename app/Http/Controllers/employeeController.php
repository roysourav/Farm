<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\HrmModels\Employee;

use Session;

use Redirect;

class employeeController extends Controller
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
        $employees = Employee::all();

        return view( 'HrmViews.employee.index-employee' )->with( 'employees', $employees );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HrmViews.employee.create-employee');
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
                'designation' => 'required | regex:/^[\pL\s\-]+$/u | max:100',
                'father_name' => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'mother_name' => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'nid'         => 'required | digits:13 | unique:employees,nid',
                'mobile'      => 'required | digits:11 | unique:employees,mobile',
                'email'       => 'email | unique:employees,email',
                'address'     => 'required | min:10 |',
                'appointment_date'  => 'required | date_format:h/i/Y',
                'monthly_salary'      => 'required | numeric | min:3'

            ) );

        //store in database

        $employee = new Employee;

        $employee->name        = $request->name;
        $employee->designation = $request->designation;
        $employee->father_name = $request->father_name;
        $employee->mother_name = $request->mother_name;
        $employee->nid         = $request->nid;
        $employee->mobile      = $request->mobile;
        $employee->email       = $request->email;
        $employee->address     = $request->address;
        $employee->appointment_date = $request->appointment_date;
        $employee->monthly_salary   = $request->monthly_salary;

        $employee->save();

        Session::flash( 'success', 'New employee has been saved successfully!' );

        return view( 'HrmViews.employee.edit-employee' )->with( 'employee', $employee );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find( $id );

        return view( 'HrmViews.employee.show-employee' )->with( 'employee', $employee );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find( $id );

        return view( 'HrmViews.employee.edit-employee' )->with( 'employee', $employee );
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
                'designation' => 'required | regex:/^[\pL\s\-]+$/u | max:100',
                'father_name' => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'mother_name' => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'nid'         => 'required | digits:13 | unique:employees,nid,'.$id,
                'mobile'      => 'required | digits:11 | unique:employees,mobile,'.$id,
                'email'       => 'email | unique:employees,email,'.$id,
                'address'     => 'required | min:10 |',
                'appointment_date'  => 'required | date_format:h/i/Y',
                'monthly_salary'      => 'required | numeric | min:3'


            ) ); 

            $employee = Employee::find( $id );

            $employee->name        = $request->name;
            $employee->designation = $request->designation;
            $employee->father_name = $request->father_name;
            $employee->mother_name = $request->mother_name;
            $employee->nid         = $request->nid;
            $employee->mobile      = $request->mobile;
            $employee->email       = $request->email;
            $employee->address     = $request->address;
            $employee->appointment_date = $request->appointment_date;
            $employee->monthly_salary   = $request->monthly_salary;

            $employee->save();

            Session::flash( 'success' , 'Employee has been updated successfully!' );

            return view( 'HrmViews.employee.edit-employee' )->with( 'employee', $employee );

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $employee = Employee::find( $id );

        $employee->delete();

        Session::flash('success', 'Employee Has Been Deleted Successfully !');

        return Redirect::route('employee.index');
    }


    
}
