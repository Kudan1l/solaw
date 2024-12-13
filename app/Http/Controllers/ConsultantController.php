<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultant;
use App\Models\Specialties;

class ConsultantController extends Controller
{
    public function ConsultantsMenu(){
        $consultants = Consultant::with('specialties')->get();
        return view('consultant.consultant_menu', compact('consultants'));
    }

    public function ConsultantDetail($id) {
        $consultants = Consultant::with('specialties')->findOrFail($id);
        return view('consultant.consultant_detail', compact('consultants'));
    }
}
