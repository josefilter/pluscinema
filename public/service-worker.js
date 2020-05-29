const CACHE_NAME = 'CinemaPlus';

const CACHE_ASSETS = [
  '/',
];

self.addEventListener('install', function (e) {
  console.log("[Service Worker] * Instalado.");

  e.waitUntil(
    caches
      .open(CACHE_NAME)
      .then(function (cache) {
        console.log('[Service Worker] Cacheando app shell');
        return cache.addAll(CACHE_ASSETS);
      })
      .then(function () {
        console.log('[Service Worker] Todos los recursos han sido cacheados');
        return self.skipWaiting();
      })
  );

});


self.addEventListener('activate', function (e) {
  console.log("[Service Worker] * Activado.");

  e.waitUntil(
    caches
      .keys()
      .then(function (cacheNames) {
        return Promise.all(
          cacheNames.map(function (cacheName) {
            if (cacheName !== CACHE_NAME) {
              console.log("[Service Worker] Borrando caché antigua: ", cacheName);
              return caches.delete(cacheName);
            }
          })
        )
      })
  );
});


self.addEventListener('fetch', function (e) {
  console.log("[Service Worker] * Fetch.");

  // if (e.request.mode !== 'navigate') {
  //   // Not a page navigation, bail.
  //   return; 
  // }
  if ((e.request.url.indexOf('/auth/') !== -1
    || e.request.url.indexOf('/perfil') !== -1 )) {
    return false;
  }

});


// PUSH
self.addEventListener('push', function (e) {
  // Mantener el service worker a la espera hasta que la notificación sea creada.
  e.waitUntil(
    // Mostrar una notification con título 'Notificación importante' y cuerpo 'Alea iacta est'.
    self.registration.showNotification('Notificación importante', {
      body: 'Alea iacta est',
    })
  );
});