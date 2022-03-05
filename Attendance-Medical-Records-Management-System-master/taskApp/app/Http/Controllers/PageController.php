<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function add() {
        
        return view('add');
       }
       public function approved() {
        
        return view('approved');
       }
       public function AR() {
        
        return view('AR');
       }
       public function exam() {
        
        return view('MAexam');
       }
       public function rejected() {
        
        return view('rejected');
       }
       public function send() {
        
        return view('SendToAR');
       }

       public function tst1() {
        
        return view('test1');
       }


       public function reminder() {
        
        return view('reminder');
       }
       public function reminder2() {
        
        return view('reminder2');
       } 
       public function ARviewMedicals() {
        
        return view('ARviewMedicals');
       }
       public function ARexam() {
        
        return view('ARexam');
       }
       public function search() {
        
        return view('searchmedicals');
       }
}
