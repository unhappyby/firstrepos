<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\DB;
use App\Events\StudentAdded;


class CreateStudentController extends Controller
{
    public function insertform(){
        return view('stud_create');
    }

    public function insert(Request $request){
        $name = $request->input('stud_name');
        DB::insert('insert into student (Name) values(?)',[$name]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/event">Click Here</a> to go back.';

        //firing an event
        Event::fire(new StudentAdded($name));
    }
}
