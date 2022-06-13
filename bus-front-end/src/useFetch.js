import { useEffect, useState } from 'react';

const useFetch = (url) => {
    const [data, setData] = useState(null);
    const [isLoading, setLoading] = useState(true);
    const [error, setError] = useState(null);

    useEffect(() => {
        const abortController = new AbortController();
        fetch('http://127.0.0.1:8000/api/' + url, { signal: abortController.signal }).then(res => {
            if (!res.ok) {
                setLoading(false);
                setError("could not fetch the data for that resource");
                return;
            } else {
                return res.json();
            }
        }).then(data => {
            setData(data);
            setLoading(false);
        }).catch(err => {
            if (err.name === 'AbortError') {

            } else {
                setLoading(false);
                setError(err);
            }
        });
        return () => abortController.abort();
    }, ['http://127.0.0.1:8000/api/' + url]);

    return { data, isLoading, error }
}

export default useFetch;