<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
    <link rel="stylesheet" type="text/css" href="/App/Template/css/uikit.css" />

</head>
<body  class="" >
<div  class="uk-container-center uk-margin-large-left uk-margin-large-right">
    <div class="uk-block">
        <?php foreach ($news as $val):?>
    <h3><a href="/News/Article/<?php echo $val->id;?>" ><?php echo $val->title;?></a></h3>
    <p><?php echo $val->text;?></p>
            <?php if (false == $val->author_id):?>
                <p class="uk-article-meta">Автор народ.</p>
            <?php else:?>
            <p class="uk-article-meta"><?php echo $val->author_id->author;?></p>
            <?php endif;?>
        <hr>
        <?php endforeach;?>
    </div>
</div>



</body>
</html>