<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{

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
