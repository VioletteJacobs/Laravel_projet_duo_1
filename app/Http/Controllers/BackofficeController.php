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

        // edit
        public function editadress($id){
            $edit= Adress::find($id);
            return view("pages.editAdress", compact('edit'));
        }
        public function updateadress(Request $request, $id){
            $update = Adress::find($id);
            $update->adresse1=$request->adresse1;
            $update->save();
            return redirect('/backcontact');
        }
        public function editmail($id){
            $edit= Mail::find($id);
            return view("pages.editMail", compact('edit'));
        }
        public function updatemail(Request $request, $id){
            $update = Mail::find($id);
            $update->mail1=$request->mail1;
            $update->save();
            return redirect('/backcontact');
        }
        public function editphone($id){
            $edit= Phone::find($id);
            return view("pages.editPhone", compact('edit'));
        }
        public function updatephone(Request $request, $id){
            $update = Phone::find($id);
            $update->phone1=$request->phone1;
            $update->save();
            return redirect('/backcontact');
        }

    public function liStore(Request $request){
        $newEntry= new Li;
        $newEntry->liContent=$request->liContent;

        $newEntry->save();

        return redirect('/backoffice');

    }
    public function destroyLi($id){
        $destroy= Li::find($id);
        $destroy->delete();
        return redirect()-> back();
    }
    public function editLi($id){
        $edit= Li::find($id);
        return view("pages.editLi", compact('edit'));
    }
    public function updateLi(Request $request, $id){
        $update = Li::find($id);
        $update->liContent=$request->liContent;
        $update->save();
        return redirect('backoffice');
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
    
    public function destroy($id){
        $destroy= Article::find($id);
        $destroy->delete();
        return redirect()-> back();
    }
    
    public function adressStore(Request $request){
        $newEntry= new Adress;
        $newEntry->adresse1=$request->adresse1;
        // $newEntry->adresse2="walou";
        $newEntry->save();

        return redirect('/backcontact');

    }
    public function destroyadress($id){
        $destroy= Adress::find($id);
        $destroy->delete();
        return redirect()-> back();
    }
    public function mailStore(Request $request){
        $newEntry= new Mail();
        $newEntry->mail1=$request->mail1;
        // $newEntry->adresse2="walou";
        $newEntry->save();

        return redirect('/backcontact');

    }
    public function destroymail($id){
        $destroy= Mail::find($id);
        $destroy->delete();
        return redirect()-> back();
    }
    public function phoneStore(Request $request){
        $newEntry= new Phone();
        $newEntry->phone1=$request->phone1;
        // $newEntry->adresse2="walou";
        $newEntry->save();

        return redirect('/backcontact');

    }
    public function destroyphone($id){
        $destroy= Phone::find($id);
        $destroy->delete();
        return redirect()-> back();
    }
    // show
    public function show($id){
        $show= Article::find($id);
        return view("pages.show", compact('show'));
    }
    // edit
    public function edit($id){
        $edit= Article::find($id);
        return view("pages.edit", compact('edit'));
    }
    public function update(Request $request, $id){
        $update = Article::find($id);
        $update->titre=$request->titre;
        $update->span=$request->span;
        $update->h4=$request->h4;
        $update->p=$request->p;
        $update->save();
        return redirect('/backarticle');
    }

    
}
