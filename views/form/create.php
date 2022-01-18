<div class="col-md-12">
    <h2>Create</h2>

    <? use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    if(Yii::$app->session->hasFlash('success')):?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?=Yii::$app->session->getFlash('success')?>
        </div>
    <?endif;?>

    <?if(Yii::$app->session->hasFlash('error')):?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?=Yii::$app->session->getFlash('success')?>
        </div>
    <?endif;?>

    <?php $form = ActiveForm::begin([
        'id' => 'my-form',
        //'action' => '/lessons/web/index.php?r=form',
        'options' => [
            'class' => 'form-horizontal',
        ],
        'fieldConfig' => [
            'template' => "<div class='form-group'> {label} \n {input} \n \n  {error}</div>",
            'inputOptions' => ['class' => 'form-control'],
            'errorOptions' => ['class' => 'form-text text-danger']
        ]
    ]) ?>
    <?=$form->field($country, 'code')?>
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