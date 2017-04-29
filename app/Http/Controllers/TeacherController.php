<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\teacher;

class TeacherController extends Controller
{
    public function getTeacher($id)
    {
        
        $teachers = Teacher::where('depertment_id', '=', $id)->get();
        $options = array();

        foreach ($teachers as $teacher) {
            $options += array($teacher->id => $teacher->name);
        }

        return Response::json($options);
    }
    
    public function show(Teacher $teachers){
        // $post = Post::find($id);

        return view('show', compact('$teachers'));
    }
}
