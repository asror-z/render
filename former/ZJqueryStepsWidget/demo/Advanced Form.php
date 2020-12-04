<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-steps@1.1.0/demo/css/jquery.steps.css">
<script src="https://cdn.jsdelivr.net/npm/jquery-steps@1.1.0/build/jquery.steps.js"></script>

<form id="example-advanced-form" action="#">
    <h3>Account</h3>
    <fieldset>
        <legend>Account Information</legend>

        <label for="userName-2">User name *</label>
        <input id="userName-2" name="userName" type="text" class="required">
        <label for="password-2">Password *</label>
        <input id="password-2" name="password" type="text" class="required">
        <label for="confirm-2">Confirm Password *</label>
        <input id="confirm-2" name="confirm" type="text" class="required">
        <p>(*) Mandatory</p>
    </fieldset>

    <h3>Profile</h3>
    <fieldset>
        <legend>Profile Information</legend>

        <label for="name-2">First name *</label>
        <input id="name-2" name="name" type="text" class="required">
        <label for="surname-2">Last name *</label>
        <input id="surname-2" name="surname" type="text" class="required">
        <label for="email-2">Email *</label>
        <input id="email-2" name="email" type="text" class="required email">
        <label for="address-2">Address</label>
        <input id="address-2" name="address" type="text">
        <label for="age-2">Age (The warning step will show up if age is less than 18) *</label>
        <input id="age-2" name="age" type="text" class="required number">
        <p>(*) Mandatory</p>
    </fieldset>

    <h3>Warning</h3>
    <fieldset>
        <legend>You are to young</legend>

        <p>Please go away ;-)</p>
    </fieldset>

    <h3>Finish</h3>
    <fieldset>
        <legend>Terms and Conditions</legend>

        <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
    </fieldset>
</form>




<script>
    var form = $("#example-advanced-form").show();

    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        onStepChanging: function (event, currentIndex, newIndex)
        {
            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex)
            {
                return true;
            }
            // Forbid next action on "Warning" step if the user is to young
            if (newIndex === 3 && Number($("#age-2").val()) < 18)
            {
                return false;
            }
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex)
            {
                // To remove error styles
                form.find(".body:eq(" + newIndex + ") label.error").remove();
                form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex)
        {
            // Used to skip the "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age-2").val()) >= 18)
            {
                form.steps("next");
            }
            // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3)
            {
                form.steps("previous");
            }
        },
        onFinishing: function (event, currentIndex)
        {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex)
        {
            alert("Submitted!");
        }
    }).validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password-2"
            }
        }
    });

</script>
