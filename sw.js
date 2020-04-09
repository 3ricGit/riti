const cacheName = 'cache-14';

const filesToCache = [
    '/',
    'index.php',
    'contact_us.php',
    'apply.php',
    'ventures.php',
    '/about.php',
    'css/bootstrap.css',
    'css/fontawesome-all.css',
    'css/swiper.css',
    'css/magnific-popup.css',
    'css/styles.css',
    'images/intro.jpeg',
    'js/jquery.min.js',
    'js/popper.min.js',
    'js/bootstrap.min.js',
    'js/jquery.easing.min.js',
    'js/swiper.min.js',
    'js/jquery.magnific-popup.js',
    'js/morphext.min.js',
    'js/isotope.pkgd.min.js',
    'js/validator.min.js',
    'js/scripts.js',
    'images/work.jpeg',
    'images/bgHeader.jpeg',
    'images/hexagon-green.svg',
    'images/business.jpeg',
    'images/down-arrow.png',
    'webfonts/fa-solid-900.woff2',
    'images/favicon.png',
    'images/laboratory-clinic.jpg',
    'images/physio9.jpg',
    'images/construction.jpg',
    'images/nurusing-home.jpeg',
    'images/horticulture.jpg',
    'images/uniform.jpg',
    'images/img3.jpeg',
    'images/medical%20clinic.jpg',
    'images/food%20and%20diatetic.jpg',
    'images/dental%20clinic.jpg',
    'images/auto-garage.jpg',
    'images/food%20supply.jpg',
    'images/counselling%202.jpg',
    'images/psychiatric.jpg',
    'images/school-of-counselling.jpg',
    'images/RITIBRONCHUREFINAL.jpg',
    'images/RITILOGOFINAL(1).png',
    '/images/marketing.jpg',
    '/images/food.jpeg'

]

// service workers steps
// install event
self.addEventListener('install', (event) => {
    self.skipWaiting();
    event.waitUntil(caches.open(cacheName).then(cache => {
        return cache.addAll(filesToCache)
    }));
});

// activate event

this.addEventListener('activate', function (event) {
    var cachesToKeep = ['cache-v14'];

    event.waitUntil(caches.keys().then(function (keyList) {
        return Promise.all(keyList.map(function (key) {
            if (cachesToKeep.indexOf(key) === -1) {
                return caches.delete(key);
            }
        }));
    }));
});

// fetch event

self.addEventListener('fetch', (event) => {
    event.respondWith(caches.match(event.request).then(cacheResponse => {
        return cacheResponse || fetch(event.request)
    }));
})
