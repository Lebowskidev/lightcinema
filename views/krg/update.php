<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Krg */

$this->title = 'Update Krg: ' . $model->pi;
$this->params['breadcrumbs'][] = ['label' => 'Krgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pi, 'url' => ['view', 'id' => $model->pi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="krg-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
