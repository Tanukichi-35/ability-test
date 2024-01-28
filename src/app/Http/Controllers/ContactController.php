<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request){
        $contact = $request->all();
        $categories = Category::all();
        // dd($contact);
        return view('confirm', compact('contact', 'categories'));
    }

    public function store(Request $request){
        // dd($request);
        if($request->input('back') == 'back'){
            return redirect('/')
                        ->withInput();
        }

        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tell_1', 'tell_2', 'tell_3', 'address', 'building', 'category_id', 'detail']);
        // dd($contact);
        $contact['gender'] = Contact::getGenderNo($contact['gender']);
        $contact['tell'] = Contact::getTellNo($contact['tell_1'],$contact['tell_2'],$contact['tell_3']);
        // dd($contact);
        Contact::create($contact);
        return view('thanks');
    }

    public function delete(Request $request){
        // dd($request);
        Contact::find($request->id)->delete();
        return redirect('/admin');
    }
}
