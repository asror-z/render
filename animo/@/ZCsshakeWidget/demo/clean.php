<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Elrumordelaluz Csshake </title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/csshake@1.5.3/dist/csshake.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/csshake@1.5.3/dist/csshake-slow.css">
    <style>



        /* Example shake-crazy */
        .shake-crazy {
        @include do-shake('shake-crazy', 40, 40, 20, 100ms, .1, $opacity: true);
        }
    </style>

</head>
<body>


<div class="shake"></div>
<div class="shake-hard"></div>
<div class="shake-slow"></div>
<div class="shake-little"></div>
<div class="shake-horizontal"></div>
<div class="shake-vertical"></div> <div class="shake-rotate"></div> <div class="shake-opacity"></div> <div class="shake-crazy"></div> <div class="shake-chunk"></div>
<ul class="shake-trigger">
    <li class="shake-slow"></li>
    <li></li>
    <li></li>
    <li class="shake-hard"></li>
    <li></li>
    <li class="shake"></li>
</ul>
<div class="shake-slow shake-constant"></div>
<!-- and stops on :hover -->
<div class="shake-slow shake-constant shake-constant--hover"></div>
<!-- Freeze animation at that point when :hover -->
<div class="shake-crazy shake-freeze"></div>

</body>
</html>
