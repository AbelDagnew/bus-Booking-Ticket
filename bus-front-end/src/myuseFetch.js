import { useEffect, useState } from 'react';

const myuseFetch = (url) => {
    let data = null;
    let isLoading = true;
    let error = null;

    const abortController = new AbortController();
    return fetch('http://127.0.0.1:8000/api/' + url, { signal: abortController.signal }).then(res => {
        if (!res.ok) {

            return "Error";
        } else {
            return res.json();
        }
    }).then(data => {
        return data;
    }).catch(err => {
        if (err.name === 'AbortError') {

        } else {
            return "Error";
        }
    });

    return () => abortController.abort();


}

export default myuseFetch;