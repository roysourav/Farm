<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\HrmModels\Employee;

use Session;
use Carbon\Carbon;
use Redirect;
use Image;
use Storage;

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

                'name'          => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'designation'   => 'required | regex:/^[\pL\s\-]+$/u | max:100',
                'img'           => 'image | max:800 | min:30',
                'date_of_birth' => 'required | date | before:'.Carbon::today()->subYears(18),
                'qualification' => 'required',
                'skill'         => 'required | array',
                'father_name'   => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'mother_name'   => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'nid'           => 'required | Min:10 | max:16 | unique:employees,nid',
                'mobile'        => 'required | digits:11 | unique:employees,mobile',
                'e_mobile'      => 'digits:11 | unique:employees,mobile',
                'email'         => 'email | unique:employees,email',
                'address'       => 'required | min:10 ',
                'p_address'     => 'min:5',
                'reference'     => 'regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'disability'    => 'regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'appointment_date'  => 'required | date | before:'.Carbon::today(),
                'monthly_salary'    => 'required | numeric | min:3',
                'account_name'  => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'account_no'    => 'required | numeric | unique:employees,account_no',
                'bank_name'     => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'branch_name'   => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',

            ) );

       //array skill multi-select field to string
       
        $skills = implode(',', $request->skill);

        //store in database

        $employee = new Employee;

        $employee->name             = $request->name;
        $employee->designation      = $request->designation;
        $employee->date_of_birth    = $request->date_of_birth;
        $employee->qualification    = $request->qualification;
        $employee->skill            = $skills;
        $employee->father_name      = $request->father_name;
        $employee->mother_name      = $request->mother_name;
        $employee->nid              = $request->nid;
        $employee->mobile           = $request->mobile;
        $employee->e_mobile         = $request->e_mobile;
        $employee->email            = $request->email;
        $employee->address          = $request->address;
        $employee->p_address        = $request->p_address;
        $employee->reference        = $request->reference;
        $employee->disability       = $request->disability;
        $employee->appointment_date = $request->appointment_date;
        $employee->monthly_salary   = $request->monthly_salary;
        $employee->account_name     = $request->account_name;
        $employee->account_no       = $request->account_no;
        $employee->bank_name        = $request->bank_name;
        $employee->branch_name      = $request->branch_name;

        //employee image upload
        if( $request->hasFile('img') ){

            $img = $request->file('img');

            $original_ext = $img->getClientOriginalExtension();

            $img_name = time().'.'.$original_ext;

            $img_path = 'images/'.$img_name;

            Image::make($img)->resize(150,150)->save( $img_path );

            $employee->img = $img_path;
        }else{

            $employee->img = '/images/avater.jpg';
        }

        $employee->save();

        Session::flash( 'success', 'New employee has been saved successfully!' );

        return Redirect::route( 'employee.edit', ['id' => $employee->id] );
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

        $skills = explode(',', $employee->skill);

        return view( 'HrmViews.employee.show-employee' )->with( 'employee', $employee )->withSkills( $skills );
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
         $skills = explode(',', $employee->skill);

        return view( 'HrmViews.employee.edit-employee' )->with( 'employee', $employee )->withSkills( $skills );
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

                'name'          => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'designation'   => 'required | regex:/^[\pL\s\-]+$/u | max:100',
                'img'           => 'image | max:800 | min:30',
                'date_of_birth' => 'required | date | before:'.Carbon::today()->subYears(18),
                'qualification' => 'required',
                'skill'         => 'required',
                'father_name'   => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'mother_name'   => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'nid'           => 'required | Min:10 | max:16  | unique:employees,nid,'.$id,
                'mobile'        => 'required | digits:11 | unique:employees,mobile,'.$id,
                'e_mobile'      => 'digits:11 | unique:employees,mobile,'.$id,
                'email'         => 'email | unique:employees,email,'.$id,
                'address'       => 'required | min:10 |',
                'p_address'     => 'min:5',
                'reference'     => 'regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'disability'    => 'regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'appointment_date'  => 'required | date | before:'.Carbon::today(),
                'monthly_salary'    => 'required | numeric | min:3',
                'account_name'  => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'account_no'    => 'required | numeric | unique:employees,account_no,'.$id,
                'bank_name'     => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'branch_name'   => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
             

            ) ); 

            //array skill multi-select field to string
       
            $skills = implode(',', $request->skill);

            $employee = Employee::find( $id );

            $employee->name             = $request->name;
            $employee->designation      = $request->designation;
            $employee->date_of_birth    = $request->date_of_birth;
            $employee->qualification    = $request->qualification;
            $employee->skill            = $skills;
            $employee->father_name      = $request->father_name;
            $employee->mother_name      = $request->mother_name;
            $employee->nid              = $request->nid;
            $employee->mobile           = $request->mobile;
            $employee->e_mobile         = $request->e_mobile;
            $employee->email            = $request->email;
            $employee->address          = $request->address;
            $employee->p_address        = $request->p_address;
            $employee->reference        = $request->reference;
            $employee->disability       = $request->disability;
            $employee->appointment_date = $request->appointment_date;
            $employee->monthly_salary   = $request->monthly_salary;
            $employee->account_name     = $request->account_name;
            $employee->account_no       = $request->account_no;
            $employee->bank_name        = $request->bank_name;
            $employee->branch_name      = $request->branch_name;

            //employee image upload
        if( $request->hasFile('img') ){

            $img = $request->file('img');

            $original_ext = $img->getClientOriginalExtension();

            $img_name = time().'.'.$original_ext;

            $img_path = 'images/'.$img_name;

            Image::make($img)->resize(150,150)->save( $img_path );
            //delete old image from images folder
            if ( $employee->img != '/images/avater.jpg' ) {
                   Storage::delete ($employee->img );
                }

            $employee->img = '/images/'.$img_name;

            
        }

            $employee->save();

            Session::flash( 'success' , 'Employee has been updated successfully!' );

            return Redirect::route(  'employee.edit', ['id' => $employee->id]  );

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

        //delete employee image from images folder
        if ( $employee->img != '/images/avater.jpg' ) {
                Storage::delete ($employee->img );
            }

        $employee->delete();

        Session::flash('success', 'Employee Has Been Deleted Successfully !');

        return Redirect::route('employee.index');
    }


    
}
