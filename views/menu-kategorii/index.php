<?php 
use yii\helpers\Url;
use yii\helpers\Html;
$this->title = 'menu';
?>

<?php foreach($menuKategorie as $kat){ ?>
<ul>
<li><?php   echo Html::img('/img/menu-'.$kat['id_kategorii'].'.resized.jpg') ?></li>
<li><?php echo Html::a(' '.$kat['kategoria_nazwa'],
 Url::to(['menu-kategorii/potrawy','id'=>$kat['id_kategorii']]))?></li>

</ul>
<?php } ?>




