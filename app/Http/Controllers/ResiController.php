<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\FootHead;
use App\Models\Li;
use App\Models\Li2;
use App\Models\LiNav;
use App\Models\Resi;
use Illuminate\Http\Request;

class ResiController extends Controller
{
    public function index(){
        $dbHome=Resi::all();
        $dbLis=Li::all();
        $dbLis2=Li2::all();
    
        $dbFooter = Footer::all();
        $dbLinav = LiNav::all();
        $dbnavfoot = FootHead::all();
        return view('welcome',compact('dbHome', 'dbnavfoot', 'dbFooter','dbLis','dbLis2'));
        // return view('welcome',compact('dbHome', 'dbnavfoot','dbLis','dbLis2'));
    }
    public function contact(){
        $databaseContact = Contact:: all();
        $dbnavfoot = FootHead::all();
        // $dbFooter = Footer::all();
        // return view('pages.contact',compact('databaseContact', 'dbnavfoot', 'dbFooter'));
        return view('pages.contact',compact('databaseContact', 'dbnavfoot'));
    }
    public function articles(){
        $dbArticle= Article::all();
        $dbnavfoot = FootHead::all();
        // $dbFooter = Footer::all();
        return view('pages.articles',compact('dbArticle', 'dbnavfoot' ));
    }




    // BACKOFFICE

    
}
