<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
	{
		 $news = (new News())->getAll();
		 return view('news.index', [
		 	 'newsList'   => $news
		 ]);
	}

	public function show(int $id)
	{
		 $news = (new News())->getById($id);
		 if(empty($news)) {
		 	 abort(404, 'News not found');
		 }
		 return view('news.show', [
		 	 'news'       => $news
		 ]);
	}
}
