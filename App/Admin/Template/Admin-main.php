<div>
    <h3>Список новостей</h3>
    <a class="uk-align-right uk-button uk-button-success "  href="admin.php?c=News&m=New">Добавить новость</a>
    <hr>

</div>

<table class="uk-table uk-table-hover uk-table-striped">

    <?php foreach ($news as $val):?>
    <tr>
        <td><?php echo $val->title;?></td>
        <td><a class=" uk-button uk-button-primary uk-button-small"  href="admin.php?c=News&m=Edit&id=<?php echo $val->id;?>">редактировать</a></td>
        <td><a class=" uk-button uk-button-danger uk-button-small"  href="admin.php?c=News&m=Delete&id=<?php echo $val->id;?>">удалить</a></td>
        <?php endforeach;?>
    </tr>

</table>