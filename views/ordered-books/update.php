<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\Books;
use app\models\Orders;
use yii\widgets\ActiveForm;
?>
<h1>Update Ordered Books</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>

            <?= $form->field($model,'books_id')->dropDownList(ArrayHelper::map(
				Books::find()->asArray()->all(), 'id','title','author','price'))?>
        
			<?= $form->field($model,'orders_id')->dropDownList(ArrayHelper::map(
				Orders::find()->asArray()->all(), 'id','customers_id'))?>
			<
			
			<<div class="form-group">
    	<?= Html::submitButton("Update OrderedBooks", ['class'=>'btn btn-primary']); ?>
			</div>


			<?php ActiveForm::end(); ?>
	</div>
</div>
