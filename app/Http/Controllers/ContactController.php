<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Taxonomy;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $company = Company::first();
        $categories = Taxonomy::all();
        return view('contactanos', compact('company', 'categories'));
    }
}
