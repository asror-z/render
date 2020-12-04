<style>

    tr.selected {
        background-color: #3875d7;
        color: #FFF;
    }

</style>

<body>
<div class="container">
    <div class="col-lg-12">
        <table class="table" id="demo2">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr class="un-selected" style="cursor: pointer;">
                <td>1</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr class="un-selected" style="cursor: pointer;">
                <td>2</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr class="un-selected selected-current" style="cursor: pointer;">
                <td>3</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr class="un-selected" style="cursor: pointer;">
                <td>4</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr class="un-selected" style="cursor: pointer;">
                <td>5</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(function () {


        $('#demo2').find('tbody').finderSelect();


        $(".safezone").on("mousedown", function (e) {
            return false;
        });


    });

    function OpenInNewTab(url) {
        var win = window.open(url, '_blank');
        win.focus();
    }

</script>

<script src="http://oss.maxcdn.com/libs/jquery.finderselect/0.6.0/jquery.finderselect.min.js"></script>

</body>
</html>
