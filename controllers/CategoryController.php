<?php

namespace app\controllers;

use app\models\Category;
use yii\web\NotFoundHttpException;

class CategoryController extends AppController
{
    public function actionIndex()
    {
        $this->view->title = 'Categories';
        $categories = Category::find()->all();
        return $this->render('index', compact('categories'));
    }

    public function actionView($alias = null)
    {
        $category = Category::findOne(['alias' => $alias]);
        if (!$category) {
            throw new NotFoundHttpException('Not Fount');
        }
        $products = $category->getProducts(850)->all();
        $this->view->title = "Category: {$category->title}";
        return $this->render('view', compact('category', 'products'));
    }
}