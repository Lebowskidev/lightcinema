<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Lor */

$this->title = 'Create Lor';
$this->params['breadcrumbs'][] = ['label' => 'Lors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
