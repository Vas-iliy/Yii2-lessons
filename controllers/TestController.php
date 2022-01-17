<?php

namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public $defaultAction = 'my-test';

    public function actions()
    {
        return [
          'test' => 'app\components\HiAction'
        ];
    }

    public function actionIndex($name) {
        var_dump($name);
        return 'Hi';
    }

    public function actionMyTest() {

    }
}