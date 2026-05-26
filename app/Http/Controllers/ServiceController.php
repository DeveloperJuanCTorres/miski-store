<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $company = Company::first();
        return view('servicios', compact('company'));
    }
}
