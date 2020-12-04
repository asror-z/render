//  Copyright (c) 2015 The WebRTC project authors. All Rights Reserved.
//  Use of this source code is governed by a BSD-style license
//  that can be found in the LICENSE file in the root of the source
//  tree.

'use strict';

var dataSources = ['screen', 'window'];
if (getChromeVersion() >= 50) {
  dataSources.push('tab');
  dataSources.push('audio');
}
var desktopMediaRequestId = '';

chrome.runtime.onConnect.addListener(function(port) {
  port.onMessage.addListener(function(msg) {
    if (msg.type === 'SS_UI_REQUEST') {
      requestScreenSharing(port, msg);
    }

    if (msg.type === 'SS_UI_CANCEL') {
      cancelScreenSharing(msg);
    }
  });
});

function requestScreenSharing(port, msg) {
  // https://developer.chrome.com/extensions/desktopCapture
  // params:
  //  - 'dataSources' Set of sources that should be shown to the user.
  //  - 'targetTab' Tab for which the stream is created.
  //  - 'streamId' String that can be passed to getUserMedia() API
  desktopMediaRequestId =
      chrome.desktopCapture.chooseDesktopMedia(dataSources, port.sender.tab,
        function(streamId, options) {
          if (streamId) {
            msg.type = 'SS_DIALOG_SUCCESS';
            msg.streamId = streamId;
            msg.requestAudio = options && options.canRequestAudioTrack;
          } else {
            msg.type = 'SS_DIALOG_CANCEL';
          }
          port.postMessage(msg);
        });
}

function cancelScreenSharing() {
  if (desktopMediaRequestId) {
    chrome.desktopCapture.cancelChooseDesktopMedia(desktopMediaRequestId);
  }
}

function getChromeVersion() {
  var raw = navigator.userAgent.match(/Chrom(e|ium)\/([0-9]+)\./);
  return raw ? parseInt(raw[2], 10) : -1;
}
