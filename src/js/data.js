import { nanoid } from "nanoid";
const generateProduct = (id) => ({
    // id: nanoid(),
    id: id,
    title: `шашлык из ${Math.random() > 0.5 ? 'барана' : 'свиньи'}`,
    desc: 'блаб',
    price: `100`,
    img_path: './product-1.png'
});

const generateProducts = () => {
    return Array.from({length: 10}, (item, i) => generateProduct(i));

};
export {generateProducts};