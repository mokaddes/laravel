<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $fillable = ['name', 'Depertment_id'];
    
    public static function teachers($id){
        return Teacher::where('state_id', '=', $id)->get();
    }
}
