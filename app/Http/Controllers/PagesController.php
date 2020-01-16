<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function action(){
        $action = "our action";
        return view('pages.our_action',compact('action'));
    }
    public function about(){
        $action = "About";
        return view('pages.about_us',compact('action'));
    }
    public function join(){
        $action = "Join";
        return view('pages.join_us',compact('action'));
    }
    public function news(){
        $action = "News";
        return view('pages.news',compact('action'));
    }
    public function contact(){
        $action = "Contact";
        return view('pages.contact_us',compact('action'));
    }
    // public function showCustomer(){
    //     $text = "<h2>This is customer list page</h2>";
    //     $customer = array('Chandaraty','Maly','Samphas','Donat');
    //     return view('customer',compact('customer','text'));
    // }
    public function listCustomer(){
        $text = "<h2>This is customer list page</h2>";
        $customer = array(
            '0'=>array('id' => 1,'name' => 'Chandaraty','email' => 'chandaraty@example.org'),

            '1'=>array('id' => 2,'name' => 'Maly','email' => 'maly@example.org'),

            '2'=>array('id' => 3,'name' => 'Samphas','email' =>'samphas@example.org'),

            '3'=>array('id' => 4,'name' => 'Donat','email' => 'donat@example.org')
        );
        return view('customer',compact('customer','text'));
    }
}
