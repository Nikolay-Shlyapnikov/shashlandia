const setStorageInfo = () => {};

        const addProductButton = e.target;
        addProductButton.classList.add('active');
        const productId = addProductButton.closest('.product__item').dataset.id;

        const productInfo = {
            id: productId,
            productCount: 1
        }
        localStorage.setItem(productId.id, JSON.stringify(productInfo));
        const spanElements = spanTemplate.cloneNode(true);

        spanElements
            .querySelector('.product__counter')
            .textContent = localStorage.getItem(productId)
                ? JSON.parse(localStorage.getItem(productId)).productCount
                : '1';



                const spanTemplate = document.querySelector('#spansTemplate')
                .content
                .querySelector('.wrapper');
        addProductButton.innerHTML = spanElements.innerHTML;

        const minusSpanElement = addProductButton.querySelector('.product__minus');
        const plusSpanElement = addProductButton.querySelector('.product__plus');
        const counterSpanElement = addProductButton.querySelector('.product__counter');

        localStorage.setItem('productId', productId);