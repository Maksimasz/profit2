<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
    <link rel="stylesheet" type="text/css" href="/App/View/css/uikit.css" />

</head>
<body  class="" >
<div  class="uk-container-center uk-margin-large-left uk-margin-large-right">
    <div class="uk-block">
        <?php foreach ($news as $val):?>
    <h3><a href="/article.php?id=<?php echo $val->id;?>" ><?php echo $val->title;?></a></h3>
    <p><?php echo $val->text;?></p>
    <hr>
        <?php endforeach;?>
    </div>
</div>



</body>
</html>