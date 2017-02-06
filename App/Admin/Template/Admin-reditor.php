
<form method="post" action="/admin.php?c=news&m=save" class="uk-form">
    <fieldset>
        <legend>Заголовок</legend>
        <div class="uk-form-row">
            <input class="uk-form-width-large" type="text" value=" <?php echo $news->title;?>" name="title">

        </div>
        <legend>Автор</legend>
        <div class="uk-form-row">
            <?php if (empty($news->author)):?>
                <input class="uk-form" type="text" value="Автора нет" name="author">
            <?php else:?>
                <input class="uk-form" type="text" value=" <?php echo $news->author->author;?>" name="author">
            <?php endif;?>
        </div>
        <legend>Текст новости</legend>
        <div class="uk-form-row"><textarea data-uk-htmleditor name="text"><?php echo $news->text;?></textarea></div>
        <input type="hidden" name="id" value="<?php echo $news->id;?>">
        <input type="hidden" name="author_id" value="<?php echo $news->author_id;?>">
    </fieldset>

    <button class="uk-align-right uk-button uk-button-success uk-margin-top" name="save" value="save">Сохранить</button>
    <a class="uk-align-right uk-button uk-button-danger uk-margin-top" href="/Admin.php" >Назад</a>
</form>