<div class="container">
    <div class="row">
        <div class="col-xs-12" style="margin-top: 25px">
            <ul class="nav nav-pills">
                <li role="presentation" >
                    <a href="page">О компани</a>
                </li>
                <li role="presentation">
                    <a href="#">Наши услуги</a>
                </li>
                <li role="presentation">
                    <a href="form">Форма</a>
                </li>
            </ul>
        </div>
        <div class="col-xs-12">
            <h1 class="h1">Страница</h1>
            <a href="/admin/create" class="btn btn-success">Добавить</a>
        </div>

        <div class="col-xs-12">
            <table class="table">
                <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>ФИО</th>
                    <th>E-Mail</th>
                    <th>Заголовок</th>
                    <th>Сообщение</th>
                    <th>Дата</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?
                if ($model && !empty($model)) {
                    foreach ($model as $pageForm) {
                        ?>
                        <tr>
                            <th scope="row"><p><?=$pageForm->id?></p></th>
                            <td>
                                <p><?=$pageForm->name?></p>
                            </td>

                            <td>
                                <p><?=$pageForm->email?></p>
                            </td>
                            <td>
                                <p><?=$pageForm->subject?></p>
                            </td>
                            <td>
                                <p><?=$pageForm->message?></p>
                            </td>
                            <td>
                                <p><?=$pageForm->time?></p>
                            </td>
                            <td>
                                <a href="/admin/form-delete?id=<?=$pageForm->id?>" class="btn btn-danger">Удалить</a>
                            </td>
                        </tr>
                        <?
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>