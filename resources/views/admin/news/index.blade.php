@extends('layouts.app')
@section('content')
<div>
    <a href="{{ route('news.create') }}">Добавить новость</a>
    <br>
    <a href="{{ route('admin') }}">В админку</a>
</div>
<br>
@if(session()->has('success'))
     <strong>{{ session()->get('success') }}</strong>
@endif
<div class="col-md-4 offset-2">
    @forelse($newsList as $news)
        <div>
             <p><a href=" {{ route('news.edit', ['news' => $news]) }}">{{ $news->title }}</a></p>
              <br>
        </div>
     @empty
        <h2>Новостей нет</h2>
     @endforelse

</div>
@stop