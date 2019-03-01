<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Messages;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function showContacts()
    {
        return view("contacts");
    }

    public function showNews()
    {
        return view("news");
    }

    public function showGallery()
    {
        return view("gallery");
    }

    public function SendMsg(Request $request)
    {
        $post_data = $request->all();
        Messages::create($post_data);
        return redirect()->back();
    }

    public function SaveArticle(Request $request)
    {
        $post_data = $request->all();
        Articles::create($post_data);
        return redirect()->back();
    }
    public function ShowArticle ()
    {
        return view("news");
    }

}

