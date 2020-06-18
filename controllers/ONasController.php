<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class ONasController extends Controller {
    
    public function actionInfo() {
        return $this->render('info');
    }
    
}
