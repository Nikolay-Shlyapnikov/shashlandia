<?php

/** @var yii\web\View $this */
/** @var app\models\Category[] $categories */

use app\assets\CartAsset;
use yii\helpers\Html;
use yii\helpers\Json;

$this->title = Yii::$app->name . ' | Корзина';
CartAsset::register($this);

$this->registerJsFile('js/main.js', ['type' => 'module']);

?>

<h1 class="cart__title">Корзина</h1>
<section class="cart__product-list">
    <h2 class="visually-hidden">Продукты</h2>
    <div class="cart__product-wrapper">
    <div class="cart__product" data-id="">
            <div class="cart__product-info">
                <img src="" alt="" class="product__image">
                <div class="cart__product-text">
                    <div class="cart__product-name">Шашлык из свиной шейки</div>
                    <div class="cart__product-weight">1.5кг.</div>
                </div>
            </div>
            <div class="cart__product-count">
                <div class="product__minus">-</div>
                <div class="product__counter">1</div>
                <div class="product__plus">+</div>
            </div>
            <div class="cart__product-price">320&#8381;</div>
            <div class="cart__product-cross"></div>
        </div>
        <div class="cart__product" data-id="">
            <div class="cart__product-info">
                <img src="" alt="" class="product__image">
                <div class="cart__product-text">
                    <div class="cart__product-name">Шашлык из свиной шейки</div>
                    <div class="cart__product-weight">1.5кг.</div>
                </div>
            </div>
            <div class="cart__product-count">
                <div class="product__minus">-</div>
                <div class="product__counter">1</div>
                <div class="product__plus">+</div>
            </div>
            <div class="cart__product-price">320&#8381;</div>
            <div class="cart__product-cross"></div>
        </div>
        <div class="cart__product" data-id="">
            <div class="cart__product-info">
                <img src="" alt="" class="product__image">
                <div class="cart__product-text">
                    <div class="cart__product-name">Шашлык из свиной шейки</div>
                    <div class="cart__product-weight">1.5кг.</div>
                </div>
            </div>
            <div class="cart__product-count">
                <div class="product__minus">-</div>
                <div class="product__counter">1</div>
                <div class="product__plus">+</div>
            </div>
            <div class="cart__product-price">320&#8381;</div>
            <div class="cart__product-cross"></div>
        </div>
        <div class="cart__product" data-id="">
            <div class="cart__product-info">
                <img src="" alt="" class="product__image">
                <div class="cart__product-text">
                    <div class="cart__product-name">Шашлык из свиной шейки</div>
                    <div class="cart__product-weight">1.5кг.</div>
                </div>
            </div>
            <div class="cart__product-count">
                <div class="product__minus">-</div>
                <div class="product__counter">1</div>
                <div class="product__plus">+</div>
            </div>
            <div class="cart__product-price">320&#8381;</div>
            <div class="cart__product-cross"></div>
        </div>
        <div class="cart__product" data-id="">
            <div class="cart__product-info">
                <img src="" alt="" class="product__image">
                <div class="cart__product-text">
                    <div class="cart__product-name">Шашлык из свиной шейки</div>
                    <div class="cart__product-weight">1.5кг.</div>
                </div>
            </div>
            <div class="cart__product-count">
                <div class="product__minus">-</div>
                <div class="product__counter">1</div>
                <div class="product__plus">+</div>
            </div>
            <div class="cart__product-price">320&#8381;</div>
            <div class="cart__product-cross"></div>
        </div>
        <div class="cart__product" data-id="">
            <div class="cart__product-info">
                <img src="" alt="" class="product__image">
                <div class="cart__product-text">
                    <div class="cart__product-name">Шашлык из свиной шейки</div>
                    <div class="cart__product-weight">1.5кг.</div>
                </div>
            </div>
            <div class="cart__product-count">
                <div class="product__minus">-</div>
                <div class="product__counter">1</div>
                <div class="product__plus">+</div>
            </div>
            <div class="cart__product-price">320&#8381;</div>
            <div class="cart__product-cross"></div>
        </div>
        <div class="cart__product" data-id="">
            <div class="cart__product-info">
                <img src="" alt="" class="product__image">
                <div class="cart__product-text">
                    <div class="cart__product-name">Шашлык из свиной шейки</div>
                    <div class="cart__product-weight">1.5кг.</div>
                </div>
            </div>
            <div class="cart__product-count">
                <div class="product__minus">-</div>
                <div class="product__counter">1</div>
                <div class="product__plus">+</div>
            </div>
            <div class="cart__product-price">320&#8381;</div>
            <div class="cart__product-cross"></div>
        </div>
        <div class="cart__product" data-id="">
            <div class="cart__product-info">
                <img src="" alt="" class="product__image">
                <div class="cart__product-text">
                    <div class="cart__product-name">Шашлык из свиной шейки</div>
                    <div class="cart__product-weight">1.5кг.</div>
                </div>
            </div>
            <div class="cart__product-count">
                <div class="product__minus">-</div>
                <div class="product__counter">1</div>
                <div class="product__plus">+</div>
            </div>
            <div class="cart__product-price">320&#8381;</div>
            <div class="cart__product-cross"></div>
        </div>
        <div class="cart__product" data-id="">
            <div class="cart__product-info">
                <img src="" alt="" class="product__image">
                <div class="cart__product-text">
                    <div class="cart__product-name">Шашлык из свиной шейки</div>
                    <div class="cart__product-weight">1.5кг.</div>
                </div>
            </div>
            <div class="cart__product-count">
                <div class="product__minus">-</div>
                <div class="product__counter">1</div>
                <div class="product__plus">+</div>
            </div>
            <div class="cart__product-price">320&#8381;</div>
            <div class="cart__product-cross"></div>
        </div>
        <div class="cart__product" data-id="">
            <div class="cart__product-info">
                <img src="" alt="" class="product__image">
                <div class="cart__product-text">
                    <div class="cart__product-name">Шашлык из свиной шейки</div>
                    <div class="cart__product-weight">1.5кг.</div>
                </div>
            </div>
            <div class="cart__product-count">
                <div class="product__minus">-</div>
                <div class="product__counter">1</div>
                <div class="product__plus">+</div>
            </div>
            <div class="cart__product-price">320&#8381;</div>
            <div class="cart__product-cross"></div>
        </div>
        <div class="cart__product" data-id="">
            <div class="cart__product-info">
                <img src="" alt="" class="product__image">
                <div class="cart__product-text">
                    <div class="cart__product-name">Шашлык из свиной шейки</div>
                    <div class="cart__product-weight">1.5кг.</div>
                </div>
            </div>
            <div class="cart__product-count">
                <div class="product__minus">-</div>
                <div class="product__counter">1</div>
                <div class="product__plus">+</div>
            </div>
            <div class="cart__product-price">320&#8381;</div>
            <div class="cart__product-cross"></div>
        </div>
        <div class="cart__product" data-id="">
            <div class="cart__product-info">
                <img src="" alt="" class="product__image">
                <div class="cart__product-text">
                    <div class="cart__product-name">Шашлык из свиной шейки</div>
                    <div class="cart__product-weight">1.5кг.</div>
                </div>
            </div>
            <div class="cart__product-count">
                <div class="product__minus">-</div>
                <div class="product__counter">1</div>
                <div class="product__plus">+</div>
            </div>
            <div class="cart__product-price">320&#8381;</div>
            <div class="cart__product-cross"></div>
        </div>
        <div class="cart__product" data-id="">
            <div class="cart__product-info">
                <img src="" alt="" class="product__image">
                <div class="cart__product-text">
                    <div class="cart__product-name">Шашлык из свиной шейки</div>
                    <div class="cart__product-weight">1.5кг.</div>
                </div>
            </div>
            <div class="cart__product-count">
                <div class="product__minus">-</div>
                <div class="product__counter">1</div>
                <div class="product__plus">+</div>
            </div>
            <div class="cart__product-price">320&#8381;</div>
            <div class="cart__product-cross"></div>
        </div>
    </div>
   
