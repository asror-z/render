<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome.min.css@3.2.1/font-awesome.min.css">
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sass-css-modules-class-mapper@1.0.10/index.min.js">-->

<div class="br-wrapper br-theme-fontawesome-stars">
    <select id="example"> <!-- now hidden -->
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
</div>

<!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/jquery-bar-rating@1.2.2/dist/jquery.barrating.min.js"></script>
<script type="text/javascript">
    // $(function() {
    //     $('#example').barrating({
    //         theme: 'fontawesome-stars'
    //     });
    // });
    
    $('#example').barrating('show', {
        theme: 'my-awesome-theme',
        onSelect: function(value, text, event) {
            if (typeof(event) !== 'undefined') {
                // rating was selected by a user
                console.log(event.target);
            } else {
                // rating was selected programmatically
                // by calling `set` method
            }
        }
    });
</script>
