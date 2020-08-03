<div>
    <a href="<?=route('admin.news.create')?>">Добавить новость</a>
    <br>
    <a href="<?=route('admin')?>">В админку</a>
</div>
<br>

<div>
   @isset($n['title']) @endisset
    @forelse($news as $n)
        <div>
             <h2><a href="<?=route('admin.news.edit', ['id' => $n['id']])?>"><?=$n['title']?></a></h2>
             <p><?=$n['text']?></p>
        </div>
     @empty
        <h2>Новостей нет</h2>
     @endforelse

</div>