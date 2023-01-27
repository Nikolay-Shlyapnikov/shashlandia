const subcategoryListElement = document.querySelector('.subcategory__list');
const subcategoryTemplate = document.querySelector('#subcategory')
    .content
    .querySelector('.subcategory__item');

const renderSubcategoryList = (subcategories) => {
    subcategoryListElement.innerHTML = '';

    subcategories.forEach(({title, modifier}) => {
        const subcategoryElement = subcategoryTemplate.cloneNode(true);

        subcategoryElement.querySelector('.subcategory__title').textContent = title;
        subcategoryElement.querySelector('.subcategory__img').src = `/img/subcategories/${modifier}`;
        
        subcategoryListElement.append(subcategoryElement);
    });
};

export {renderSubcategoryList};
