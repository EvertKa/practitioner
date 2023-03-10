<?php

namespace App\Controllers;

use App\Core\App;

class PagesController {

    public function home () {

        $tasks = App::get('database')->selectAll('tasks');

        
        return view('index', ['tasks' => $tasks]);        

    }

    public function about () {

        return view('about', ['company' => 'KAK']);

    }

    public function contact () {

        return view('contact');
        
    }

}