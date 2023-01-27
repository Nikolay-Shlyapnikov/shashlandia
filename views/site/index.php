<?php

/** @var yii\web\View $this */
/** @var app\models\Category[] $categories */

use app\assets\IndexAsset;
use yii\helpers\Html;
use yii\helpers\Json;

$this->title = Yii::$app->name . ' | Главная';
IndexAsset::register($this);

$this->registerJsFile('js/main.js', ['type' => 'module']);

?>

<section class="delivery-meat">
    <div class="delivery-meat__wrapper">
        <div class="delivery-meat__info">
            <h1 class="delivery-meat__title">Доставим всё для<br> шашлыка и пикника</h1>
            <a href="#categories" class="primary-button delivery-meat__button">Начать покупки</a>
        </div>
        <video class="delivery-meat__video" autoplay muted loop src="<?= Yii::getAlias('@videos') ?>/delivery-meat.mp4"></video>
    </div>
    <div id="categories" class="invisible-separator"></div>
</section>
<section class="category">
    <div class="container">
        <h2 class="category__title">Категории</h2>
        <div class="category__wrapper">

            <?php foreach ([] as $category): ?>
                <?php [$top, $bottom] = array_values(Json::decode($category['wrapper'])); ?>

                <?php if ($top): ?>
                    <div class="category__item-wrapper">
                <?php endif; ?>

                <a class="category__item category__item--<?= Html::encode($category['modifier']) ?>" href="#">
                    <h3 class="category__item-title"><?= Html::encode($category['title']) ?></h3>
                    <p class="category__item-text"><?= $category['desc'] ?></p>
                    <div class="category__item-image"></div>
                </a>

                <?php if ($bottom): ?>
                    </div>
                <?php endif; ?>

            <?php endforeach; ?>

        </div>
    </div>
    
</section>
<section id="services" class="services">
    <div class="container">
        <h2 class="services__title">Дополнительные услуги</h2>
        <div class="services__wrapper">
            <div class="services__text">
                <h3 class="services__text-title">Профессиональный мангальщик</h3>
                <p class="services__text-text">Профессиональный мангальщик, позаботится о Вашем времени и возьмёт всю работу по приготовлению шашлыка на себя. А Вы в это время сможете отдыхать и наслаждаться компанией родных и друзей.</p>
            </div>
            <div class="services__image"></div>
            <div class="services__info">

                <div class="services__info-wrapper">
                    <div class="services__info-name">Мангальщик</div>
                    <div class="services__info-price">
                        <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24">
                            <path d="M13.5 3H7v9H5v2h2v2H5v2h2v3h2v-3h4v-2H9v-2h4.5c3.04 0 5.5-2.46 5.5-5.5S16.54 3 13.5 3zm0 9H9V5h4.5C15.43 5 17 6.57 17 8.5S15.43 12 13.5 12z"></path>
                        </svg>
                        <span>1750</span>
                    </div>
                    <div class="services__info-time">
                        <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24">
                            <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path>
                            <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"></path>
                        </svg>
                        <span>1 час</span>
                    </div>
                    <button class="services__button">Нанять</button>
                </div>

            </div>
        </div>
    </div>
    <div id="menu" class="invisible-separator"></div>
</section>
<section class="menu">
    <div class="container">
    <h2 class="menu__title">Меню</h2>
        <div class="subcategory__wrapper">
            <ul class="subcategory__list">
                
            </ul>
        </div>
        <div class="product__row"></div>
    </div>
</section>

<template id="category">
    <a class="category__item" href="#">
        <h3 class="category__item-title"></h3>
        <p class="category__item-text"></p>
        <div class="category__item-image"></div>
    </a>
</template>

<template id="subcategory">
    <li class="subcategory__item">
        <img class="subcategory__img" src="" alt="" >
        <div class="subcategory__title"></div>
    </li>
</template>

<template id="counterTemplate">
    <div class="wrapper">
        <div class="product__minus">
           -
        </div>
        <div class="product__counter">1</div>
        <div class="product__plus">
           +
        </div>
    </div>
</template>

<template id="product_card">
    <div class="product__item" data-id="1">
        <img src="" alt="" class="product__img">
        <p class="product__name"></p>
        <div class="product__button-wrapper">
            <div class="product__input-wrapper">
                <input class='product__input-radio' type="radio" name="weight-id1" id="p1-id1" checked>
                <label class='product__label-radio' for="p1-id1">1.5кг</label>

                <input class='product__input-radio' type="radio" name="weight-id1" id="p2-id1">
                <label class='product__label-radio' for="p2-id1">3кг</label>
                <span class="product__price"><span></span>&#8381;</span>
            </div>
            <button class="product__button primary__button">+</button>
        </div>
    </div>
</template>