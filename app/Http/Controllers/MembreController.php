<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index(){
        $membres = Membre::all();
        return view('membres',compact('membres'));
    }

    // Create
    public function create(){
        return view('pages.createMembre');
    }
    public function store(Request $request){
        $store = new Membre;
        $store->nom = $request->nom;
        $store->age = $request->age; 
        $store->genre = $request->genre; 
        $store->save();
        return redirect('/createMembre');
    }

    // Read
    public function show($id){
        $show = Membre::find($id);
        return  view('pages.showMembre',compact('show'));
    }

    // Update
    public function edit($id){
        $edit = Membre::find($id);
        return  view('pages.editMembre',compact('edit'));
    }
    public function update($id , Request $request){
        $update = Membre::find($id);
        $update->nom = $request->nom;
        $update->age = $request->age; 
        $update->genre = $request->genre; 
        $update->save();
        return redirect('/');
    }

    // Delete
    public function destroy($id){
        $destroy = Membre::find($id);
        $destroy->delete();
        return redirect('/');
        
    }
}
