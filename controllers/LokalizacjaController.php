<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class LokalizacjaController extends Controller {
    
    public function actionMapa() {
        return $this->render('mapa');
    }
    
}
