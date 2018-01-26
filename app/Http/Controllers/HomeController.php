<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){



        return view('home');
    }













    public function add(Request $request)
    {

        $this->validate($request, [
           'title' => 'required|max:50',
           'content' => 'required|max:300'

            ]);


        $post = new Post;
         $post->title = $request->input('title');
         $post->content = $request->input('content'); 
         $post->save();
         return redirect('/')->with('status', 'Страница добавлена');

    }


}
