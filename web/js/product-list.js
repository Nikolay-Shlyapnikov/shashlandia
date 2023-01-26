const productsListElement = document.querySelector('.product__row');
productsListElement.innerHTML = '';
const productTemplate = document.querySelector('#product_card')
    .content
    .querySelector('.product__item');

const renderProductsList = (products) => {
    for (const product of products) {
        const productElement = productTemplate.cloneNode(true);

        productElement.dataset.id = product.id;

        productElement.querySelector('img.product__img').src = `img/products/${product.desc}`;
        productElement.querySelector('.product__name').textContent = product.title;
        productElement.querySelector('.product__price span').textContent = product.price;

        [[1, 2], [3, 4]].forEach((item, i) => {
            productElement.querySelector(`input:nth-child(${item[0]})`).setAttribute('id', `p${i}-${product.id}`);
            productElement.querySelector(`input:nth-child(${item[0]})`).setAttribute('name', `weight-${product.id}`);
            productElement.querySelector(`label:nth-child(${item[1]})`).setAttribute('for', `p${i}-${product.id}`);
        });
        if(JSON.parse(localStorage.getItem([product.id]))){
            const counterTemplate = document.querySelector('#counterTemplate')
                .content
                .querySelector('.wrapper');
        const counterElements = counterTemplate.cloneNode(true); 
        
        counterElements.querySelector('.product__counter')
        .textContent = JSON.parse(localStorage.getItem([product.id])).productCount;

        productElement.querySelector('.product__button').classList.add('active');
        productElement.querySelector('.product__button').innerHTML = counterElements.innerHTML
        }
        
        productsListElement.append(productElement);
    }
}
export {renderProductsList};
