<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;

class ContactController extends Controller
{
    public function index(){

        $data['settings'] = Setting::first();

        return view('front.contact.index', $data); 

    }
}
