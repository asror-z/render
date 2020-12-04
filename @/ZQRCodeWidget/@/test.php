<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
    <title>Cross-Browser QRCode generator for Javascript</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
    <?

    use zetsoft\assets\testing\ZQRCodeAsset;

    ZQRCodeAsset::register($this);
    ?>
</head>
<body>
<input id="text" type="text" value="http://jindo.dev.naver.com/collie" style="width:80%"/><br/>


<div id="qrcode" style="width:100px; height:100px; margin-top:15px;"></div>

<script type="text/javascript">


    $(document).ready(function () {

        var qrcode = new QRCode(document.getElementById("qrcode"), {
            width: 100,
            height: 100
        });


        function makeCode() {
            var elText = document.getElementById("text");

            if (!elText.value) {
                alert("Input a text");
                elText.focus();
                return null;
            }

            qrcode.makeCode(elText.value);
        }

        makeCode();

        $("#text").on("blur", function () {
            makeCode();
        }).on("keydown", function (e) {
            if (e.keyCode == 13) {
                makeCode();
            }
        });
    });

    

</script>
</body>
