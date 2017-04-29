<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Depertment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depertments = Depertment::all();
        return view('home',compact('depertments'));
    }
    
//    public function getTeachers(Request $request, $id)
//    {
//        if($request->ajax()){
//            $teachers = Teacher::teachers($id);
//            return response()->json($teachers);
//        }
//    }
}
