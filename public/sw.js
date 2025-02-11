"use strict";

const CACHE_NAME = "offline-cache-v2"; // Ganti versi cache untuk update otomatis
const OFFLINE_URL = "/offline.html";

const filesToCache = [
    OFFLINE_URL,
];

// Install Service Worker dan simpan cache
self.addEventListener("install", (event) => {
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then((cache) => cache.addAll(filesToCache))
            .then(() => self.skipWaiting()) // Aktifkan langsung setelah install
    );
});

// Fetch request: Gunakan cache saat offline
self.addEventListener("fetch", (event) => {
    if (event.request.mode === "navigate") {
        event.respondWith(
            fetch(event.request)
                .catch(() => caches.match(OFFLINE_URL))
        );
    } else {
        event.respondWith(
            caches.match(event.request)
                .then((response) => response || fetch(event.request))
        );
    }
});

// Aktivasi Service Worker dan hapus cache lama
self.addEventListener("activate", (event) => {
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames.map((cacheName) => {
                    if (cacheName !== CACHE_NAME) {
                        return caches.delete(cacheName);
                    }
                })
            );
        })
    );
    return self.clients.claim(); // Paksa semua tab untuk menggunakan SW baru
});

// Paksa update Service Worker
self.addEventListener("controllerchange", () => {
    self.clients.matchAll().then((clients) => {
        clients.forEach((client) => client.navigate(client.url));
    });
});
