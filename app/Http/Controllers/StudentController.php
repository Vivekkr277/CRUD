<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {

        $users = Student::orderBy('name','asc')->get();
       return view('student.index',compact('users'));
   }

   public function edit($id) {
     $users =   Student::find($id);
     return view('student.edit',compact('users'));
   }

   public function update(Request $req) {
            
       $data = Student::find($req->id);
       $data->name = $req->name;
       $data->email = $req->email;
       $data->age = $req->age;
       $data->course = $req->course;
       $data->state = $req->state;
       $data->save();
       return redirect('index');
   }

   public function insert() {
       return view('student.insert');
   }

   public function insertData(Request $req) {
     $data = new Student;
     $data->name = $req->name;
     $data->email = $req->email;
     $data->age = $req->age;
     $data->course = $req->course;
     $data->state = $req->state;
     $data->save();
     return redirect('index');
   }

   public function delete($id) {
       $user =  Student::find($id);
       $user->delete();
       return redirect('index');
     }
}
