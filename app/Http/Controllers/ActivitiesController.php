<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
     public function index (){   //dopofunction devi mettere il nome che richiami sul file web.php dopo .class
        return view('list');// qua il nome del file che crei su views
    }
    // root comunica con l'url
    
    public function details($id){
        return view('details', ['id' => $id]);
    }
    public function modify($id){
        return view('modify',['id'=> $id]);
    }
    public function delete($id){
        return view('delete', ['id' => $id]);
    }
    public function create($id){
        return view('create', ['id' => $id]);
    }
}
// dai nel views lo stesso noome del funcion