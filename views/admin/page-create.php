<div class="container">
    <div class="col-xs-12">
        <h1 class="h1">Добавить</h1>
        <?
        $form = \yii\widgets\ActiveForm::begin([
            'options' => [
                'enctype' => 'multipart/form-data'
            ]
        ])
        ?>
        <?
        echo $form->field($model,'title')->textInput();
        echo $form->field($model,'description')->textarea();
        echo $form->field($model,'imageFile')->fileInput();
        ?>
        <?
        echo \yii\helpers\Html::submitButton('Создать');
        ?>
        <?
            \yii\widgets\ActiveForm::end();
        ?>
    </div>
</div>