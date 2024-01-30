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

    public function search(Request $request){
        // dd($request->keyword);
        $contacts = Contact::with('category')->KeywordSearch($request->keyword)->GenderSearch($request->gender)->CategorySearch($request->category_id)->DateSearch($request->date)->Paginate(7);
        $categories = Category::all();

        $response = response()->view('admin', compact('contacts', 'categories', 'request'));
        $response->cookie('search_keyword', $request->Keyword, 3);
        $response->cookie('search_gender', $request->gender, 3);
        $response->cookie('search_category_id', $request->category_id, 3);
        $response->cookie('search_date', $request->date, 3);

        // return view('admin', compact('contacts', 'categories', 'request'));
        return $response;

    }

    public function reset(){
        setcookie('search_keyword');
        setcookie('search_gender');
        setcookie('search_category_id');
        setcookie('search_date');

        return redirect('/admin');
    }
}
