<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller {

    public function index() {
        $title = 'Обзор';

        return view('user.dashboard')->with([
            'title' => $title,
        ]);
    }
}