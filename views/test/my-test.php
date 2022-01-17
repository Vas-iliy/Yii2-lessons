<?$this->title = 'My Test'?>
<?$this->registerMetaTag(['name' => 'description', 'content' => 'new'], 'description')?>
<p><code><?=__FILE__?></code></p>
<p>Hi</p>

<?//$this->registerJsFile('@web/scripts.js', ['depends' => 'yii\web\YiiAsset'])?>

<?php
/*$js = <<<JS
alert('Hi');
JS;

$this->registerJs($js, yii\web\View::POS_LOAD);
*/?>