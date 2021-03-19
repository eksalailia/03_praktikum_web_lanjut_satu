<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class WebController extends Controller
{
 
 public function home(){
 return view('home');
 }
 
 public function product(){
 return view('product');
 }
 
 public function news(){
    return view('news', ['news' => 'news','topic' => 'educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19']);
 }

 public function program(){
    return view('program');
 }

 public function about(){
    return view('about-us');
}
 
public function index(){
    return view('contact-us');
    }
}


