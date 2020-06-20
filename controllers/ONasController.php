<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Slides;

class ONasController extends Controller {
    
    public function actionInfo() {
        
        $query = Slides::find();
        $slides = $query->all();
        return $this->render('info',['slides'=>$slides]);
    }
    
}
