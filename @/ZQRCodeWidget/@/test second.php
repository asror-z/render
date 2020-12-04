<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
    <?

    use zetsoft\assets\testing\ZQRCodeAsset;

    ZQRCodeAsset::register($this);
    ?>
</head>
<body>

<div id="qrcode"></div>

<script type="text/javascript">


    $(document).ready(function () {

        var qrcode = new QRCode(document.getElementById("qrcode"), {
            width: 100,
            height: 100
        });

        qrcode.makeCode('Sardor');

      
    });

    

</script>
</body>
