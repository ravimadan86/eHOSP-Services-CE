<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;

class DiagnosisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('services.', [
            'title' => 'eHOSP - Diseases Diagnosis'
        ]);
    }
}
