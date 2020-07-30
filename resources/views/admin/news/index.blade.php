<div>
    <a href="<?=route('admin.news.create')?>">Добавить новость</a>
    <br>
    <a href="<?=route('admin')?>">В админку</a>
</div>
<br>
<div>
 <?php if(isset($news) && !empty($news) && is_array($news)): ?>
     <?php foreach($news as $n): ?>
        <div>
             <h2><a href="<?=route('admin.news.edit', ['id' => $n['id']])?>"><?=$n['title']?></a></h2>
             <p><?=$n['text']?></p>
        </div>
     <?php endforeach; ?>
 <?php endif; ?>
</div>