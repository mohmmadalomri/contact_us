<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(){
        $contacts = Contact::all();
        return view('contant-list',compact('contacts'));

    }

    public function contact(){

        return view('contact');
    };

    public function store(Request $request){
        $contact = new Contant;
        $contact->fname=$request->fname;
        $contact->lname=$request->lname;
        $contact->email=$request->email;
        $contact->save();
        return redirect()->back();
    };



}
