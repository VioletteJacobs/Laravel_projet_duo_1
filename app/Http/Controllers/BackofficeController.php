<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use App\Models\Article;
use App\Models\Li;
use App\Models\Mail;
use App\Models\Phone;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function indexBack(){
        $dbLis=Li::all();

        return view('pages.backoffice',compact('dbLis'));
    }

    public function indexBackArticle(){
        $dbArticle=Article::all();

        return view('pages.backArticle',compact('dbArticle'));
    }
    public function indexBackContact(){
        $dbAdress=Adress::all();
        $dbMail=Mail::all();
        $dbPhone=Phone::all();

        return view('pages.backContact',compact('dbAdress','dbMail','dbPhone'));
    }

    public function liStore(Request $request){
        $newEntry= new Li;
        $newEntry->liContent=$request->liContent;

        $newEntry->save();

        return redirect('/backoffice');

    }

    public function articleStore(Request $request){
        $newEntry= new Article;
        $newEntry->titre=$request->titre;
        $newEntry->span=$request->span;
        $newEntry->h4=$request->subtitle;
        $newEntry->p=$request->content;

        $newEntry->save();

        return redirect('/backarticle');

    }
    public function adressStore(Request $request){
        $newEntry= new Adress;
        $newEntry->adresse1=$request->adresse1;
        // $newEntry->adresse2="walou";
        $newEntry->save();

        return redirect('/backcontact');

    }
    public function mailStore(Request $request){
        $newEntry= new Mail();
        $newEntry->mail1=$request->mail1;
        // $newEntry->adresse2="walou";
        $newEntry->save();

        return redirect('/backcontact');

    }
    public function phoneStore(Request $request){
        $newEntry= new Phone();
        $newEntry->phone1=$request->phone1;
        // $newEntry->adresse2="walou";
        $newEntry->save();

        return redirect('/backcontact');

    }
    // show
    public function show($id){
        $show= Article::find($id);
        return view("pages.show", compact('show'));
    }

    
}
