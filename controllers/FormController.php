<?php

namespace app\controllers;

use app\models\Country;
use app\models\EntryForm;
use yii\web\Response;
use yii\widgets\ActiveForm;

class FormController extends AppController
{
    public function actionIndex()
    {
        $this->layout = 'test';
        $this->view->title = 'Form';
        $model = new EntryForm();
        $model->load(\Yii::$app->request->post());

        //validateAjax
        /*if (\Yii::$app->request->isAjax) {
            \Yii::$app->response->format = Response::FORMAT_JSON;
            if ($model->validate()) {
                return ['message' => 'ok'];
            } else {
                return ActiveForm::validate($model);
            }
            //return ActiveForm::validate($model);
        }*/
        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            /*\Yii::$app->session->setFlash('success', 'Данные приняты');
            return $this->refresh();*/
            if (\Yii::$app->request->isPjax) {
                \Yii::$app->session->setFlash('success', 'Данные приняты Pjax');
                $model = new EntryForm();
            } else {
                \Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            }
        }
        return $this->render('index', compact('model'));
    }

    public function actionView() {
        $this->layout = 'test';
        $this->view->title = 'Работа с моделями';
        $model = new Country();
        return$this->render('view', compact('model'));
    }
}