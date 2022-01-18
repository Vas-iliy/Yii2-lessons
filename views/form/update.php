<div class="col-md-12">
    <h2>Update</h2>

    <? use yii\helpers\Html;
    use yii\widgets\ActiveForm;

     echo \app\widgets\Alert::widget()?>


    <?php $form = ActiveForm::begin([
        'id' => 'my-form',
        'options' => [
            'class' => 'form-horizontal',
        ],
        'fieldConfig' => [
            'template' => "<div class='form-group'> {label} \n {input} \n \n  {error}</div>",
            'inputOptions' => ['class' => 'form-control'],
            'errorOptions' => ['class' => 'form-text text-danger']
        ]
    ]) ?>
    <?=$form->field($country, 'name')?>
    <?=$form->field($country, 'population')?>
    <?=$form->field($country, 'status')->checkbox()?>
    <div class="form-group">
        <div class="col-md-5">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-default btn-block']) ?>
        </div>
    </div>
    <? ActiveForm::end() ?>
</div>