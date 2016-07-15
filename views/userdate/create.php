<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Userdate */

$this->title = 'Create Userdate';
$this->params['breadcrumbs'][] = ['label' => 'Userdates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userdate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
