<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KiderController extends Controller
{
  
     function index () {
        return view('kider.index');
        
     } function appointment () {
        return view('kider.appointment');
        
     }  function error () {
        return view('kider.error');
     }
     function about () {
        return view('kider.about');
     }
     function call_to_action () {
        return view('kider.call_to_action');
     } 
     function classes () {
        return view('kider.classes');
     }  
     function facility () {
        return view('kider.facility');
     }  
     function contact () {
        return view('kider.contact');
     }  
     function team () {
        return view('kider.team');
     }
     function testimonial () {
        return view('kider.testimonial');
//
    }
}