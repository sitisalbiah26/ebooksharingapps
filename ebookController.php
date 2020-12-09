<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ebookController extends Controller
{
    public function about() {
        $ebookTitle = 'Harry Potter';
        $ebookISBN = '9780023';
        $ebookCategory = 'Fantasy';
        $ebookNoOfPages = '636';

        return view('subview.about', compact('ebookTitle', 'ebookISBN', 'ebookCategory', 'ebookNoOfPages'));

    }
}
