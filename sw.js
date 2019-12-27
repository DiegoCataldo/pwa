importScripts('./js/cache-polyfill.js');
importScripts('./js/jquery-3.4.1.min.js');

importScripts('./js/popper.min.js');

importScripts('./js/bootstrap.min.js');

importScripts('./js/mdb.min.js');
importScripts('./js/addons-pro/stepper.js');


var CACHE_VERSION = 'app-v1922';
var CACHE_FILES = [
    './',
    './script.js',
    './img/favicon.png',
    './modulos/general/prueba.php',
    './modulos/login/headerLogin.php',
    './login.php',
    './login2.php',
    './modulos/general/header.php',
    './css/bootstrap.min.css',
    './css/mdb.min.css',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css',
    './modulos/login/style.css',
    './css/style.css',
    './css/menu.css',
    'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css?ver=3.5.2',
    './css/theme.css',
    './css/addons-pro/steppers.min.css',
    './modulos/agregarMant/agregarMant.js',
    './database/estaciones.json'

];

self.addEventListener('install', function(event) {
    event.waitUntil(
        caches.open(CACHE_VERSION)
        .then(function(cache) {
            console.log('Opened cache');
            return cache.addAll(CACHE_FILES);
        })
    );
});

self.addEventListener('fetch', function(event) {
    let online = navigator.onLine
    if (!online) {
        event.respondWith(
            caches.match(event.request).then(function(res) {
                if (res) {
                    return res;
                }
                requestBackend(event);
            })
        )
    }
});

function requestBackend(event) {
    var url = event.request.clone();
    return fetch(url).then(function(res) {
        //if not a valid response send the error
        if (!res || res.status !== 200 || res.type !== 'basic') {
            return res;
        }

        var response = res.clone();

        caches.open(CACHE_VERSION).then(function(cache) {
            cache.put(event.request, response);
        });

        return res;
    })
}

self.addEventListener('activate', function(event) {
    event.waitUntil(
        caches.keys().then(function(keys) {
            return Promise.all(keys.map(function(key, i) {
                if (key !== CACHE_VERSION) {
                    return caches.delete(keys[i]);
                }
            }))
        })
    )
});