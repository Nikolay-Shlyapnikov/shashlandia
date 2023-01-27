const plusCountProduct = (productInfo, target) => {
    productInfo.productCount++;
    localStorage[productInfo.productId] = JSON.stringify(productInfo);
    target.previousElementSibling.innerHTML = `${productInfo.productCount}`;
}
const minusCountProduct = (productInfo, target) => {
    if (productInfo.productCount == 1) {
        target.closest('button.product__button').classList.remove('active');
        target.closest('button.product__button').innerHTML = '+';
        localStorage.removeItem(productInfo.productId)
    } else {
        productInfo.productCount--;
        localStorage[productInfo.productId] = JSON.stringify(productInfo);
        target.nextElementSibling.innerHTML = `${productInfo.productCount}`;
    }
}

export {minusCountProduct, plusCountProduct};