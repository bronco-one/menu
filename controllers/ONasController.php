<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Slides;
use app\models\PageText;

class ONasController extends Controller {
    
    public function actionInfo() {
        
        $query = Slides::find();
        $slides = $query->all();
        $query2 = PageText::find()->where(['page'=>'onas']);
        $text = $query2->all();
        return $this->render('info',['slides'=>$slides,'text'=>$text]);
    }
    
}
