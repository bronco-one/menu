<?php/*
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
*/?>
<table class="table">
     <tr>
        <th>Nazwa</th>
        <th>Składniki</th>
        <th>Ilość</th>
        <th>Cena</th>
    </tr>
<?php foreach($potrawy as $potrawa){ ?>
   
<tr>
<td><?php echo $potrawa['nazwa_potrawy'] ?></td>
<td><?php echo $potrawa['skladniki_potrawy'] ?></td>
<td><?php echo $potrawa['gramatura'] ?></td>
<td><?php echo Yii::$app->formatter->asCurrency($potrawa['cena'], 'PLN') ?></td>

</tr>
<?php } ?>
</table>

