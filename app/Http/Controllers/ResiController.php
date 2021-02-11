<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\FootHead;
use App\Models\Li;
use App\Models\Li2;
use App\Models\LiNav;
use App\Models\Mail;
use App\Models\Phone;
use App\Models\Resi;
use Illuminate\Http\Request;

class ResiController extends Controller
{
    public function index(){
        $dbHome=Resi::all();
        $dbLis=Li::all();
        $dbLis2=Li2::all();
        $dbNav=LiNav::all();
    
        $dbFooter = Footer::all();
        $dbLinav = LiNav::all();
        $dbnavfoot = FootHead::all();
        return view('welcome',compact('dbHome', 'dbnavfoot', 'dbFooter','dbLis','dbLis2','dbNav'));
        // return view('welcome',compact('dbHome', 'dbnavfoot','dbLis','dbLis2'));
    }
    public function contact(){
        $databaseContact = Contact:: all();
        $dbnavfoot = FootHead::all();
        $dbNav=LiNav::all();
        $dbPhone=Phone::all();
        $dbMail=Mail::all();
        $dbAdress=Adress::all();

        // $dbFooter = Footer::all();
        // return view('pages.contact',compact('databaseContact', 'dbnavfoot', 'dbFooter'));
        return view('pages.contact',compact('databaseContact', 'dbnavfoot','dbNav','dbPhone','dbMail','dbAdress'));
    }
    public function articles(){
        $dbNav=LiNav::all();


        $dbArticle= Article::all();
        $dbnavfoot = FootHead::all();
        // $dbFooter = Footer::all();
        return view('pages.articles',compact('dbArticle', 'dbnavfoot','dbNav' ));
    }




    // BACKOFFICE

    
}
