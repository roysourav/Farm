<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Doctor;

use Session;

use Redirect;

class doctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();

        return view('doctor.index-doctor')->withDoctors( $doctors );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.create-doctor');
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

        $this->validate($request, array(

                'name'        => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'img'         => 'image | max:500 | min:50',
                'mobile'      => 'required | digits:11 | unique:doctors,mobile',
                'email'       => 'required | email | unique:doctors,email',
                'address'     => 'required | min:10 |',
                'account_no'  => 'required | numeric | unique:doctors,account_no',
                'bank_name'   => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'branch_name' => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',

            ) );

        //saving data

        $doctor = new Doctor;

        $doctor->name     = $request->name;
        $doctor->mobile   = $request->mobile;
        $doctor->email    = $request->email;
        $doctor->address  = $request->address;
        $doctor->account_no  = $request->account_no;
        $doctor->bank_name = $request->bank_name;
        $doctor->branch_name = $request->branch_name;

        if( $request->hasFile('img') ){

            $img = $request->file('img');

            $original_name = $img->getClientOriginalName();

            $img_name = time().'-'.$original_name;

            $img->move('images' , $img_name);

            $img_path = '/images/'.$img_name;

            $doctor->img = $img_path;
        }else{
            $doctor->img = '/images/doctor-avatar.png';
        }

        $doctor->save();

        Session::flash('success' , 'New doctor has been saved successfully!');

        return redirect::route( 'doctor.edit', [ 'id' => $doctor->id ] );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = Doctor::find( $id );

        return view( 'doctor.show-doctor' )->withDoctor($doctor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::find( $id );

        return view('doctor.edit-doctor')->withDoctor($doctor);
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

        $this->validate($request, array(

                'name'        => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'img'         => 'image | max:500 | min:50',
                'mobile'      => 'required | digits:11 | unique:doctors,mobile,'.$id,
                'email'       => 'required | email | unique:doctors,email,'.$id,
                'address'     => 'required | min:10 |',
                'account_no'  => 'required | numeric | unique:doctors,account_no,'.$id,
                'bank_name'   => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'branch_name' => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',

            ) );


            $doctor = Doctor::find( $id );

            $doctor->name     = $request->name;
            $doctor->mobile   = $request->mobile;
            $doctor->email    = $request->email;
            $doctor->address  = $request->address;
            $doctor->account_no  = $request->account_no;
            $doctor->bank_name = $request->bank_name;
            $doctor->branch_name = $request->branch_name;

            if( $request->hasFile('img') ){

            $img = $request->file('img');

            $original_name = $img->getClientOriginalName();

            $img_name = time().'-'.$original_name;

            $img->move('images' , $img_name);

            $img_path = '/images/'.$img_name;

            $doctor->img = $img_path;
        }else{
            $doctor->img = '/images/doctor-avatar.png';
        }


            $doctor->save();

            Session::flash( 'success', 'Doctor Info. has been updated successfully!' );

            return Redirect::route( 'doctor.edit', [ 'id' => $doctor->id ] );



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find( $id );

        $doctor->delete();

        Session::flash('success', 'Doctor Has Been Deleted Successfully !');

        return Redirect::route('doctor.index');
    }
}
