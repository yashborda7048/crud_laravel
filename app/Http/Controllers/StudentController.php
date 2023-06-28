<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    public function index()
    {
        return view('home', [
            'students' => Student::latest()->paginate(4)
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
        return view('home', [
            'Alert' => toast('Successfully added!!', 'success')->autoClose(2000),
            'students' => Student::latest()->paginate(4)
        ]);
    }

    public function edit($id)
    {
        $students = Student::where('id', $id)->first();
        return view('edit', ['student' => $students]);
    }

    public function update(Request $request, $id)
    {
        // validatation 
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'class' => 'required',
            'phone' => 'required',
            'new_img' => 'mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        $students = Student::where('id', $id)->first();
        if (isset($request->new_img)) {
            //upload image
            $imgName = time() . '.' . $request->new_img->extension();
            $request->new_img->move(public_path('assets/img'), $imgName);
            $students->img = $imgName;
        }

        //upload data
        $students->name = $request->name;
        $students->address = $request->address;
        $students->class = $request->class;
        $students->phone = $request->phone;
        $students->save();
        return back()->withSuccess('Edit Successfully !!!');
    }

    public function destroy($id)
    {
        $students = Student::where('id', $id)->first();
        $students->delete();
        return back()->withSuccess('Delete Successfully !!!');
    }

    public function delete()
    {
        return view('delete');
    }
}