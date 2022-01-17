<?php

namespace app\controllers;

use app\models\EntryForm;

class FormController extends AppController
{
    public function actionIndex()
    {
        $this->layout = 'test';
        $this->view->title = 'Form';
        $model = new EntryForm();
        return $this->render('index', compact('model'));
    }
}