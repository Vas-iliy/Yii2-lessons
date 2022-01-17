<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="col-md-12">
    <h2>Page Form</h2>
    <?php $form = ActiveForm::begin([
        'id' => 'my-form',
        'enableClientValidation' => false,
        'options' => [
            'class' => 'form-horizontal',
        ],
        'fieldConfig' => [
            'template' => "<div class='form-group'> {label} \n {input} \n \n  {error}</div>",
            'inputOptions' => ['class' => 'form-control'],
            'errorOptions' => ['class' => 'form-text text-danger']
        ]
    ]) ?>

    <?= $form->field($model, 'name')->hint('Заполните поле имя')->textInput(['placeholder' => 'Введите имя']); ?>

    <?= $form->field($model, 'email')->input('email', ['placeholder' => 'Введите Email']) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 7, 'placeholder' => 'Введите текст']) ?>

    <div class="form-group">
        <div class="col-md-5 col-md-offset-2">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-default btn-block']) ?>
        </div>
    </div>

    <?php ActiveForm::end() ?>
</div>