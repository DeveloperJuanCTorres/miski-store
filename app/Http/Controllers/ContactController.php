<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $company = Company::first();
        return view('contactanos', compact('company'));
    }
}
