<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch the latest 3 articles
        $articles = Article::latest()->take(3)->get();

        // Set the page title
        $title = 'Home';

        // Pass data to the view
        return view('home', compact('articles', 'title'));
    }
}