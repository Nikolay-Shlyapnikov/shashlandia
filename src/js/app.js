const modalTemplate = document.querySelector('#modal')
    .content
    .querySelector('.window');
const productTemplate = document.querySelector('#product');

const renderOrderInfo = ({products, totalPrice}) =>{
    
    const modalElement = modalTemplate.cloneNode(true);
    document.append(modalElement);
    const productList = modalElement.querySelector('.cart__product-wrapper');
    for (const product  in products) {
        const productElement = productTemplate.cloneNode(true);
        productElement.querySelector('.cart__product-image>img').src = `/img/products/${product.img_path}`;
        productElement.querySelector('.product__counter').textContent = product.count;
        productElement.querySelector('.cart__product-name').textContent = product.name;
        productElement.querySelector('.cart__product-weight').textContent = product.weight;
    }
        modalElement.querySelector('.subcategory__img').src = `/img/subcategories/${modifier}`;
}


import {getDataArray} from "./api.js";
import {renderOrderInfo} from "./order-info.js";

const data =     
{
    totalPrice: '1500',
    products: [
        {
            name: 'Шашлык',
            count: '10',
        },
        {
            name: 'Шашлык',
            count: '10',
        },
    ]
}

document.querySelectorAll('.order__info').forEach((orderBtn) =>{
    orderBtn.addEventListener('click', () => {
       const url = 'http://localhost:80/orders/' + orderBtn.parentElement.dataset.order_id;
       //getDataArray(url, renderOrderInfo(order))
       renderOrderInfo(data)
    });
});