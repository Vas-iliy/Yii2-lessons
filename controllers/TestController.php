<?php

namespace app\controllers;

use yii\web\View;

class TestController extends AppController
{
    //public $layout = 'test';
    /*public $defaultAction = 'my-test';

    public function actions()
    {
        return [
          'test' => 'app\components\HiAction'
        ];
    }*/

    public function actionIndex($name = '', $age = 25) {
        $this->layout = 'test';
        /*return $this->renderFile('@app/views/test/index.php');
        return $this->renderAjax('index');
        return $this->renderPartial('index');*/
        $this->myVar = 'My';
        //\Yii::$app->view->params['t1'] = 'T1 params';
        $this->view->params['t1'] = 'T1 params';
        $this->view->title = 'Test Page';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'test'], 'description');
        return $this->render('index', compact('name', 'age'));
        /*return $this->render('index', [
            'name' => $name,
            'age' => $age
        ]);*/
    }

    public function actionMyTest() {
        \Yii::$app->view->on(View::EVENT_END_BODY, function () {
            echo "<p>&copy; Yii2 " . date("Y") . "</p>";
        });
        return $this->render('my-test');
    }
}