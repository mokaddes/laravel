<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Depertment;
use App\Teacher;

class DepertmentController extends Controller
{
    public function index()
    {
        $depertments = Depertment::all();
        return view('home',compact('depertments'));
    }
    
    public function show(Depertment $depertments){
        // $post = Post::find($id);

        return view('show', compact('$depertments'));
    }
  
}
