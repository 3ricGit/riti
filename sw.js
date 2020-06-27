const cacheName = 'cache-v5';

const filesToCache = [];

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
  var cachesToKeep = ['cache-v5'];

  event.waitUntil(
    caches.keys().then(function (keyList) {
      return Promise.all(
        keyList.map(function (key) {
          if (cachesToKeep.indexOf(key) !== -1) {
            return caches.delete(key);
          }
        })
      );
    })
  );
});

self.addEventListener('fetch', (event) => {
  event.respondWith(
    fetch(event.request)
      .then((response) => {
        if (response.status === 404) {
          return caches.match('404.php');
        }
        return response;
      })
      .catch((error) => {
        console.log('Error, ', error);
        return caches.match('offline.php');
      })
  );
});
