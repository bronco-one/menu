<?php 
use yii\helpers\Url;
use yii\helpers\Html;
?>

<?php foreach($menuKategorie as $kat){ ?>
<ul>

<li><?php echo Html::a('Kategoria: '.$kat['kategoria_nazwa'],
 Url::to(['menu-kategorii/potrawy','id'=>$kat['id_kategorii']]))?></li>

</ul>
<?php } ?>




