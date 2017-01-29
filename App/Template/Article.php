<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости - <?php echo $article->title;?></title>
    <link rel="stylesheet" type="text/css" href="/App/Template/css/uikit.css" />

</head>
<body  >
<article class="uk-article">

    <div  class="uk-container-center uk-margin-large-left uk-margin-large-right">
        <div class="uk-block">
            <h3 class="uk-article-title"><?php echo $article->title;?></h3>
            <p><?php echo $article->text;?></p>

            <?php if (false == $article->author_id):?>
                <p class="uk-article-meta">Автор народ.</p>
            <?php else:?>
                <p class="uk-article-meta"><?php echo $article->author_id->author;?></p>
            <?php endif;?>

            <a class="uk-align-right uk-button uk-button-success"  href="/index.php">назад</a>
        </div>
    </div>


</article>



</body>
</html>