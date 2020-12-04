function MyApp() {}

MyApp.prototype = {
    createUA: function () {
        this.ua = new SIP.UA();
    },
};

/* Initialize the app by creating a new MyApp */
var myApp = new MyApp();
//myApp.createUA();

MyApp.prototype = {

    /* Request SIP credentials from the Admin API */
    requestCredentials: function () {
        var xhr = new XMLHttpRequest();
        xhr.onload = this.setCredentials.bind(this);
        xhr.open('get', 'https://api.onsip.com/api/?Action=UserRead&Output=json');

        var userPass = this.addressInput.value + ':' + this.passwordInput.value;
        xhr.setRequestHeader('Authorization',
            'Basic ' + btoa(userPass));
        xhr.send();
    },

    /*
     * When we get a response to the API, read it to build
     * a credentials object for SIP.js configuration.
     */
    setCredentials: function (e) {
        var xhr = e.target;
        var user, credentials;

        if (xhr.status === 200) {
            user = JSON.parse(xhr.responseText).Response.Result.UserRead.User;
            credentials = {
                uri: this.addressInput.value,
                authorizationUser: user.AuthUsername,
                password: user.Password,
                displayName: user.Contact.Name
            };
        } else {
            alert('Authentication failed! Proceeding as anonymous.');
            credentials = {};
        }

        this.createUA(credentials);
    },


    createUA: function (credentials) {
        this.identityForm.style.display = 'none';
        this.userAgentDiv.style.display = 'block';
        this.ua = new SIP.Web.Simple({ ua: credentials });

        this.ua.on('ringing', this.handleInvite.bind(this));
    },

    handleInvite: function (session) {
        this.setSession(session);

        this.setStatus('Ring ring! ' + session.remoteIdentity.uri.toString() + ' is calling!', true);

        this.acceptButton.disabled = false;
    },

    acceptSession: function () {
        if (!this.session) { return; }

        this.acceptButton.disabled = true;
        this.session.answer();
    },

    sendInvite: function () {
        var destination = this.destinationInput.value;
        if (!destination) { return; }

        var session = this.ua.call(destination);
        // Replace `welcome@onsip.com` with your own SIP address
        var session = this.ua.invite('300@10.10.3.31:8089', this.remoteMedia);

        // Save the session so we can listen for status events.
        this.setSession(session);

        // Prevent creating multiple calls.
        this.inviteButton.disabled = true;
    },

    setSession: function (session) {
        session.on('progress', function () {
            this.setStatus('Ringing...', true);
        }.bind(this));

        session.on('accepted', function () {
            this.setStatus('Connected!', true);
        }.bind(this));

        session.on('failed', function () {
            this.setStatus('Call failed. Try again?', false);
            if (session === this.session) {
                delete this.session;
            }
        }.bind(this));

        session.on('bye', function () {
            this.setStatus('Bye! Invite Another?', false);
            if (session === this.session) {
                delete this.session;
            }
        }.bind(this));

        this.session = session;
    },

    /* Update the UI, enabling or disabling new Invites as necessary. */
    setStatus: function (status, disable) {
        this.inviteButton.innerHTML = status;
        this.inviteButton.disabled = disable;
    },

    terminateSession: function () {
        if (!this.session) { return; }

        this.session.terminate();
    },

    sendDTMF: function (tone) {
        if (this.session) {
            this.session.dtmf(tone);
        }
    },

    setVolume: function () {
        this.remoteMedia.volume = (parseInt(this.volumeRange.value, 10) || 0) / 100;
    },

    toggleMute: function () {
        if (!this.session) { return; }

        // Mute and unmute are toggled based on the button's CSS class.
        if (this.muteButton.classList.contains('on')) {
            this.session.unmute();
            this.muteButton.classList.remove('on');
        } else {
            this.session.mute();
            this.muteButton.classList.add('on');
        }
    },

};

function MyApp() {

    this.addressInput = document.getElementById('address-input');
    this.passwordInput = document.getElementById('password-input');
    this.identityForm = document.getElementById('identity-form');
    this.identityForm.addEventListener('submit', function (e) {
        e.preventDefault();
        this.requestCredentials();
    }.bind(this), false);

    this.userAgentDiv = document.getElementById('user-agent');

    this.remoteMedia = document.getElementById('remote-media');

    this.inviteButton = document.getElementById('invite-button');
    this.inviteButton.addEventListener('click', this.sendInvite.bind(this), false);

    this.terminateButton = document.getElementById('terminate-button');
    this.terminateButton.addEventListener('click', this.terminateSession.bind(this), false);

    this.volumeRange = document.getElementById('volume-range');
    this.volumeRange.addEventListener('change', this.setVolume.bind(this), false);

    this.muteButton = document.getElementById('mute-button');
    this.muteButton.addEventListener('click', this.toggleMute.bind(this), false);

    this.destinationInput = document.getElementById('destination-input');

    this.acceptButton = document.getElementById('accept-button');
    this.acceptButton.addEventListener('click', this.acceptSession.bind(this), false);
}

/* In setSession */
session.on('refer', session.followRefer(function (req, newSession) {
    this.setStatus('Refer!', true);
    this.setSession(newSession);
}.bind(this)));


