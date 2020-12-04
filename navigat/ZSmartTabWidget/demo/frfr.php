<!--
<link rel="stylesheet" href="/render/navigat/ZSmartTabWidget/demo/assets/bootstrap.min.css">
<script src="/render/navigat/ZSmartTabWidget/demo/assets/jquery-3.4.1.min.js"></script>
-->


<!-- External Buttons -->
<div class="row mb-3 align-items-center valign-items-center ">
    <div class="col-auto ">
        <label>Theme:</label>
        <select id="theme_selector" class="form-control">
            <option value="default" selected="">Default</option>
            <option value="classic">Classic</option>
            <option value="dark">Dark</option>
            <option value="brick">Brick</option>
            <option value="bstabs">Bootstrap Tabs</option>
            <option value="bspills">Bootstrap Pills</option>
            <option value="">No Theme</option>
        </select>
    </div>
    <div class="col-auto ">
        <label>Animation:</label>
        <select id="animation" class="form-control">
            <option value="none">None</option>
            <option value="fade">Fade</option>
            <option value="slide-horizontal">Slide Horizontal</option>
            <option value="slide-vertical">Slide Vertical</option>
            <option value="slide-swing">Slide Swing</option>
        </select>
    </div>
    <div class="col-auto ">
        <label>Go To:</label>
        <select id="got_to_tab" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
    </div>

    <div class="col-auto ">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="is_vertical"
                   value="1">
            <label class="custom-control-label" for="is_vertical">Vertical</label>
        </div>
    </div>
    <div class="col-auto ">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="is_justified"
                   value="1" checked="">
            <label class="custom-control-label" for="is_justified">Justified</label>
        </div>
    </div>
</div>

<!-- SmartTab html -->
<div id="smarttab" class="st st-justified st-theme-default st-horizontal">

    <ul class="nav">
        <li>
            <a class="nav-link active"
               href="#tab-1" data-repo="jquery-smartcart">
                <strong>Tab 1</strong> This is tab description
            </a>
        </li>
        <li>
            <a class="nav-link" href="#tab-2" data-repo="jquery-smarttab">
                <strong>Tab 2</strong> This is tab description
            </a>
        </li>
        <li>
            <a class="nav-link" href="#tab-3" data-repo="smartwizard">
                <strong>Tab 3</strong> This is tab description
            </a>
        </li>
        <li>
            <a class="nav-link" href="#tab-4" data-repo="jquery-smartcart">
                <strong>Tab 4</strong> This is tab description
            </a>
        </li>
    </ul>

    <div class="tab-content" style="height: 190px;">
        <div id="tab-1" class="tab-pane" role="tabpanel" style="display: block;">
            <h3>Tab 1 Content</h3>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled it to
            make a type specimen book. It has survived not only five centuries, but also
            the leap into electronic typesetting, remaining essentially unchanged. It
            was popularised in the 1960s with the release of Letraset sheets containing
            Lorem Ipsum passages, and more recently with desktop publishing software
            like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <div id="tab-2" class="tab-pane" role="tabpanel" style="display: none;">
            <h3>Tab 2 Content</h3>
            <div>Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining
                essentially unchanged. It was popularised in the 1960s with the release
                of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions
                of Lorem Ipsum.
            </div>
        </div>
        <div id="tab-3" class="tab-pane" role="tabpanel" style="display: none;">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled it to
            make a type specimen book. It has survived not only five centuries, but also
            the leap into electronic typesetting, remaining essentially unchanged. It
            was popularised in the 1960s with the release of Letraset sheets containing
            Lorem Ipsum passages, and more recently with desktop publishing software
            like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <div id="tab-4" class="tab-pane" role="tabpanel" style="display: none;">
            <h3>Tab 4 Content</h3>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled it to
            make a type specimen book. It has survived not only five centuries, but also
            the leap into electronic typesetting, remaining essentially unchanged. It
            was popularised in the 1960s with the release of Letraset sheets containing
            Lorem Ipsum passages, and more recently with desktop publishing software
            like Aldus PageMaker including versions of Lorem Ipsum.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled it to
            make a type specimen book. It has survived not only five centuries, but also
            the leap into electronic typesetting, remaining essentially unchanged. It
            was popularised in the 1960s with the release of Letraset sheets containing
            Lorem Ipsum passages, and more recently with desktop publishing software
            like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
    </div>
</div>


<!-- Core -->



<!-- Include SmartTab JavaScript source -->

