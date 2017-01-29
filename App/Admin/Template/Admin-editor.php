
        <form method="post" action="/admin.php?c=news&m=save" class="uk-form">
            <fieldset>
                <legend>Заголовок</legend>
                <div class="uk-form-row">
                    <input class="uk-form-width-large" type="text"  placeholder="Заголовок новости" name="title">

                </div>
                <legend>Автор</legend>
                <div class="uk-form-row">
                    <input class="uk-form-width-large" type="text"  placeholder="Автор новости" name="author">
                </div>
                <legend>Текст новости</legend>
                <div class="uk-form-row"><textarea data-uk-htmleditor name="text"></textarea></div>

            </fieldset>

            <button class="uk-align-right uk-button uk-button-success uk-margin-top" name="save" value="save" >Сохранить</button>
            <a class="uk-align-right uk-button uk-button-danger uk-margin-top" href="/Admin.php" >Назад</a>
        </form>
