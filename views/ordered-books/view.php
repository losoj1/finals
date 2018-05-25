<?php
use yii\widgets\DetailView;
use yii\helpers\html;


$this->params['breadcrums'][] = ['label'=> 'OrderedBooks','url'=>['/ordered-books/index']];
$this->params['breadcrums'][] = $model->orders_id;

?>
<h1>View Your OrderedBooks</h1>

<?= DetailView::widget([
'model' => $model,
'attributes' => [
'orders_id',
'books_id'
]]); ?>

<div class="pull-right">
	<?= Html::a('Update OrderedBooks',
            ['/ordered-books/update','orders_id'=>$model->id],
            ['class'=>'btn btn-primary glyphicon glyphicon-pencil']);?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger glyphicon glyphicon-trash',
            'data' => [
                'confirm' => 'Are you sure you want to delete this books?',
                'method' => 'post',
            ],
        ]) ?>
	
</div>
