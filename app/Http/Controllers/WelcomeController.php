<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello () {
        return 'Hello World';
    }

    // public function greeting () {
    //     return view ('blog.hello', ['name' => 'Reza Kurniawan']);
    // }

    public function greeting () {
        return view ('blog.hello')
        -> with('name', 'Reza Kurniawan')
        -> with('occupation', 'Astronaut');
    }
}
