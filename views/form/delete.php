<div class="col-md-12">
    <h2>Delete</h2>

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
</div>