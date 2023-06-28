<?php

namespace App\Http\Controllers;

use App\Models\Twice;
use Illuminate\Http\Request;

class TwiceController extends Controller
{
    public function index(){

        //$data = Students::where( 'age', '>=', '19')->orderBy('first_name', 'asc')->limit(5)->get();
        // $data = DB::table('students')
        //     ->select(DB::raw('count(*) as gender_count, gender'))->groupBy('gender')->get();

        $data = Twice::where('id', 1)->firstOrFail()->get();
        return view('twice.twice' ,['twice' => $data]);
    }
}
