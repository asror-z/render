<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

$objComport  = new COM ( "AxSerial.ComPort" );
 ?>

<html>
<head>
 <META HTTP-EQUIV="CONTENT-Type" CONTENT="text/html;CHARSET=utf-8" >
 <title>ActiveXperts Serial Port Component PHP Sample</title>
</head>
<body>
<font face="sans-serif" size="2">
 <hr size="1" color="#707070">
 <font size="4">ActiveXperts Serial Port Component PHP Sample</font>
 <br>
 <br>
 <b>Initialize a Hayes compatible modem with some AT commands.</b>
 <br>
 <br>
 <hr size="1" color="#707070" >
 <br>

 <?php

 $objComport	= new COM ( "AxSerial.ComPort" );

 $objComport->Logfile     = "C:\\PhpSerialLog.txt";
 $objComport->Device      = "COM1";
 $objComport->Baudrate    = 9600;
 $objComport->ComTimeout  = 1000;

 $objComport->Open ();

 if ( $objComport->LastError == 0 )
 {
  Echo "Sending 'ATZ'...<BR>";
  Echo "<BR>";


  $objComport->WriteString      ( "ATZ" );

  while ( $objComport->LastError == 0 )
  {
   Echo $objComport->ReadString  ();
   Echo "<BR>";
  }

  Echo "Sending 'ATI'...<BR>";
  Echo "<BR>";

  $objComport->WriteString      ( "ATI" );

  while ( $objComport->LastError == 0 )
  {
   Echo $objComport->ReadString  ();
   Echo "<BR>";
  }

  Echo "Sending 'AT&C0'...<BR>";
  Echo "<BR>";

  $objComport->WriteString      ( "AT&C0" );

  while ( $objComport->LastError == 0 )
  {
   Echo $objComport->ReadString  ();
   Echo "<BR>";
  }
 }
 else
 {
  $ErrorNum = $objComport->LastError;
  $ErrorDes = $objComport->GetErrorDescription ( $ErrorNum );

  Echo "Error sending commands: #$ErrorNum ($ErrorDes).";
 }

 Echo "Ready.";

 $objComport->Close ();
 ?>

 <br>
 <br>
 <hr size="1" color="#707070">
 <font size="1" face="Verdana">This demo uses ActiveXperts Serial Port Component</font>
</body>
</html>


