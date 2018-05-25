<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Products */

$this->title = 'OrderedBooks';
$this->params['breadcrumbs'][] = ['label' => 'OrderedBooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orderedbooks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
