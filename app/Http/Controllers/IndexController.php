<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $news = Data::all();

        return view('news', [
            'news' => $news
        ]);
    }
}
