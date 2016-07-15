<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Datainformation */

$this->title = 'Оновити дані:' . $model->pi;
$this->params['breadcrumbs'][] = ['label' => 'Datainformations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pi, ':81url:81' => ['view', 'id' => $model->pi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datainformation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
