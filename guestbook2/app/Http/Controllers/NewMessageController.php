<?php

namespace App\Http\Controllers;

use App\Models\NewMessage;


use Illuminate\Http\Request;


class NewMessageController extends Controller
{
    public function index()
    {
        $data=array(
            'title'=>'Гостевая книга',
            'pagetitle'=>'Привет, это моя первая "Гостевая Книга" в Laravel',
            'count'=>NewMessage::count(),
            'allMessage'=>NewMessage::all(),
        
        );
        
        return view('index',$data);
    }
}
