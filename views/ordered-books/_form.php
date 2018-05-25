<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Books;
use app\models\Orders;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orderedbooks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model,'books_id')->dropDownList(ArrayHelper::map(
				Books::find()->asArray()->all(), 'id','id'))?>
 <?= $form->field($model,'orders_id')->dropDownList(ArrayHelper::map(
				Orders::find()->asArray()->all(), 'id','id'))?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
