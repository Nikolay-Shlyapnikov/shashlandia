// let bodyQuery = {
        //     id: productItemElement.dataset.id
        // }
        // sendData(
        //     'http://localhost:3000/order.php',
        //     () => {
        //         console.log('ок')
        //     },
        //     () => {
        //         console.log('notOk(');
        //     },
        //     JSON.stringify(bodyQuery)
        // )


        // async function sendData(url, onSuccess, onFail, body) {
//     const options = {
//         body,
//         method: "POST"
//     }
//     const response = await fetch(url, options);
//     const data = await response.json();
//     if (response.ok) onSuccess(data);
//     else {
//         const errors = JSON.parse(response.headers.get('errors'))
//         onFail(errors);
//     }
// }