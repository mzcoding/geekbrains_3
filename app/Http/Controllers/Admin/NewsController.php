<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
	protected  $news = [
		[
			'id' => 1,
			'title' => 'Новость номер 1',
			'text'  => 'Описание новости номер 1'
 		],
		[
			'id' => 2,
			'title' => 'Новость номер 2',
			'text'  => 'Описание новости номер 2'
		],
		[
			'id' => 3,
			'title' => 'Новость номер 3',
			'text'  => 'Описание новости номер 3'
		],
	];
	public function index()
	{
		//return response()->json($this->news);
		return  view('admin.news.index', ['news' => $this->news]);
	}

	public function create()
	{
		return "Добавление новости";
       //return redirect()->route('admin.news.edit', ['id' => 2]);
	}

	public function edit(int $id)
	{
		return "Редактирование новости - " .$id;
	}
}
