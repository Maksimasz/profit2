<div>
    <h3>Список новостей</h3>
    <a class="uk-align-right uk-button uk-button-success "  href="/App/Admin/new.php">Добавить новость</a>
    <hr>

</div>

<table class="uk-table uk-table-hover uk-table-striped">

    <?php foreach ($news as $val):?>
    <tr>
        <td><?php echo $val->title;?></td>
        <td><a class=" uk-button uk-button-primary uk-button-small"  href="/App/Admin/edit.php?&id=<?php echo $val->id;?>">редактировать</a></td>
        <td><a class=" uk-button uk-button-danger uk-button-small"  href="/App/Admin/delete.php?&id=<?php echo $val->id;?>">удалить</a></td>
        <?php endforeach;?>
    </tr>

</table>