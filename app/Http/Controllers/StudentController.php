<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index(){

        //$data = Students::where( 'age', '>=', '19')->orderBy('first_name', 'asc')->limit(5)->get();
        // $data = DB::table('students')
        //     ->select(DB::raw('count(*) as gender_count, gender'))->groupBy('gender')->get();

        // $data = Students::where('id', 100)->firstOrFail()->get();
        // return view('students.index' ,['students' => $data]);

        return view('students.index');
    }

    public function create(){
        return view('students.create')->with('title', 'Add new');
    }

    public function store(Request $request){
        $validated = $request->validate([
            "first_name" => ['required', 'min:4'],
            "last_name" => ['required', 'min:4'],
            "gender" => ['required'],
            "age" => ['required', 'min:1'],
            "email" => ['required', 'email', Rule::unique('students','email')],
        ]);


        Students::create($validated);

        return redirect('/')->with('message', 'New Student was added successfully');

    }
}
