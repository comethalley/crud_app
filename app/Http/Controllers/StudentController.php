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

        $data = [
            'students' => DB::table('students')->orderBy('created_at', 'desc')->paginate(10)
        ];

        return view('students.index' , $data);
    }

    public function show($id){
        $data = Students::findOrFail($id);
        
        return view('students.edit', ['student' => $data]);
        
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

    public function update(Request $request, Students $student){

        $validated = $request->validate([
            "first_name" => ['required', 'min:4'],
            "last_name" => ['required', 'min:4'],
            "gender" => ['required'],
            "age" => ['required', 'min:1'],
            "email" => ['required', 'email'],
        ]);

        $student->update($validated);

        return back()->with('message', 'Data was successfully updated');
    }

    public function destroy(Request $request, Students $student){
        $student->delete();
        
        return redirect('/')->with('message', 'Data was successfully deleted');
    }
}
