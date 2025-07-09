<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class AdminController extends Controller
{
    public function index(){
        $contacts = Contact::with('category')->paginate(7);
        $gender_map = [
            '1' =>'男性',
            '2' =>'女性',
            '3' =>'その他'
        ];
        foreach($contacts as $contact){
            $contact->gender_label =$gender_map[$contact->gender];
        };
        return view('admin',compact('contacts'));
    }
}
