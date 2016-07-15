<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Krg */

$this->title = 'Створити новий сеанс та премєру';
$this->params['breadcrumbs'][] = ['label' => 'Krg', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="krg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