<link rel="stylesheet" type="text/css"
      href="https://cdn.jsdelivr.net/npm/jquery-smarttab@3.0.1/dist/css/smart_tab_all.min.css">

<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/jquery-smarttab@3.0.0/dist/js/jquery.smartTab.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Ajax content loading with "tabContent" event
        $("#smarttab").on("tabContent", function(e, anchorObject, stepIndex) {

            var repo    = anchorObject.data('repo');
            var ajaxURL = "https://api.npms.io/v2/package/" + repo;
            // Return a promise object
            return new Promise((resolve, reject) => {

                // Ajax call to fetch your content
                $.ajax({
                    method  : "GET",
                    url     : ajaxURL,
                    beforeSend: function( xhr ) {
                        // Show the loader
                        $('#smarttab').smartTab("loader", "show");
                    }
                }).done(function( res ) {
                    // console.log(res);

                    var html = '<h2>Ajax data about ' + repo + ' loaded from GitHub</h2>';
                    html += '<br>URL: <strong>' + ajaxURL + '</strong>';
                    html += '<br>Name: <strong>' + res.collected.metadata.name + '</strong>';
                    html += '<br>Description: ' + res.collected.metadata.description;
                    html += '<br>Homepage: <a href="' + res.collected.github.homepage + '" >'+ res.collected.github.homepage +'</a>';
                    html += '<br>Keywords: ' + res.collected.metadata.keywords.join(', ');

                    // html += '<br>Clone URL: ' + res.clone_url;
                    html += '<br>Stars: ' + res.collected.github.starsCount;
                    html += '<br>Forks: ' + res.collected.github.forksCount;
                    html += '<br>Watchers: ' + res.collected.github.subscribersCount;
                    html += '<br>Open Issues: ' + res.collected.github.issues.openCount + '/' + res.collected.github.issues.count;

                    html += '<br><br>Popularity: ' + parseInt(res.score.detail.popularity * 100);
                    html += '<br>Quality: ' + parseInt(res.score.detail.quality * 100);
                    html += '<br>Maintenance: ' + parseInt(res.score.detail.maintenance * 100);

                    // Resolve the Promise with the tab content
                    resolve(html);

                    // Hide the loader
                    $('#smarttab').smartTab("loader", "hide");
                }).fail(function(err) {

                    // Reject the Promise with error message to show as tab content
                    reject( "An error loading the resource" );

                    // Hide the loader
                    $('#smarttab').smartTab("loader", "hide");
                });

            });

        });

        // SmartTab initialize with options (options are optional)
        $('#smarttab').smartTab({
            selected: 1, // Initial selected tab, 0 = first tab
            theme: 'default', // theme for the tab, related css need to include for other than default theme
            orientation: 'horizontal', // Nav menu orientation. horizontal/vertical
            justified: true, // Nav menu justification. true/false
            autoAdjustHeight: true, // Automatically adjust content height
            backButtonSupport: true, // Enable the back button support
            enableURLhash: true, // Enable selection of the tab based on url hash
            transition: {
                animation: 'fade', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
                speed: '400', // Transion animation speed
                easing:'' // Transition animation easing
            },
            autoProgress: { // Auto navigate tabs on interval
                enabled: false, // Enable/Disable Auto navigation
                interval: 3500, // Auto navigate Interval (used only if "autoProgress" is set to true)
                stopOnFocus: true, // Stop auto navigation on focus and resume on outfocus
            }
        });

        // Demo Button Events
        $("#got_to_tab").on("change", function() {
            // Go to tab
            var tab_index = $(this).val() - 1;
            $('#smarttab').smartTab("goToTab", tab_index);
            return true;
        });

        $("#is_vertical").on("click", function() {
            // Change Orientation
            var options = {
                orientation: ($(this).prop("checked") == true) ? 'vertical' : 'horizontal'
            };
            $('#smarttab').smartTab("setOptions", options);
            return true;
        });

        $("#is_justified").on("click", function() {
            // Change Justify
            var options = {
                justified: $(this).prop("checked")
            };

            $('#smarttab').smartTab("setOptions", options);
            return true;
        });

        $("#animation").on("change", function() {
            // Change animation
            var options = {
                transition: {
                    animation: $(this).val()
                },
            };
            $('#smarttab').smartTab("setOptions", options);
            return true;
        });

        $("#theme_selector").on("change", function() {
            // Change theme
            var options = {
                theme: $(this).val()
            };
            $('#smarttab').smartTab("setOptions", options);
            return true;
        });

    });
</script>


