<!DOCTYPE html>
<html lang="en" class="uk-height-1-1">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <link rel="stylesheet" type="text/css" href="/App/Template/css/uikit.css" />
    <link rel="stylesheet" type="text/css" href="/App/Template/css/codemirror.css" />
    <link rel="stylesheet" type="text/css" href="/App/Template/css/components/htmleditor.css" />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type='text/javascript' src='/App/Template/js/uikit.min.js'></script>
    <script type='text/javascript' src='/App/Template/js/codemirror.js'></script>
    <script type='text/javascript' src='/App/Template/js/components/htmleditor.js'></script>

</head>
<body class="uk-height-1-1" >
<div class="uk-grid uk-container uk-height-1-1">
    <div class=" uk-width-1-4  uk-block uk-block-secondary ">
        <h3 class="percol">Новости</h3>
        <hr>

    </div>
    <div class="uk-width-3-4  uk-block uk-block-default">
        <form method="post" action="Admin.php" class="uk-form">
            <fieldset>
                <legend>Заголовок</legend>
                <div class="uk-form-row"><input class="uk-form-width-large" type="text" placeholder="заголовок новости" name="title"></div>
                <legend>Текст новости</legend>
                <div class="uk-form-row"><textarea data-uk-htmleditor name="text"></textarea></div>
            </fieldset>

            <button class="uk-align-right uk-button uk-button-success uk-margin-top" name="save" >Сохранить</button>
            <a class="uk-align-right uk-button uk-button-danger uk-margin-top" href="/Admin.php" >Назад</a>
        </form>

    </div>
</div>
</body>
</html>