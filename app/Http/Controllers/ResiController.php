<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\FootHead;
use App\Models\LiNav;
use App\Models\Resi;
use Illuminate\Http\Request;

class ResiController extends Controller
{
    public function index(){
        $dbHome=Resi::all();
        $dbFooter = Footer::all();
        $dbLinav = LiNav::all();
        $dbnavfoot = FootHead::all();
        return view('welcome',compact('dbHome', 'dbnavfoot', 'dbFooter', 'dbLinav'));
    }
    public function contact(){
        $databaseContact = Contact:: all();
        $dbnavfoot = FootHead::all();
        $dbFooter = Footer::all();
        return view('pages.contact',compact('databaseContact', 'dbnavfoot', 'dbFooter','dbLinav'));
    }
    public function articles(){
        $dbArticle= Article::all();
        $dbnavfoot = FootHead::all();
        $dbFooter = Footer::all();
        return view('pages.articles',compact('dbArticle', 'dbnavfoot', 'dbFooter','dbLinav'));
    }
            
}
