<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view(view('home.index'));
    }

    public function test($id,$name)
    {
        //verileri dataya yükleyipde ulaşabiliriz.
        $data['id']=$id;
        $data['name']=$name;
        return view('home.test',$data);
        /*
        echo "ID number : ", $id;
        echo "<br> Name : ", $name;
        for($i=1;$i<$id;$i++)
        {
            echo "<br> $i - $name";
        }*/
    }

    public function aboutus()
    {
        return view('home.about');
    }
}
