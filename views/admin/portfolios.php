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
        <!--<div class="col-xs-12">
            <h1 class="h1">О компании</h1>
            <a href="/admin/create" class="btn btn-success">Добавить</a>
        </div>-->

        <div class="col-xs-12">
            <table class="table">
                <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Название</th>
                    <th>Описаниеe</th>
                    <th>Изображение</th>
                    <th></th>
                    <!--<th></th>-->
                </tr>
                </thead>
                <tbody>
                <?
                if ($portfolios && !empty($portfolios)) {
                    foreach ($portfolios as $portfolio) {
                        ?>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <p><?=$portfolio->title?></p>
                            </td>
                            <td>
                                <p><?=$portfolio->description?></p>
                            </td>
                            <td>
                                <img style="max-width: 200px" src="<?=$portfolio->img?>">
                            </td>
                            <td>
                                <a href="/admin/portfolio-edit?id=<?=$portfolio->id?>" class="btn btn-default">Изменить</a>
                            </td>
                            <!--<td>
                                <a href="/admin/portfolio-delete?id=<?/*=$portfolio->id*/?>" class="btn btn-danger">Удалить</a>
                            </td>-->
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