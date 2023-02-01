import {getDataArray} from "./api.js";
import {renderCategoryList} from "./category-list.js";
import {renderSubcategoryList} from "./subcategory-list.js";
import { renderProductsList } from "./product-list.js";
import {setStorageInfo} from './storage.js';
import {plusCountProduct, minusCountProduct} from './productCart.js'
import { cartCounter } from './cart.js';
getDataArray(
    [
        'http://localhost:80/categories',
        'http://localhost:80/subcategories',
        'http://localhost:80/products',
    ],
    ([categories, subcategories, products]) => {
        renderCategoryList(categories);
        renderSubcategoryList(subcategories);
        renderProductsList(products);
    }
);

const headerBurgerButton = document.querySelector('.page-header__burger');
headerBurgerButton.addEventListener('click', (evt) => {
    headerBurgerButton.classList.toggle('active');
    headerBurgerButton.previousElementSibling.classList.toggle('active');
});
//cartCounter();
const productsListElement = document.querySelector('.product__row');

productsListElement.addEventListener('click', (evt) => {
    if (evt.target.matches('button.product__button')) {
        setStorageInfo(evt.target);

    } else if (evt.target.closest('div.product__minus')) {
        const productId = evt.target.closest('.product__item').dataset.id;
        const productInfo = JSON.parse(localStorage.getItem(productId));
        minusCountProduct(productInfo, evt.target);

    } else if (evt.target.closest('div.product__plus')) {
        const productId = evt.target.closest('.product__item').dataset.id;
        const productInfo = JSON.parse(localStorage.getItem(productId));
        plusCountProduct(productInfo, evt.target);

    }
});