<?php


?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test page for object fbcontrol</title>
</head>
<script type="text/javascript">
    var ser;
    function plugin0()
    {
        return document.getElementById('plugin0');
    }
    plugin = plugin0;

    function recv(bytes, size)
    {
        for(var i=0;i<size;++i)
        {
            ser.send(bytes[i]);
        }
    }

    function pluginLoaded()
    {
        ser = plugin().Serial;// Get a Serial object
        ser.open("COM3");// Open a port
        ser.set_option(115200,0,8,0,0);// Set port options
        ser.recv_callback(recv); // Callback function for recieve data
    }

    function pluginValid()
    {
        if(plugin().valid){
            alert(plugin().echo("This plugin seems to be working!"));
        } else {
            alert("Plugin is not working :(");
        }
    }
</script>
<body onload="load()">
<object id="plugin0" type="application/x-juart" width="0" height="0" >
    <param name="onload" value="pluginLoaded"  />
</object>
<h1>jUART Serial Port Echo Test</h1><br/>
This test will echo the data you sent through serial port.
</body>
