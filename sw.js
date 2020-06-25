const cacheName = 'cache-v2';

const filesToCache = [
  '404.php',
  'css/bootstrap.css',
  'css/fontawesome-all.css',
  'offline.php',
  'css/magnific-popup.css',
  'css/styles.css',
  'css/swiper.css',
  'images/final.png',
  'images/hexagon-green.svg',
  'js/bootstrap.min.js',
  'js/isotope.pkgd.min.js',
  'js/jquery.easing.min.js',
  'js/jquery.magnific-popup.js',
  'js/jquery.min.js',
  'js/morphext.min.js',
  'js/popper.min.js',
  'js/pwa.js',
  'js/scripts.js',
  'js/swiper.min.js',
  'js/validator.min.js',
  'manifest.json',
  'images/RITILOGOFINAL(1).png',
  'images/bg.jpg',
  'images/business.jpeg',
  'images/clear.jpg',
  'images/down-arrow.png',
  'images/favicon.png',
  'images/work.jpeg',
  'index.php',
];

self.addEventListener('install', (event) => {
  console.log('Attempting to install service worker and cache static assets');
  self.skipWaiting();
  event.waitUntil(
    caches.open(cacheName).then((cache) => {
      return cache.addAll(filesToCache);
    })
  );
});

// // activate event

this.addEventListener('activate', function (event) {
  var cachesToKeep = ['cache-v2'];

  event.waitUntil(
    caches.keys().then(function (keyList) {
      return Promise.all(
        keyList.map(function (key) {
          if (cachesToKeep.indexOf(key) === -1) {
            return caches.delete(key);
          }
        })
      );
    })
  );
});

self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches
      .match(event.request)
      .then((response) => {
        if (response) {
          return response;
        }
        console.log('Network request for ', event.request.url);
        return fetch(event.request).then((response) => {
          if (response.status === 404) {
            return caches.match('404.php');
          }
          return caches.open(cacheName).then((cache) => {
            cache.put(event.request.url, response.clone());
            return response;
          });
        });
      })
      .catch((error) => {
        console.log('Error, ', error);
        return caches.match('offline.php');
      })
  );
});
