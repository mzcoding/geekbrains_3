<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
	{
		 return view('news.index', [
		 	 'newsList'   => $this->news,
			 'categories' => $this->categories
		 ]);
	}

	public function show(int $id)
	{
		 $news = $this->news[$id-1] ?? [];
		 if(empty($news)) {
		 	 abort(404, 'News not found');
		 }
		 return view('news.show', [
		 	 'news'       => $news,
			 'categories' => $this->categories
		 ]);
	}
}
