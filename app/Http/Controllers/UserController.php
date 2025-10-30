<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserAdd(){
        return view('pages.user.add');
    }





    public function UserList(){
        return view('pages.user.list');
    }






    public function UserGroup(){
        return view('pages.user.group');
    }




}
