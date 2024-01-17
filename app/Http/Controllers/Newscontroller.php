<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news', ['news' => $news]); // Change 'news.index' to 'news'
    }
    
    

    public function show($id)
    {
        // Fetch a specific news article by ID from the database
        $news = News::findOrFail($id);

        // Pass the data to the view and render it
        return view('news.show', ['news' => $news]);
    }
}
