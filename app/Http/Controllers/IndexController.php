<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;

class IndexController extends Controller
{
    public function index()
    {
        $content['title'] = 'belrepet.by';
        $content['message'] = 'content';
        $content['news'] = \App\News::paginate(3);
        
        $users = \App\User::where('joinas', 'tutor')
                ->where('active', 'true')
                ->paginate(6);
        
        return view('index', compact('users'))->with($content);
    }
}
