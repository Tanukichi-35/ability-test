<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class AuthController extends Controller
{
    public function admin()
    {
        // $contacts = Contact::all();
        // return view('admin', compact('contacts'));
        $contacts = Contact::Paginate(7);
        $categories = Category::All();

        setcookie('search_keyword');
        setcookie('search_gender');
        setcookie('search_category_id');
        setcookie('search_date');

        return view('admin', compact('contacts', 'categories'));
    }
}
