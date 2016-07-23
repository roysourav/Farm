<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\StockConsumptionModels\Medicine;

use App\StockConsumptionModels\MedicineCategory;

use Session;

use Redirect;

class medicineController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::all();

        $medicine_categories = MedicineCategory::all();

        return view( 'StockConsumptionViews.medicine.index-medicine' )->withMedicines( $medicines );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicine_categories = MedicineCategory::all();

        return view( 'StockConsumptionViews.medicine.create-medicine' )->withMedicine_categories( $medicine_categories );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validating vata

        $this->validate( $request, array(

                'name'      => 'required | Min:3 | max:100 | unique:medicines,name',
                'cat_id'    => 'required | numeric',
                'cost'      => 'required | numeric',

            ) );

        //storing data

        $medicine = new Medicine;

        $medicine->name     = $request->name;
        $medicine->cat_id   = $request->cat_id;
        $medicine->cost     = $request->cost;

        $medicine->save();

        Session::flash( 'success', 'New Medicine Added Successfully !' );

        return Redirect::route( 'medicine.edit', [ 'id' => $medicine->id ] );


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicine = Medicine::find($id);
        $medicine_categories = MedicineCategory::all();

        return view('StockConsumptionViews.medicine.edit-medicine')->withMedicine($medicine)
                                            ->withMedicine_categories( $medicine_categories );
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
        //validating vata

        $this->validate( $request, array(

                'name'      => 'required | Min:3 | max:100 | unique:medicines,name,'.$id,
                'cat_id'    => 'required | numeric',
                'cost'      => 'required | numeric',

            ) );

        //storing data

        $medicine = Medicine::find( $id );

        $medicine->name     = $request->name;
        $medicine->cat_id   = $request->cat_id;
        $medicine->cost     = $request->cost;

        $medicine->save();

        Session::flash( 'success', 'Medicine has been updated successfully !' );

        return Redirect::route( 'medicine.edit', [ 'id' => $medicine->id ] );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicine = Medicine::find( $id );

        $medicine->delete();

        Session::flash( 'success', 'Medicine has been deleted successfully !' );

        return Redirect::route( 'medicine.index' );


    }
}
