<div class="container">
    <div class="col-xs-12">
        <h1 class="h1"><?=$model->title?></h1>
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
        echo  \yii\helpers\Html::submitButton('Изменить');
        ?>
        <?
        \yii\widgets\ActiveForm::end();
        ?>
    </div>
</div>