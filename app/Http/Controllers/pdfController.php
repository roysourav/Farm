<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\HrmModels\Employee;
use App\HrmModels\Doctor;
use App\HrmModels\Customer;
use App\HrmModels\Supplier;
use App\Cow;
use App\CowDead;
use App\CowSell;
use App\Reproduction;
use App\StockConsumptionModels\Vaccine;
use App\StockConsumptionModels\Medicine;
use App\MilkModels\Milk;
use App\MilkModels\Distribution;
use PDF;

class pdfController extends Controller
{
    public function employeeList()
    {	
    	$employees = Employee::all();

    	$pdf = PDF::loadview('PdfViews.employee.list-employee',['employees' =>  $employees] )->setPaper('a4', 'landscape');
    	return $pdf->download('employees.pdf');
    }

    public function employeeShow($id)
    {
    	$employee = Employee::find($id);

    	//return view('PdfViews.employee.show-employee')->withEmployee($employee);

    	$pdf = PDF::loadview('PdfViews.employee.show-employee',['employee' =>  $employee] )->setPaper('a4', 'portrait');
    	return $pdf->download('employee.pdf');
    }




    public function doctorList()
    {   
        $doctors = Doctor::all();

        $pdf = PDF::loadview('PdfViews.doctor.list-doctor',['doctors' =>  $doctors] )->setPaper('a4', 'landscape');
        return $pdf->download('doctors.pdf');
    }

    public function doctorShow($id)
    {
        $doctor = Doctor::find($id);

        $pdf = PDF::loadview('PdfViews.doctor.show-doctor',['doctor' =>  $doctor] )->setPaper('a4', 'portrait');
        return $pdf->download('doctor.pdf');
    }




    public function customerList()
    {   
        $customers = Customer::all();

        $pdf = PDF::loadview('PdfViews.customer.list-customer',['customers' =>  $customers] )->setPaper('a4', 'landscape');
        return $pdf->download('customers.pdf');
    }

    public function customerShow($id)
    {
        $customer = Customer::find($id);

        $pdf = PDF::loadview('PdfViews.customer.show-customer',['customer' =>  $customer] )->setPaper('a4', 'portrait');
        return $pdf->download('customer.pdf');
    }




    public function supplierList()
    {   
        $suppliers = Supplier::all();

        $pdf = PDF::loadview('PdfViews.supplier.list-supplier',['suppliers' =>  $suppliers] )->setPaper('a4', 'landscape');
        return $pdf->download('suppliers.pdf');
    }

    public function supplierShow($id)
    {
        $supplier = Supplier::find($id);

        $pdf = PDF::loadview('PdfViews.supplier.show-supplier',['supplier' =>  $supplier] )->setPaper('a4', 'portrait');
        return $pdf->download('supplier.pdf');
    }




    public function cowList()
    {   
        $cows = Cow::all();

        $pdf = PDF::loadview('PdfViews.cow.list-cow',['cows' =>  $cows] )->setPaper('a4', 'landscape');
        return $pdf->download('cows.pdf');
    }

    public function cowShow($id)
    {
        $cow = Cow::find($id);

        $pdf = PDF::loadview('PdfViews.cow.show-cow',['cow' =>  $cow] )->setPaper('a4', 'portrait');
        return $pdf->download('cow.pdf');
    }




    public function deadCowList()
    {   
        $dead_cows = CowDead::all();

        $pdf = PDF::loadview('PdfViews.deadCow.list-deadCow',['dead_cows' =>  $dead_cows] )->setPaper('a4', 'landscape');
        return $pdf->download('dead-cows.pdf');
    }

    public function deadCowShow($id)
    {
        $dead_cow = CowDead::find($id);

        $pdf = PDF::loadview('PdfViews.deadCow.show-deadCow',['dead_cow' =>  $dead_cow] )->setPaper('a4', 'portrait');
        return $pdf->download('dead-cow.pdf');
    }



     public function soldCowList()
    {   
        $sold_cows = CowSell::all();

        $pdf = PDF::loadview('PdfViews.soldCow.list-soldCow',['sold_cows' =>  $sold_cows] )->setPaper('a4', 'landscape');
        return $pdf->download('sold-cows.pdf');
    }

    public function soldCowShow($id)
    {
        $sold_cow = CowSell::find($id);

        $pdf = PDF::loadview('PdfViews.soldCow.show-soldCow',['sold_cow' =>  $sold_cow] )->setPaper('a4', 'portrait');
        return $pdf->download('sold-cow.pdf');
    }



     public function reproductionList()
    {   
        $reproductions = Reproduction::whereHas('cow', function ($query) {
        $query->where('active', 1 );
        })->get();

        $pdf = PDF::loadview('PdfViews.reproduction.list-reproduction',['reproductions' =>  $reproductions] )->setPaper('a4', 'landscape');
        return $pdf->download('reproductions.pdf');
    }

    public function reproductionShow($id)
    {
       $reproduction = Reproduction::find( $id );

        $pdf = PDF::loadview('PdfViews.reproduction.show-reproduction',['reproduction' =>  $reproduction] )->setPaper('a4', 'portrait');
        return $pdf->download('reproduction.pdf');
    }



    public function cowVaccineShow($id)
    {
       $vaccine = Vaccine::find($id);

        $pdf = PDF::loadview('PdfViews.cowVaccine.show-cow-vaccine', ['vaccine' =>  $vaccine] )->setPaper('a4', 'portrait');
        return $pdf->download('cow-vaccine.pdf');
    }



    public function cowMedicineShow($id)
    {
       $medicine = Medicine::find($id);

        $pdf = PDF::loadview('PdfViews.cowMedicine.show-cow-medicine', ['medicine' =>  $medicine] )->setPaper('a4', 'portrait');
        return $pdf->download('cow-medicine.pdf');
    }


     public function milkList()
    {   
        $milks = Milk::orderBy('date', 'DESC')->groupBy('date')->selectRaw('sum(morning) as morning, date')->selectRaw('sum(evening) as evening, date')->take(60)->get();

        $pdf = PDF::loadview('PdfViews.milk.list-milk',['milks' =>  $milks] )->setPaper('a4', 'landscape');
        return $pdf->download('milks.pdf');
    }


     public function milkDetails($date)
    {   
        $date = date('m/d/Y', $date);
        
        $milks = Milk::where('date',$date)->orderBy('cow_id', 'ASC')->get();

         $pdf = PDF::loadview('PdfViews.milk.milk-details', [ 'milks'=>$milks, 'date'=>$date  ] )->setPaper('a4', 'landscape');
        return $pdf->download('milk-details.pdf');
       
    }


    public function distributionList()
    {   
        $distributions = Distribution::orderBy( 'date', 'DESC' )->take(60)->get();

        $pdf = PDF::loadview('PdfViews.distribution.list-distribution',['distributions' =>  $distributions] )->setPaper('a4', 'landscape');
        return $pdf->download('distributions.pdf');
    }


}
