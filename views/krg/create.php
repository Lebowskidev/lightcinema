<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Krg */

$this->title = 'Create Krg';
$this->params['breadcrumbs'][] = ['label' => 'Krgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="krg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
