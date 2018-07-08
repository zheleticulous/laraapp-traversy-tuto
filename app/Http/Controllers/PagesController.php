<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to my lsapp page';
        return view('pages.index')->with('title', $title);

//return view('pages.index', compact('title')); 
    }

    public function about() {
        $title = 'About us';
        return view('pages.about')->with('title', $title);
        //return view('pages.about');
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
