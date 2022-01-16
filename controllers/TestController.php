<?php

namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public $defaultAction = 'my-test';

    public function actionIndex() {
        return 'Hi';
    }

    public function actionMyTest() {

    }
}