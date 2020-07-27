<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class User extends Controller
{
    //
    function submit(Request $req)
    {
        $req->session()->flash('data','Your respond has been submited');
 
        return redirect('/');
    }
}
 
