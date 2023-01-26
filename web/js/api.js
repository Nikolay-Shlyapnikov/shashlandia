async function getDataArray(urls, onSuccess) {
    const options = {
        method: 'GET'
    };

    const requests = urls.map((url) => fetch(url, options));
    const responses = await Promise.all(requests);
    const data = await Promise.all(responses.map((r) => r.json()));

    onSuccess(data);
}

export {getDataArray};
