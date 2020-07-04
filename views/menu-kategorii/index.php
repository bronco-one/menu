<?php 
use yii\helpers\Url;
use yii\helpers\Html;
$this->title = 'menu';
?>
<section class="products">
<div class="products-center">
<?php foreach($menuKategorie as $kat){ ?>

<div class="product">
<div class="img-container">
<?php   echo Html::img('/img/menu-'.$kat['id_kategorii'].'.resized.jpg',['class'=>'product-img']) ?>
</div>
<h4><?php echo Html::a(' '.$kat['kategoria_nazwa'],
 Url::to(['menu-kategorii/potrawy','id'=>$kat['id_kategorii']]))?></h4>
</div>

<?php } ?>
</div>
</div>
</section>



