<?php

/** @var yii\web\View $this */

use app\assets\PaymentAsset;
use yii\helpers\Html;

$this->title = Yii::$app->name . ' | Оплата и доставка';
PaymentAsset::register($this);

?>
<section class="payment">
    <div class="container">
        <h1>Оплата и доставка</h1>
        <ul>

            <?php foreach (Yii::$app->params['paymentItems'] as $item): ?>
                <li>
                    <h3><?= Html::encode($item['title']) ?></h3>
                    <p><?= Html::encode($item['desc']) ?></p>

                    <?php if (isset($item['icons'])): ?>
                        <ul>

                            <?php foreach ($item['icons'] as $icon): ?>
                                <li>
                                    <img
                                        src="<?= Yii::getAlias('@images') . '/' . Html::encode($icon['src']) ?>"
                                        width="<?= Html::encode($icon['width']) ?>"
                                        alt=""
                                    >
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    <?php endif; ?>

                </li>
            <?php endforeach; ?>

        </ul>
    </div>
</section>

<section class="map">
    <div class="container">
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4043221a80f3e2677d408ebd102907980557d16c3166855ecdfef72f6ae9ef0b&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe>
    </div>
</section>
