
<form method="post" action="Admin.php" class="uk-form">
    <fieldset>
        <legend>Заголовок</legend>
        <div class="uk-form-row">
            <input class="uk-form-width-large" type="text" value=" <?php echo $article->title;?>" placeholder="заголовок новости" name="title">

        </div>
        <legend>Автор</legend>
        <div class="uk-form-row">
            Имя автора: <input class="uk-form" type="text" value=" <?php echo $article->author_id->firstname;?>" placeholder="Имя автора" name="firstname">
            Фамилия автора: <input class="uk-form" type="text" value=" <?php echo $article->author_id->lastname;?>" placeholder="Фамилия автора" name="lastname">
        </div>
        <legend>Текст новости</legend>
        <div class="uk-form-row"><textarea data-uk-htmleditor name="text"><?php echo $article->text;?></textarea></div>
        <input type="hidden" name="id" value="<?php echo $article->id;?>">
    </fieldset>

    <button class="uk-align-right uk-button uk-button-success uk-margin-top" name="save" value="save">Сохранить</button>
    <a class="uk-align-right uk-button uk-button-danger uk-margin-top" href="/Admin.php" >Назад</a>
</form>