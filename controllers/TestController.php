<?php

namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    /*public $defaultAction = 'my-test';

    public function actions()
    {
        return [
          'test' => 'app\components\HiAction'
        ];
    }*/

    public function actionIndex($name = '', $age = 25) {
        /*return $this->renderFile('@app/views/test/index.php');
        return $this->renderAjax('index');
        return $this->renderPartial('index');*/
        return $this->render('index', compact('name', 'age'));
        /*return $this->render('index', [
            'name' => $name,
            'age' => $age
        ]);*/
    }

    public function actionMyTest() {

    }
}