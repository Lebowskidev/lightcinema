<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Datainformation */

$this->title = 'Create Datainformation';
$this->params['breadcrumbs'][] = ['label' => 'Datainformations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datainformation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
