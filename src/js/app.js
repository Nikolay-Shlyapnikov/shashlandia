import {renderProductsList} from './cards-list.js';
import {generateProducts} from "./data.js";
import {updateStorage} from './storage.js';

renderProductsList(generateProducts());

const productRowElement = document.querySelector('.product__row');







productRowElement.addEventListener('click', (evt) => {
    if (evt.target.matches('button.product__button')) {

    }
    if(evt.target.matches('span.product__minus')){
            if (productInfo.productCount == 1) {
                evt.target.closest('button.product__button').classList.remove('active');
                evt.target.closest('button.product__button').innerHTML = '+';
                localStorage.removeItem(productId)
            } else {
            productInfo.productCount--;
            localStorage[productId] = JSON.stringify(productInfo);
        }
        counterSpanElement.innerHTML = `${productInfo.productCount}`;
    };
        if(evt.target.matches('span.product__minus')){
            productInfo.productCount++;
            localStorage[productId] = JSON.stringify(productInfo);
            counterSpanElement.innerHTML = `${productInfo.productCount}`;
        }
    } 
)