</section>
<section class="cart__user-info">
    <h2 class="user-info__title">Заполните информацию</h2>
    <form action="" method="">
        <h3 class="user-info__input-title">Персональные данные</h3>
        <div class="user-info__help-wrapper">
            <input class="user-info__input" name="name" type="text"  placeholder="Имя*">
            <div class="help-block"></div>
        </div>
        <div class="user-info__input-wrapper">
            <div class="user-info__help-wrapper">
                <input class="user-info__input" name="phone" type="text"  placeholder="Контактный телефон*">
                <div class="help-block"></div>
            </div>
            <div class="user-info__help-wrapper">
                <input class="user-info__input" name="email" type="email"  placeholder="E-mail*">
                <div class="help-block"></div>
            </div>
        </div>
        <h3 class="user-info__input-title">Способ доставки</h3>
        <div class="user-info__radio-wrapper">
            <input type="radio" name="delivery" id="delivery-1" checked>
            <label for="delivery-1">Доставить по адресу</label>
            <input type="radio" name="delivery" id="delivery-2">
            <label for="delivery-2">Самовызов</label>
        </div>
        <h3 class="user-info__input-title">Адресс</h3>
        <div class="user-info__help-wrapper">
            <input class="user-info__input" name="street" type="text"  placeholder="Улица, дом*">
            <div class="help-block"></div>
        </div>
        <div class="user-info__input-wrapper">
            <div class="user-info__help-wrapper">
                <input class="user-info__input" name="street" type="text"  placeholder="Подъезд">
                <div class="help-block"></div>
            </div>
            <div class="user-info__help-wrapper">
                <input class="user-info__input" name="street" type="text"  placeholder="Этаж">
                <div class="help-block"></div>
            </div>
            <div class="user-info__help-wrapper">
                <input class="user-info__input" name="street" type="text"  placeholder="Квартира">
                <div class="help-block"></div>
            </div>
        </div>
        <h3 class="user-info__input-title">Укажите дату и время доставки</h3>
        <input type="date" name="date" id="date">
        <label for="date">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.8 1V4.2M12.2 1V4.2M1 7.4H17M4.2 2.6H13.8C15.5673 2.6 17 4.03269 17 5.8V13.8C17 15.5673 15.5673 17 13.8 17H4.2C2.43269 17 1 15.5673 1 13.8V5.8C1 4.03269 2.43269 2.6 4.2 2.6Z" stroke="#AAAAAA" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </label>
        <input type="time" name="time" id="time">
        <label for="time">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.4 12.2L9.4688 10.2688C9.16872 9.96881 9.00009 9.56191 9 9.1376V4.2M17 9C17 13.4183 13.4183 17 9 17C4.58172 17 1 13.4183 1 9C1 4.58172 4.58172 1 9 1C13.4183 1 17 4.58172 17 9Z" stroke="#AAAAAA" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </label>
        <div class="user-info__last-row">
            <a href="" class="user-info__comment">У меня есть комментарий</a>
            <button class='primary-button primary-button--black' type="submit">Заказать</button>
        </div>
    </form>
</section>
<section class="cart__recomend">
    <h2 class="recomend__title">Рекомендуем:</h2>
    <div class="recomend__product"></div>
</section>
<section class="cart__order-result">
    <div class="order-result__wrapper">
        <h2 class="order-result__title">Ваш заказ</h2>
        <div class="order-result__row">
            <div class="order-result__item">Товаров:</div>
            <div class="order-result__item-value">3 товара</div>
        </div>
        <div class="order-result__row">  
            <div class="order-result__item">Сумма:</div>
            <div class="order-result__item-value">960 &#8381;</div>
        </div>
        <div class="order-result__row">
            <div class="order-result__item">Доставка</div>
            <div class="order-result__item-value">960 &#8381;</div>
        </div>
        <div class="order-result__zone">Зона доставки - <span>2</span></div>
        <div class="order-result__row order-result__row--total">
            <div class="order-result__item">Общая сумма</div>
            <div class="order-result__item-value">1710 &#8381;</div>
        </div>
        <button class="order-result__pay">Оплатить</button>
    </div>
</section>
