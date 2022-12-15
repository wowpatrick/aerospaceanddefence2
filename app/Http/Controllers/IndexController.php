<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $news = Data::paginate('10');

        return view('news', [
            'news' => $news
        ]);
    }
}
