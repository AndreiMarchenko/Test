<?php foreach($news as $article):?>
<h1><?php echo $article['title'];?></h1>
<p><?php echo $article['text'];?></p>
<hr>
<?php endforeach;?>