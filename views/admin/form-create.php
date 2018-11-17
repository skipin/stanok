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
        echo $form->field($model,'name')->textInput();
        echo $form->field($model,'email')->textInput();
        echo $form->field($model,'subject')->textInput();
        echo $form->field($model,'message')->textarea();
        echo $form->field($model,'time')->textInput();
        ?>
        <?
        echo \yii\helpers\Html::submitButton('Создать');
        ?>
        <?
        \yii\widgets\ActiveForm::end();
        ?>
    </div>
</div>