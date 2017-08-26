<?php

namespace app\controllers;

class ExibirPostController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $post = \app\models\Post::find()->all();
        return $this->render('index', ['exibirPost' => $post]);
    }

}
