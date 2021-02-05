<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\FootHead;
use Illuminate\Http\Request;

class ResiController extends Controller
{
    public function index(){
        
        return view('welcome');
    }
    public function contact(){
        $databaseContact = Contact:: all();
        return view('pages.contact',compact('databaseContact'));
    }
    public function articles(){
        return view('pages.articles');
    }
}
