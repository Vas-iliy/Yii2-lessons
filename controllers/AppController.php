<?php

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public $myVar;

    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);
    }

}