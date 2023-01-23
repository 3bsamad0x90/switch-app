// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here. Other Firebase libraries
// are not available in the service worker.importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');
/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
*/
firebase.initializeApp({
    apiKey: "AIzaSyDl01O__8q5jQjEsxDU3GVrhs3xs0eHVv0",
    authDomain: "switch-app-b6c33.firebaseapp.com",
    // databaseURL: 'db-url',
    projectId: "switch-app-b6c33",
    storageBucket: "switch-app-b6c33.appspot.com",
    messagingSenderId: "209801609379",
    appId: "1:209801609379:web:744cd1635fabcd6d313f16",
    measurementId: "G-YSX6QMWX0F"
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload) {
    console.log("Message received.", payload);
    const title = "Hello world is awesome";
    const options = {
        body: "Your notificaiton message .",
        icon: "/firebase-logo.png",
    };
    return self.registration.showNotification(
        title,
        options,
    );
});
