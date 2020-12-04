<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-steps@1.1.0/demo/css/jquery.steps.css">
<script src="https://cdn.jsdelivr.net/npm/jquery-steps@1.1.0/build/jquery.steps.js"></script>
<div id="example-tabs">
    <h3>Keyboard</h3>
    <section>
        <p>What is needed to transform it to a tabs component? Not much. Just override some properties and done.</p>
        <pre class="prettyprint linenums">
$("#wizard").steps({
    // Disables the finish button (required if pagination is enabled)
    enableFinishButton: false,
    // Disables the next and previous buttons (optional)
    enablePagination: false,
    // Enables all steps from the begining
    enableAllSteps: true,
    // Removes the number from the title
    titleTemplate: "#title#"
});
</pre>
    </section>
    <h3>Other demos</h3>
    <section>
        <p>Scroll down or up to see the other demos.</p>
    </section>
    <h3>Documentation</h3>
    <section>
        <p>For more information <a href="https://github.com/rstaib/jquery-steps/wiki">check out the documentation</a>!</p>
    </section>
    <h3>Download</h3>
    <section>
        <p>See on getting started!</p>
    </section>
</div>
<script>

    $("#example-tabs").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        enableFinishButton: false,
        enablePagination: false,
        enableAllSteps: true,
        titleTemplate: "#title#",
        cssClass: "tabcontrol"
    });
</script>
