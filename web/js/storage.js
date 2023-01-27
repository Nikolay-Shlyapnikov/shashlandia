const setStorageInfo = (button) => {
    button.classList.add('active');
    const productId = button.closest('.product__item').dataset.id;
    const productInfo = {
        productId: productId,
        productCount: 1
    }
    localStorage.setItem(productInfo.productId, JSON.stringify(productInfo));
    const counterTemplate = document.querySelector('#counterTemplate')
        .content
        .querySelector('.wrapper');
    const counterElements = counterTemplate.cloneNode(true);
    button.innerHTML = counterElements.innerHTML;
};

export {setStorageInfo};
        

    