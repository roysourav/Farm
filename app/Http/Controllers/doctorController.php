<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Credential\CheckExistenceController;
use App\Http\Requests;
use App\HrmModels\Doctor;
use App\Reproduction;
use Session;
use Redirect;
use Image;
use Storage;

class doctorController extends Controller
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
        $doctors = Doctor::all();

        return view('HrmViews.doctor.index-doctor')->withDoctors( $doctors );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HrmViews.doctor.create-doctor');
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
                'img'         => 'image | max:800 | min:30',
                'mobile'      => 'required | digits:11 | unique:doctors,mobile',
                'email'       => 'required | email | unique:doctors,email',
                'address'     => 'required | min:10 |',
                'qualification' => 'required',
                's_status'    => 'required | regex:/^[\pL\s\-]+$/u',
                'account_name'  => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
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
        $doctor->qualification  = $request->qualification;
        $doctor->s_status       = $request->s_status;
        $doctor->account_name   = $request->account_name;
        $doctor->account_no     = $request->account_no;
        $doctor->bank_name      = $request->bank_name;
        $doctor->branch_name    = $request->branch_name;

        
         //Doctor image upload
        if( $request->hasFile('img') ){

            $img = $request->file('img');

            $original_ext = $img->getClientOriginalExtension();

            $img_name = time().'.'.$original_ext;

            $img_path = 'images/'.$img_name;

            Image::make($img)->resize(150,150)->save( $img_path );

            $doctor->img = $img_path;
        }else{

            $doctor->img = '/images/avater.jpg';
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

        return view( 'HrmViews.doctor.show-doctor' )->withDoctor($doctor);
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

        return view('HrmViews.doctor.edit-doctor')->withDoctor($doctor);
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
                'img'         => 'image | max:800 | min:30',
                'mobile'      => 'required | digits:11 | unique:doctors,mobile,'.$id,
                'email'       => 'required | email | unique:doctors,email,'.$id,
                'address'     => 'required | min:10 |',
                'qualification' => 'required',
                's_status'    => 'required | regex:/^[\pL\s\-]+$/u',
                'account_no'  => 'required | numeric | unique:doctors,account_no,'.$id,
                'bank_name'   => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',
                'branch_name' => 'required | regex:/^[\pL\s\-]+$/u | Min:3 | max:100',

            ) );


            $doctor = Doctor::find( $id );

            $doctor->name     = $request->name;
            $doctor->mobile   = $request->mobile;
            $doctor->email    = $request->email;
            $doctor->address  = $request->address;
            $doctor->qualification  = $request->qualification;
            $doctor->s_status       = $request->s_status;
            $doctor->account_name   = $request->account_name;
            $doctor->account_no     = $request->account_no;
            $doctor->bank_name      = $request->bank_name;
            $doctor->branch_name    = $request->branch_name;

                //Doctor image update
            if( $request->hasFile('img') ){

                $img = $request->file('img');

                $original_ext = $img->getClientOriginalExtension();

                $img_name = time().'.'.$original_ext;

                $img_path = 'images/'.$img_name;

                Image::make($img)->resize(150,150)->save( $img_path );
                //delete old image from images folder
                if ( $doctor->img != '/images/avater.jpg' ) {
                   Storage::delete ($doctor->img );
                }

                $doctor->img = '/images/'.$img_name;

                
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

        $has_reproduction = $doctor->reproduction;

        if( count( $has_reproduction ) > 0 ){

            Session::flash( 'error', 'That Doctor already in use, You must delete all records related with that doctor first !( e.g. reproduction etc)' );
        }else{

             //delete doctor image from images folder
            if ( $doctor->img != '/images/avater.jpg' ) {
                   Storage::delete ($doctor->img );
                }

            $doctor->delete();

            Session::flash( 'success', 'Doctor deleted successfully !' );
        }

        return Redirect::route('doctor.index');

    }
}
