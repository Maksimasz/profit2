<!DOCTYPE html>
<html lang="en" class="uk-height-1-1">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <link rel="stylesheet" type="text/css" href="/App/Template/css/uikit.css" />


</head>
<body class="uk-height-1-1" >
<div class="uk-grid uk-container uk-height-1-1">
    <div class=" uk-width-1-4  uk-block uk-block-secondary ">
        <h3 class="percol">Новости</h3>
        <hr>

    </div>
    <div class="uk-width-3-4  uk-block uk-block-default">
        <div>
            <h3>Список новостей</h3>
            <a class="uk-align-right uk-button uk-button-success "  href="/admin.php?edit=new">Добавить новость</a>
            <hr>

        </div>

        <table class="uk-table uk-table-hover uk-table-striped">

            <?php foreach ($news as $val):?>
                <tr>
                    <td><?php echo $val->title;?></td>
                    <td><a class=" uk-button uk-button-primary uk-button-small"  href="/admin.php?edit=ed&id=<?php echo $val->id;?>">редактировать</a></td>
                    <td><a class=" uk-button uk-button-danger uk-button-small"  href="/admin.php?edit=del&id=<?php echo $val->id;?>">удалить</a></td>
            <?php endforeach;?>
                </tr>

        </table>

    </div>
</div>
</body>
</html>