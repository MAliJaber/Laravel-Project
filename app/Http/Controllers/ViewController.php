<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewArrayData()
    {
        $data=[];
        $data['name']='mohammad';
        $data['age']= 26;

        return view('TestArray',$data);
        //return view('TestArray')->with($data);
    }

    public function viewObjectData()
    {
        $obj= new \stdClass();
        $obj-> name='Mohammad obj';
        $obj-> age=26;

        //return view('TestObject',compact('obj'));
        return view('TestObject')->with(compact('obj'));
    }

    public function arrayData()
    {
        $data=['mohammad','Ali'];
        

        return view('directives',$data);
        //return view('TestArray')->with($data);
    }

    public function jArrayData()
    {
        $data=['a'=>'Mohammad','b'=>'26'];

        return view('directives',$data);
        //return view('TestArray')->with($data);
    }
}
