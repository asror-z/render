<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <!-- jsPanel CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>

</head>
<body>

<!-- Modal structure -->
<div id="modal">
    <!-- data-iziModal-fullscreen="true"  data-iziModal-title="Welcome"  data-iziModal-subtitle="Subtitle"  data-iziModal-icon="icon-home" -->
    <!-- Modal content -->
    <div class="iziModal-wrap" style="height: auto;">
        <div class="iziModal-content" style="padding: 0px;">
            <button  class="icon-close" ></button>
            <header>
                <a href="" id="signin" class="">Sign in</a>
                <a href="" class="active">New Account</a>
            </header>
            <div class="sections" style="height: 373px;">
                <section class="hide" style="display: none;">
                    <input type="text" placeholder="Username">
                    <input type="password" placeholder="Password">
                    <footer>
                        <button data-izimodal-close="">Cancel</button>
                        <button class="submit">Log in</button>
                    </footer>
                </section>
                <section style="display: block;">
                    <input type="text" placeholder="Username">
                    <input type="text" placeholder="Email">
                    <input type="password" placeholder="Password">
                    <label for="check"><input type="checkbox" name="checkbox" id="check" value="1"> I agree to the <u>Terms</u>.</label>
                    <footer>
                        <button data-izimodal-close="" data-izimodal-transitionout="bounceOutDown">Cancel</button>
                        <button class="submit">Create Account</button>
                    </footer>
                </section>
            </div>
        </div>
    </div>
</div>

<!-- Trigger to open Modal -->
<button class="trigger btn btn-primary">Modal</button>

<script !src="">
    $("#modal").iziModal({
        title: 'Mirshod',
        subtitle: 'Mirshod',
        headerColor: '#88A0B9',
        background: null,
        theme: '',  // light
        icon: null,
        iconText: null,
        iconColor: '',
        rtl: false,
        width: 600,
        top: null,
        bottom: null,
        borderBottom: true,
        padding: 0,
        radius: 3,
        zindex: 999,
        iframe: false,
        iframeHeight: 400,
        iframeURL: null,
        focusInput: true,
        group: '',
        loop: true,
        arrowKeys: true,
        navigateCaption: true,
        navigateArrows: true, // Boolean, 'closeToModal', 'closeScreenEdge'
        history: false,
        restoreDefaultContent: false,
        autoOpen: 0, // Boolean, Number
        bodyOverflow: false,
        fullscreen: false,
        openFullscreen: false,
        closeOnEscape: true,
        closeButton: true,
        appendTo: 'body', // or false
        appendToOverlay: 'body', // or false
        overlay: true,
        overlayClose: true,
        overlayColor: 'rgba(0, 0, 0, 0.4)',
        timeout: false,
        timeoutProgressbar: false,
        pauseOnHover: false,
        timeoutProgressbarColor: 'rgba(255,255,255,0.5)',
        transitionIn: 'comingIn',
        transitionOut: 'comingOut',
        transitionInOverlay: 'fadeIn',
        transitionOutOverlay: 'fadeOut',
        setContent: '<p>Example</p>',


       
    });

    $(document).on('click', '.trigger', function (event) {
        event.preventDefault();
        $('#modal').iziModal('setZindex', 99999);
        // $('#modal').iziModal('open', { zindex: 99999 });
        $('#modal').iziModal('open');
    });
</script>
</body>
</html>


