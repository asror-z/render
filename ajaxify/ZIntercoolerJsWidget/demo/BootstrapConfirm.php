
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intercooler@1.2.3/dist/intercooler.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-mockjax@2.5.0/dist/jquery.mockjax.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-dialog@1.34.6/src/js/bootstrap-dialog.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-modal-js@1.0.1/dist/bootstrap-modal-js.min.js"></script>

<div id="confirm-me" class="btn btn-primary" ic-post-to="/click" ic-trigger-on="confirmed-by-user">
    Click Me
    <i class="ic-indicator fa fa-spinner fa-spin" style="display: none;"></i>
</div>

<script>
    $(function () {
        $('#confirm-me').click(function () {
            BootstrapDialog.show(
                {
                    message: 'Are you sure you want to proceed?',
                    buttons: [
                        {
                            label: 'Confirm',
                            cssClass: 'btn-primary',
                            action: function (dialogItself) {
                                dialogItself.close();
                                $('#confirm-me').trigger('confirmed-by-user'); // this lines up with the ic-trigger name on the element
                            }
                        },
                        {
                            icon: 'glyphicon glyphicon-ban-circle',
                            label: 'Cancel',
                            cssClass: 'btn-warning',
                            action: function (dialogItself) {
                                dialogItself.close();
                            }
                        }]
                });
        })
    });

    $.mockjax({
        url: "/click",
        responseTime: 1500,
        response: function (settings) {
            this.responseText = "Confirmed Click!";
        }
    });
</script>
