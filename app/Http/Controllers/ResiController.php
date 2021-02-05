<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Contact;
use App\Models\FootHead;
use App\Models\Resi;
use Illuminate\Http\Request;

class ResiController extends Controller
{
    public function index(){
        $dbHome=Resi::all();
        return view('welcome',compact('dbHome'));
    }
    public function contact(){
        $databaseContact = Contact:: all();
        return view('pages.contact',compact('databaseContact'));
    }
    public function articles(){
        $dbArticle= Article::all();
        return view('pages.articles',compact('dbArticle'));
    }
}
