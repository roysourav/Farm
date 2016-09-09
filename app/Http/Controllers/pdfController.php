<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\HrmModels\Employee;
use App\HrmModels\Doctor;
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



}
