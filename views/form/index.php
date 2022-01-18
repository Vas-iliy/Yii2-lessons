<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;

?>
<div class="col-md-12">
    <h2>Page Form</h2>

    <?Pjax::begin()?>
    <?if(Yii::$app->session->hasFlash('success')):?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"
            aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?=Yii::$app->session->getFlash('success')?>
        </div>
    <?endif;?>
    <?php $form = ActiveForm::begin([
        'id' => 'my-form',
        'enableClientValidation' => true,
        //'action' => '/lessons/web/index.php?r=form',
        'options' => [
            'class' => 'form-horizontal',
            'data-pjax' => true
        ],
        'fieldConfig' => [
            'template' => "<div class='form-group'> {label} \n {input} \n \n  {error}</div>",
            'inputOptions' => ['class' => 'form-control'],
            'errorOptions' => ['class' => 'form-text text-danger']
        ]
    ]) ?>

    <?= $form->field($model, 'name')->hint('Заполните поле имя')->textInput(['placeholder' => 'Введите имя']); ?>
    <?= $form->field($model, 'email')->input('email', ['placeholder' => 'Введите Email']) ?>
    <?/*= $form->field($model, 'topic', ['enableAjaxValidation' => true])->input('text', ['placeholder' => 'Тема сообщения']) */?><!--
    --><?= $form->field($model, 'text')->textarea(['rows' => 7, 'placeholder' => 'Введите текст']) ?>
    <div class="form-group">
        <div class="col-md-5">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-default btn-block']) ?>
        </div>
    </div>

    <?php ActiveForm::end() ?>
    <?Pjax::end()?>
</div>

<?/*
$js = <<<JS
var form = $('#my-form');
form.on('beforeSubmit', function() {
  var data = form.serialize();
  $.ajax({
    url: form.attr('action'),
    type: 'POST',
    data: data,
    success: function(res) {
      console.log(res);
      form[0].reset();
    },
    error: function() {
      alert('Error');
    }
  }) 
  return false;
})
JS;

$this->registerJs($js);
*/?>