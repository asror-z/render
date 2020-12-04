const http = require('http');

const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {
    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/plain');
    res.end('Hello World');
});

server.listen(port, hostname, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
});










function hasUserMedia() {
    //check if the browser supports the WebRTC
    return !!(navigator.getUserMedia || navigator.webkitGetUserMedia ||
        navigator.mozGetUserMedia);
}

if (hasUserMedia()) {
    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia
        || navigator.mozGetUserMedia;

    //enabling video and audio channels
    navigator.getUserMedia({ video: true, audio: true }, function (stream) {
        var video = document.querySelector('video');

        //inserting our stream to the video tag
        video.src = window.URL.createObjectURL(stream);
    }, function (err) {});
} else {
    alert("WebRTC is not supported");
}
