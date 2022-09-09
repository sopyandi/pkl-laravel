<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RianController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function home()
    {
        return view('/home', [
            'title'=>'Halaman Home'
        ]);
    }
    public function category()
    {
        return view('/category',[
        'title' => 'Halaman Category',
        'models'=>Category::all()
        ]);
    }
    public function user()
    {
        return view('/user',[
        'title' => 'Halaman Data User',
        'models'=>User::all()
        ]);
    }
    public function blog()
    {
        return view('/blog',[
            'title'=>'Halaman Blog',
            'models'=>Post::all()
        ]);
    }
   //short by category prosses
   public function shortby_category(Category $slug)
   {
         return view('/shortby_category',[
             'title'=>$slug->nama,
             'models'=>$slug->post,
             'category'=>$slug->nama
         ]);
   }

}