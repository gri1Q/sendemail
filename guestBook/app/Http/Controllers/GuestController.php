<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;


class GuestController extends Controller
{
    public function index()
    {   
        $data=[
            'title'=>'Гостевая книга',
            'messages'=>Message::all(),
            'count'=>Message::count(),
            'pagetitle'=>'Привет, это моя первая гостевая страница на Laravel',
           
        ];
        return view('pages\messages\index',$data);
    }
    public function edit($id)
    {
        
        $data=[
            'title'=>'Гостевая книга',
            'pagetitle'=>'Привет, это моя первая гостевая страница на Laravel',
            'users'=>[
                ['name'=>'Vasya'],
                ['name'=>'Petya'],
                ['name'=>'Vadim'],
            ]
        ];
        return view('pages\messages\edit',$data);
    }
}
