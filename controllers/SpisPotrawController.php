<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Kategorie;
use app\models\Menu;

class SpisPotrawController extends Controller {
    
    public function actionIndex() {
        $query = Kategorie::find();
        $menuKategorie = $query->all();
      return $this->render('index',['menuKategorie'=>$menuKategorie]);  
    }
    public function actionPotrawy($id) {
        $menu = Kategorie::findOne($id);
        $potrawy = $menu->menu;
        
        return $this->render('potrawy',['menu'=>$menu,'potrawy'=>$potrawy]);
    }
}

