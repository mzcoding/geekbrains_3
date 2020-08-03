<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	protected $categories = [
		[
			'id' => 1,
			'title' => 'Спорт'
		],
		[
			'id' => 2,
			'title' => 'IT и стартапы'
		],
		[
			'id' => 3,
			'title' => 'Политика'
		],
	];
	protected  $news = [
		[
			'id' => 1,
			'category_id' => 1,
			'title' => 'Новость номер 1',
			'text'  => 'Описание новости номер 1'
		],
		[
			'id' => 2,
			'category_id' => 1,
			'title' => 'Новость номер 2',
			'text'  => 'Описание новости номер 2'
		],
		[
			'id' => 3,
			'category_id' => 2,
			'title' => 'Новость номер 3',
			'text'  => 'Описание новости номер 3'
		],
		[
			'id' => 4,
			'category_id' => 3,
			'title' => 'Новость номер 4',
			'text'  => 'Описание новости номер 4'
		],
	];
}
