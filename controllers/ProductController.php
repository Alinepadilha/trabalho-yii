<?php

namespace app\controllers;
use app\models\Product;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $produtos = Product::find()->all();
        
        return $this->render('index', ['produtos' => $produtos]);
    }

    public function actionView($id)
    {
        $produtos = Product::findOne($id);
        $produtos->viewed = $produtos->viewed = 1;
        
        // salvar
        $produtos->save();
        return $this->render('view', ['produto' => $produtos]);
        
    }

}
