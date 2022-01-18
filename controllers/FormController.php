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
        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            \Yii::$app->session->setFlash('success', 'Данные приняты');
            return $this->refresh();
            /*if (\Yii::$app->request->isPjax) {
                \Yii::$app->session->setFlash('success', 'Данные приняты Pjax');
                $model = new EntryForm();
            } else {
                \Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            }*/
        }
        return $this->render('index', compact('model'));
    }
}