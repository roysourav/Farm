<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\HrmModels\Employee;
use App\HrmModels\Doctor;
use App\HrmModels\Customer;
use App\HrmModels\Supplier;
use App\Cow;
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



}
