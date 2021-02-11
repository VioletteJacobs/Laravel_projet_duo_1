<?php

namespace App\Http\Controllers;

use App\Models\Li;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function indexBack(){
        $dbLis=Li::all();

        return view('pages.backoffice',compact('dbLis'));
    }
    public function liStore(Request $request){
        $newEntry= new Li;
        $newEntry->liContent=$request->liContent;

        $newEntry->save();

        return redirect('/backoffice');

    }
}
