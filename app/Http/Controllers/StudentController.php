<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('home', [
            'students' => Student::get()
        ]);
    }

    public function store(Request $request)
    {
        // validatation 
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'class' => 'required',
            'phone' => 'required',
            'new_img' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        //upload image
        $imgName = time() . '.' . $request->new_img->extension();
        $request->new_img->move(public_path('assets/img'), $imgName);

        //upload data
        $students = new Student;
        $students->name = $request->name;
        $students->address = $request->address;
        $students->class = $request->class;
        $students->phone = $request->phone;
        $students->img = $imgName;
        $students->save();
        return back()->withSuccess('Add Successfully !!!');
    }

    public function edit($id)
    {
        $students = Student::where('id', $id)->first();

        return view('edit', ['student' => $students]);
    }


    public function update(Request $request, $id)
    {
        dd($request->all());
        // return view('update');
    }
    public function create()
    {
        return view('add');
    }

    public function delete()
    {
        return view('delete');
    }
}