<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-steps@1.1.0/demo/css/jquery.steps.css">
<script src="https://cdn.jsdelivr.net/npm/jquery-steps@1.1.0/build/jquery.steps.js"></script>

<div id="example-manipulation">
    <h3>Add Step</h3>
    <section>
        <p>
            <label for="title-3">HTML Title *</label><br />
            <input id="title-3" type="text"><br />
            <label for="text-3">HTML Content *</label><br />
            <textarea id="text-3" rows="5"></textarea>
        </p>
        <p><a href="javascript:void(0);" onclick="$('#wizard-4').steps('add', { title: $('#title-3').val(), content: $('#text-3').val() });">Add</a></p>
        <p>(*) Mandatory</p>
    </section>
    <h3>Insert Step</h3>
    <section>
        <p>
            <label for="position-3">Position (zero-based) *</label><br />
            <input id="position-3" type="text"><br />
            <label for="title2-3">HTML Title *</label><br />
            <input id="title2-3" type="text"><br />
            <label for="text2-3">HTML Content *</label><br />
            <textarea id="text2-3" rows="5"></textarea>
        </p>
        <p><a href="javascript:void(0);" onclick="$('#wizard-4').steps('insert', Number($('#position-3').val()), { title: $('#title2-3').val(), content: $('#text2-3').val() });">Insert</a></p>
        <p>(*) Mandatory</p>
    </section>
    <h3>Remove Step</h3>
    <section>
        <p>
            <label for="position2-3">Position (zero-based) *</label><br />
            <input id="position2-3" type="text">
        </p>
        <p><a href="javascript:void(0);" onclick="$('#wizard-4').steps('remove', Number($('#position2-3').val()));">Remove</a></p>
        <p>(*) Mandatory</p>
    </section>
</div>

<script>
    $("#example-manipulation").steps({
        headerTag: "h3",
        bodyTag: "section",
        enableAllSteps: true,
        enablePagination: false
    });
</script>
