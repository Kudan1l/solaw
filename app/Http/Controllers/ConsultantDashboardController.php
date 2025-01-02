<?php

namespace App\Http\Controllers;

use App\Models\Consultant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ConsultantDashboardController extends Controller
{
    public function viewDashboard()
    {
        $user = Auth::user();
        $consultant = Consultant::where('email', $user->email)->first();


        return view('dashboard.consultant.view', compact('user', 'consultant'));
    }

    public function viewForm(Consultant $consultant)
    {
        return view("dashboard.consultant.edit",compact('consultant'));
    }

    public function updateConsultant(Request $request, Consultant $consultant)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|regex:/^0\d+$/',
            'experience_years' => 'required|integer',
            'about' => 'required|string',
            'profile_photo' => 'required|string',
            'education' => 'required|string',
            'location' => 'required|string',
            'password' => 'nullable|min:6',
        ]);

        $consultant->update($request->only(['name', 'email', 'phone_number', 'experience_years', 'about', 'profile_photo', 'education', 'location']));

        $user = User::where('email', $request->email)->first();
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('dashboard.consultant.index')->with('success', 'Consultant updated successfully!');
    }
}
