/**
 *
 * Author:  O'tkir Jakupov
 * Created: 6/1/2020 4:15 PM
 */


// Create a user agent named bob, connect, and register to receive invitations.
//start funksiya berilyapti reg uchun
var bob = new SIP.UA({
    uri: 'bob@example.com',
    ws_servers: ['wss://sip-ws.example.com'],
    register: true
});
bob.start();
bob.on('message', onMessage);

function onMessage(message) {
    alert(message.body);
}
//registerni xato qilib beradigan funcsiya
var numToRegister = 2;
var numRegistered = 0;
var registrationFailed = false;
var markAsRegistered = function () {
    numRegistered += 1;
    if (numRegistered >= numToRegister && !registrationFailed) {
        setupInterfaces();
    }
};
var failRegistration = function () {
    registrationFailed = true;
    failInterfaceSetup();
};
// We don't want to proceed until we've registered all users.
// For each registered user, increase the counter.
aliceSimple.on('registered', markAsRegistered);
bobSimple.on('registered', markAsRegistered);
// If any registration fails, then we need to disable the app and tell the
// user that we could not register them.
aliceSimple.on('registrationFailed', failRegistration);
bobSimple.on('registrationFailed', failRegistration);
// Unregister the user agents and terminate all active sessions when the
// window closes or when we navigate away from the page
window.onunload = function () {
    aliceSimple.stop();
    bobSimple.stop();
};

