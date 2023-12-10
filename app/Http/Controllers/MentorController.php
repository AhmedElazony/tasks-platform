<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function index()
    {
        return view('app.dashboard');
    }

    public function storeStudent()
    {
        $email = request()->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $mentor = Mentor::where('id', '=', auth()->user()->id)->get()->first();
        $student = Student::where('email' , '=', $email)->get();

        if ($mentor->students->find($student->first()->id) === null) {
            $mentor->students()->attach($student);

            return back()->with('success', 'Student added!');
        }

        return back()->withErrors(['email' => 'Student Already Exists in your classroom!'])->withInput();
    }
}
