<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;

//$this->title = 'Головна';
?>
<title>Головна</title>
<div class="site-index">

    <div class="jumbotron">
        <h1>Кінотеатер LightCinema</h1>
    </div>

    <div class="body-content area">

        <div class="list-group">
            <div class="list-group-item row">
                <h2 class="list-group-item-heading">Початок</h2>
        <div class="col-md-3">
                <img src="files/Begin.jpg" class="img-rounded">
            </div>
        <div class="col-md-3 col-md-offset-3 ">
                <p class="text-justify">
                    <?php foreach ($dats as $query): if($query->pi == 0000000001 ){ ?>
                        <?= Html::encode("{$query->dat}") ?>


                </p>
            </div>
                <div class="col-md-4 col-md-offset-4">
                    <h2>Сеанси</h2>
                    <ul class="ul">
                        <li>
                            <?= Html::encode("{$query->sen}") ?>
                        </li>

                    </ul>
                    <?php  } endforeach; ?>
                </div>
            </div>
            <br>
            <div class="list-group-item row">
                <h2 class="list-group-item-heading">Легенда Г'ю Гласса</h2>
                <div class="col-md-3">
                <img src="files/Legend.jpg" class="img-rounded">
                    </div>
                <div class="col-md-3 col-md-offset-3 ">
                <p class="text-justify"> <?php foreach ($dats as $query): if($query->pi == 0000000002 ){ ?>
                        <?= Html::encode("{$query->dat}") ?>

                </p>
                    </div>
                <div class="col-md-4 col-md-offset-4">
                    <h2>Сеанси</h2>
                    <ul class="ul">
                        <li>
                            <?= Html::encode("{$query->sen}") ?>
                        </li>

                    </ul>
                    <?php  } endforeach; ?>
                </div>
            </div>
            <br>
            <div class="list-group-item row">
                <h2 class="list-group-item-heading">Драйв</h2>
                <div class="col-md-3">
                <img src="files/Drive.jpg" class="img-rounded">
                    </div>
                <div class="col-md-3 col-md-offset-3 ">
                <p class="text-justify"> <?php foreach ($dats as $query): if($query->pi == 0000000003 ){ ?>
                        <?= Html::encode("{$query->dat}") ?>

                    </div>
                <div class="col-md-4 col-md-offset-4">
                    <h2>Сеанси</h2>
                    <ul class="ul">
                        <li>
                            <?= Html::encode("{$query->sen}") ?>
                        </li>
                    </ul>
                    <?php  } endforeach; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
