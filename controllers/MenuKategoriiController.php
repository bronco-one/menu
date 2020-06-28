<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Kategorie;
use app\models\Menu;



class MenuKategoriiController extends Controller {

	public function actionIndex(){

	$query = Kategorie::find();
	$menuKategorie = $query->all();
	return $this->render('index',['menuKategorie'=>$menuKategorie]);


	}
        /*public function actionPotrawy($id){
            $potrawy = Menu::find()->with('potrawy')->where(['kategoria_potrawy'=>$id])->all();
            return $this->render('potrawy',['potrawy'=>$potrawy]);
        }*/
        

	public function actionPotrawy($id){
            $kategoria = Kategorie::find()->where(['id_kategorii'=>$id])->all();
            $potrawy = Menu::find()->where(['kategoria_potrawy'=>$id])->all();
            return $this->render('potrawy',['potrawy'=>$potrawy,'kategoria'=>$kategoria]);
        }

	/*public function actionPotrawyspis($id){
        $potrawy = new Menu;
	$pr =$potrawy->potrawy($id);
        return $this->render('potrawyspis',['pr'=>$pr]);
        }*/
}

