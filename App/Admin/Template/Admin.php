<!DOCTYPE html>
<html lang="en" class="uk-height-1-1">
<!DOCTYPE html>
<html lang="en" class="uk-height-1-1">
<head>
    <meta charset="UTF-8">
    <title>Админ панель</title>
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
        <?php echo $content;?>

    </div>
</div>
</body>
</html>