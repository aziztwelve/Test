<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Database\Query\Builder;

class PostController extends Controller
{
    	public function show( Request $request){

		// $content = Post::whereId($id)->firstOrFail();
		$content = Post::paginate(2);
		return	view('welcome',	['posts'=>$content]);

	}
}
