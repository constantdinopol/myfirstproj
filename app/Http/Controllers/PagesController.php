<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'DiaBlog: Making Diary and Blogging into one!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = 'About us';
        return view('pages.about')->with('title',$title);
    }

    public function contacts(){
        $title = 'Contact us';
        return view('pages.contacts')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title' => 'Our Services',
            'services' => ['Hmmmm', 'Secret'],
            'error' => 'No services available'
        );
        return view('pages.services')->with($data);
        return view('inc.navbar')->with($data);
    }
};
