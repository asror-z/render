
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-steps@1.1.0/demo/css/jquery.steps.css">
<script src=" "></script>
<body>

<div id="example-basic">
    <h3>Keyboard</h3>
    <section>
        <p>Try the keyboard navigation by clicking arrow left or right!</p>
    </section>
    <h3>Effects</h3>
    <section>
        <p>Wonderful transition effects.</p>
    </section>
    <h3>Pager</h3>
    <section>
        <p>The next and previous buttons help you to navigate through your content.</p>
    </section>
</div>
<script>
    $("#example-basic").steps({

        /* Appearance */
        headerTag: "h3", // h1 | h2 ... h6
        bodyTag: "section", // div
        contentContainerTag: "div",
        actionContainerTag: "div",
        stepsContainerTag: "div",
        cssClass: "wizard",
        stepsOrientation: $.fn.steps.stepsOrientation.horizontal,

        /* Templates */
        titleTemplate: '<span class="number">#index#.</span> #title#',
        loadingTemplate: '<span class="spinner"></span> #text#',


        /* Behaviour */
        autoFocus: true, // false
        enableAllSteps: false,
        enableKeyNavigation: true,
        enablePagination: true,
        suppressPaginationOnFocus: true,
        enableContentCache: true,
        enableCancelButton: false,
        enableFinishButton: true,
        preloadContent: false,
        showFinishButtonAlways: false,
        forceMoveForward: false,
        saveState: false,
        startIndex: 0,

        /* Transition Effects */
        transitionEffect: "slideLeft", // slide | fade |  $.fn.steps.transitionEffect.none,
        transitionEffectSpeed: 200,

        /* Labels */
        labels: {
            cancel: "Cancel",
            current: "current step:",
            pagination: "Pagination",
            finish: "Finish",
            next: "Next",
            previous: "Previous",
            loading: "Loading ..."
        }

        //Events

        // onStepChanging: function (event, currentIndex, newIndex) { return true; },
        // onStepChanged: function (event, currentIndex, priorIndex) { },
        // onCanceled: function (event) { },
        // onFinishing: function (event, currentIndex) { return true; },
        // onFinished: function (event, currentIndex) { },
        // onInit: function (event, currentIndex) { },
        // onContentLoaded: function (event, currentIndex) { },
    });
</script>

