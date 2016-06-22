<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Employee;

use App\Supplier;

class welcomeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        $suppliers = Supplier::all();

        return view( 'welcome' )->with( 'employees', $employees )
        						->with( 'suppliers', $suppliers );
    }
}
