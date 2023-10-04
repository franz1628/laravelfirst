<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        $data = User::find(1);
        print_r($data);
    }
}
