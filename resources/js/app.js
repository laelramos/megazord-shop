require('./bootstrap');

require('axios');

let token = localStorage.getItem('token');

window.Axios = axios.create({
    baseURL: 'http://localhost:8000/api/',
    headers: {'Authorization': `Bearer ${token}`}
});

//Add a request interceptor
// Axios.interceptors.request.use(function (config) {
//     // Do something before request is sent
//     console.log(config);
//     return config;
// }, function (error) {
//     // Do something with request error
//     return Promise.reject(error);
// });

// Add a response interceptor
Axios.interceptors.response.use(function (response) {
    // Do something with response data
    return response;
}, function (error) {
    // Do something with response error
    if (error.response.status === 401) {
        localStorage.removeItem('token');
        alert('Você foi deslogado!');
        window.location.href = '/login2';
    }
    return Promise.reject(error);
});
