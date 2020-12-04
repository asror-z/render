<?php




// Let's start the class
use zetsoft\widgets\market\phpSerial;

$serial = new phpSerial();

// First we must specify the device. This works on both linux and windows (if
// your linux serial device is /dev/ttyS0 for COM1, etc)
$serial->deviceSet("COM3");

$serial->deviceClose();

// Then we need to open it
$serial->deviceOpen();

// To write into
$serial->sendMessage("Hello !");

// Or to read from
$read = $serial->readPort();

// If you want to change the configuration, the device must be closed

$serial->deviceClose();

// We can change the baud rate
$serial->confBaudRate(9600);



// etc...
