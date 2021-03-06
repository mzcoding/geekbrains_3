<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
	{
		 $news = News::paginate(5);
		 return view('news.index', [
		 	 'newsList'   => $news
		 ]);
	}

	public function show(int $id)
	{
		 $news = News::find($id);
		 if(empty($news)) {
		 	 abort(404, 'News not found');
		 }
		 return view('news.show', [
		 	 'news'       => $news
		 ]);
	}
}
