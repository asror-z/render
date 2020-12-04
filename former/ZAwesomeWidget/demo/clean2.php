<link href="https://cdn.statically.io/gh/prevwong/awesome-select/dbec93a0/package/css/awselect.min.css" rel="stylesheet" />
<script type="text/javascript" src="https://cdn.statically.io/gh/prevwong/awesome-select/dbec93a0/package/js/awselect.min.js"></script>


<select id="myblue_dropdown" name="food_selector" data-placeholder="Select a food to eat">
    <option value="pancakes">Pancakes</option>
    ...
</select>

<script>
    $(document).ready(function(){
        $('#myblue_dropdown').awselect({
            background: "#0f37a9", //the dark blue background
            active_background:"rgb(149, 211, 255)", // the light blue background
            placeholder_color: "#97bce0", // the light blue placeholder color
            placeholder_active_color: "#0f37a9", // the dark blue placeholder color
            option_color:"#405463", // the option colors
            vertical_padding: "15px", //top and bottom padding
            horizontal_padding: "20px", // left and right padding,
            immersive: false // immersive option, demonstrated at the next example
        });
    });
</script>