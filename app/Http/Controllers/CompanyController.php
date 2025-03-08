<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $employers = Employer::latest()->get();
        return view('company.index', ['employers' => $employers]);
    }

    public function show(Employer $employer)
    {
        return view('company.show', ['employer' => $employer]);
    }
}
