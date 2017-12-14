<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function welcome() {

    	$info = DB::table('info')->first();

    	return view('welcome', ['infoTable' => $info]);
    }
}
