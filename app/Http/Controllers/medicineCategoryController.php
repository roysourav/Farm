<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\StockConsumptionModels\MedicineCategory;

use Session;

use Redirect;

class medicineCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     /**
     * Display list of species and form to add new species.
     *
     */

    public function index()
    {
    	$medicine_categories = MedicineCategory::all();

    	return view( 'StockConsumptionViews.medicine-category.index-medicine-category' )->withMedicine_categories($medicine_categories);
    }

    /**
     * Adding new category.
     *
     */

    public function store(Request $request)
    {
    	 //validate data
        $this->validate( $request, array(

                'name' => 'required | Min:3 | max:100 | unique:medicine_categories,name',

            ) );

        //storing data

        $medicine_category = new MedicineCategory;

        $medicine_category->name  = $request->name;

        $medicine_category->save();

        Session::flash( 'success', 'New Medicine Category Added Successfully !' );

        return Redirect::route('medicine-category.index');
    }


    /**
     * edit form of species.
     *
     */

    public function edit($id)
    {
        $medicine_category = MedicineCategory::find($id);

        return view('StockConsumptionViews.medicine-category.edit-medicine-category')->withMedicine_category($medicine_category);

    }

    /**
     * Update of medicine category.
     *
     */

    public function update(Request $request,$id)
    {
    	$this->validate($request, array(

    		'name' => 'required | Min:3 | max:100 | unique:medicine_categories,name,'.$id,

    		));


    	$medicine_category = MedicineCategory::find($id);

    	$medicine_category->name = $request->name;

    	$medicine_category->save();

    	Session::flash( 'success', 'Medicine category has been updated successfully !' );

    	return Redirect::route( 'medicine-category.edit', [ 'id' => $medicine_category->id ] );
    }


    /**
     * Delete of medicine category.
     *
     */

    public function destroy($id)
    {
    	$medicine_category = MedicineCategory::find($id);

        $has_medicine = $medicine_category->medicines;

        if ( count( $has_medicine ) > 0 ) {
            
            Session::flash('error', 'That medicine category is in use, you need to delete associates medicine first !');
        }else{
            $medicine_category->delete();

            Session::flash('success', 'Medicine category has been deleted successfully !');
        }

    	

    	return Redirect::route( 'medicine-category.index' );
    }

}
