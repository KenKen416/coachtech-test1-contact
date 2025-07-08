<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function thanks(){
        return view('thanks');
    }
    public function confirm(Request $request){
        $confirm = $request->all();
        $category = Category::find($request->category_id);
        $content = $category->content;
        $gender = [
            '1'=>'男性',
            '2'=>'女性',
            '3'=>'その他'
        ];
        $gender_label = $gender[$request->gender];
        $tel = $request->tel1 . $request->tel2 . $request->tel3;
        return view('confirm',compact('confirm','content','gender_label','tel'));
    }
    public function create(Request $request){
        $data = $request->all();
        Contact::create($data);
        return redirect('/thanks');
    }
}
