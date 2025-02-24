<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function rootPage(){
        return view("welcome");
    }

    public function dashboardPage(){
        return view("pages.client.dashboard");
    }
}
