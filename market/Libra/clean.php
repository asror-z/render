<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

 ?>

 
<html>
  <head>
    <object id="objComport"
        classid="CLSID:9366AAD2-50F4-4CFE-9613-6AC3406ED46B " viewastext>
    </object>
  </head>
  <body onload="ListDevices()">
    <script language="JavaScript">

    function Send ()
    {
        objComport.Device              = comboDevice.options [ comboDevice.selectedIndex].text
      objComport.Speed               = 9600
      objComport.ComTimeout          = 500
      objComport.LogFile             = "C:\ComLog.txt"
      objComport.HardwareFlowControl = objComport.asFLOWCONTROL_DEFAULT

      objComport.Open()

      textResult.value = "Result: " + objComport.LastError + " (" +
          objComport.GetErrorDescription ( objComport.LastError ) + ")";

      if( objComport.IsOpened == -1 )
      {
          objComport.WriteString( textCommand.value );

          textResponse.value = ""

         while( objComport.LastError == 0 )
         {
             textResponse.value += objComport.ReadString () + "\n";
         }
      }

      objComport.Close ()
    }

    function ListDevices ()
    {
        nCount  = objComport.GetDeviceCount ();

        for ( i = 0 ; i < nCount ; i++ )
        {
            comboDevice.options [ i ] = new Option ( objComport.GetDevice ( i ), "" );
        }

        for ( i = 1 ; i < 9 ; i++ )
        {
            comboDevice.options [ i + nCount - 1 ] = new Option ( "COM" + i , "" );
        }
    }

    </script>
    <font face="sans-serif" size="2">
      <hr size="1" color="#707070">
      <b><font size="4">ActiveXperts Serial Port Component HTML Sample</font></b><br>
      <b>
        <br>
Query a modem connected to your PC (COM port, USB or Bluetooth).<br>
        <br>
        <br>
        <hr size="1" color="#707070">
        <br>
        <table border="0" bgcolor="#f0f0f0" ID="Table1">
          <tr>
            <td valign="top">Device Name:</td>
            <td>
              <select size="1" name="comboDevice" ID="Select1">
              </select>
            </td>
          </tr>
          <tr>
            <td valign="top">Command:</td>
            <td>
              <input size="50" type="text" name="textCommand" value="ATI" ID="Text1"><br>
              <br>
            </td>
          </tr>
          <tr>
            <td valign="top">Response:<br>
            </td>
            <td>
              <textarea rows="10" name="textResponse" cols="63" ID="Textarea1"></textarea>
            </td>
          </tr>
          <tr>
            <td vAlign="top">Result:</td>
            <td>
              <textarea rows="1" name="textResult" cols="63" id="Textarea2"></textarea>
            </td>
          </tr>
        </table>
        <br>
        <input type="button" onclick="Send()" value="Submit">  <b>IMPORTANT:</b>
Please press the button <b>only once</b>, and allow some time for the
                                                                  command to be processed </font>
    <br>
  </body>
</html>
