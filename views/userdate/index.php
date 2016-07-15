<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Userdatesearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Userdates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userdate-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Userdate', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'email:email',
            'password',
            'date_up',
            // 'date_now',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
