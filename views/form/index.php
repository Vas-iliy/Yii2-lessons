<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="col-md-12">
    <h2>Page Form</h2>
    <?$form = ActiveForm::begin()?>
    <?=$form->field($model, 'name')?>
    <?=$form->field($model, 'email')?>
    <?=$form->field($model, 'text')->textarea(['rows' => 7])?>
    <div class="form-group">
        <?=Html::submitButton('Send', ['class' => 'btn btn-default'])?>
    </div>
    <?ActiveForm::end()?>
</div>