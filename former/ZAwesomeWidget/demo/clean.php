
<link href="https://cdn.statically.io/gh/prevwong/awesome-select/dbec93a0/package/css/awselect.min.css" rel="stylesheet" />
<script type="text/javascript" src="https://cdn.statically.io/gh/prevwong/awesome-select/dbec93a0/package/js/awselect.min.js"></script>


<select name="food_selector" data-placeholder="Select a food to eat">
    <option value="pancakes">Pancakes</option>
    ...
</select>
<script>
    $(document).ready(function(){
        $('select').awselect()
    });
</script>