import axios from 'axios';

// function checkToken(to, from, next) {

// }

const instance = axios.create({
    baseURL: 'https://localhost:8000/',
    headers: {
        'Content-type': 'application/json',
        'Authorization': 'API-X-TOKEN ' + process.env.VUE_APP_TOKEN
    }
});

instance.interceptors.request.use((config) => {
    config.url = `${config.url}`;
    return config;
});

export default instance;