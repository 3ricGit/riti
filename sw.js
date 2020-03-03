const cacheName = 'cache-v1';

const filesToCache = [
    '/',
    'css/bootstrap.css',
    'css/fontawesome-all.css',
    'css/swiper.css',
    'css/magnific-popup.css',
    'css/styles.css',
    'images/intro.jpeg',
    'images/work.jpeg',
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
    'images/bgHeader.jpeg',
    'images/business.jpeg',
    'images/hexagon-green.svg',
    'images/down-arrow.png',
    'webfonts/fa-solid-900.woff2',
    'contact_us.php',
    'apply.php',
    'ventures.php',
    'images/group-psychiatric-clinic.jpg',
    'images/food-clinic.jpg',
    'images/medical-clinic.jpg',
    'images/laboratory-clinic.jpg',
    'images/dental-clinic.jpg',
    'images/physio9.jpg',
    'images/construction.jpg',
    'images/auto-garage.jpeg',
    'images/nurusing-home.jpeg',
    'images/horticulture.jpg',
    'images/food-packaging.png',
    'images/uniform.jpg'

]

// service workers steps
// install event
self.addEventListener('install', (event)=> {
    event.waitUntil(
        caches.open(cacheName)
        .then(cache=> {
            return cache.addAll(filesToCache)
        })
    );
});

// activate event

self.addEventListener('activate', (event)=> {
    console.log('activate event')
})

// fetch event

self.addEventListener('fetch', (event) => {
    event.respondWith(caches.match(event.request)
    .then(cacheResponse => {
        return cacheResponse || fetch(event.request)
    })
    );
})

