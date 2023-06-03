<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        //upload image
        $imgName = time() . '.' . $request->new_img->extension();
        $request->new_img->move(public_path('assets/img'), $imgName);

        $student = new Student;
        $student->name =  $request->name;
        $student->address =  $request->address;
        $student->class =  $request->class;
        $student->phone =  $request->phone;
        $student->img =  $imgName;
        $student->save();
        return back();
    }

    public function create()
    {
        return view('add');
    }

    public function edit()
    {
        return view('update');
    }
    public function delete()
    {
        return view('delete');
    }
}