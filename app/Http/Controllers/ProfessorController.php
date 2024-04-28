<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Professor;

class ProfessorController extends Controller
{
    public function index() {

         $users = Professor::orderBy('name','asc')->get();
        return view('professor.index',compact('users'));
    }

    public function edit($id) {
      $users =   Professor::find($id);
      return view('professor.edit',compact('users'));
    }

    public function update(Request $req) {
             
        $data = Professor::find($req->id);
        $data->name = $req->name;
        $data->subject = $req->subject;
        $data->department = $req->department;
        $data->save();
        return redirect('show');
    }

    public function insert() {
        return view('professor.insert');
    }

    public function insertData(Request $req) {
      $data = new Professor;
      $data->name = $req->name;
      $data->subject = $req->subject;
      $data->department = $req->department;
      $data->save();
      return redirect('show');
    }

    public function delete($id) {
        $user =  Professor::find($id);
        $user->delete();
        return redirect('show');
      }
}
