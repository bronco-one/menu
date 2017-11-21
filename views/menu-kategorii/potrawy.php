<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
?>

<?php foreach($potrawy as $potrawa){ ?>
<?php //$potrawa = $p->potrawy; ?>
<tr>
<td><?php echo $potrawa['nazwa_potrawy'] ?></td>
<td><?php echo $potrawa['gramatura'] ?></td>

</tr>
<?php } ?>

