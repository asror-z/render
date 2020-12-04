function asror() {
    Swal.fire({
        "title": "Title",
        "titleText": "Title text",
        "html": "<table style="width:100% border="1px" ">  <tr>    <th>Firstname<th>    <th>Lastname<th>     <th>Age<th>  <tr>  <tr>    <td><a href='https:google.com'>Jill<a><td>    <td>Smith<td>     <td>50<td>  <tr>  <tr>    <td>Eve<td>    <td>Jackson<td>     <td>94<td>  <tr><table>",
        "text": null,
        "type": null,
        "footer": null,
        "backdrop": true,
        "toast": false,
        "target": "body",
        "input": "",
        "padding": "3em",
        "background": null,
        "position": "center",
        "grow": "false",
        "customClass": "",
        "timer": null,
        "animation": true,
        "heightAuto": true,
        "allowOutsideClick": true,
        "allowEscapeKey": true,
        "allowEnterKey": true,
        "stopKeydownPropagation": true,
        "keydownListenerCapture": false,
        "showConfirmButton": true,
        "showCancelButton": true,
        "confirmButtonText": "OK",
        "cancelButtonText": "\u041e\u0442\u043c\u0435\u043d\u0430",
        "confirmButtonColor": null,
        "cancelButtonColor": null,
        "confirmButtonAriaLabel": "",
        "cancelButtonAriaLabel": "",
        "buttonsStyling": true,
        "reverseButtons": false,
        "focusConfirm": true,
        "focusCancel": false,
        "showCloseButton": false,
        "closeButtonAriaLabel": "\u0417\u0430\u043a\u0440\u044b\u0442\u044c \u044d\u0442\u043e\u0442 \u0434\u0438\u0430\u043b\u043e\u0433",
        "showLoaderOnConfirm": false,
        "scrollbarPadding": true,
        "preConfirm": null,
        "imageUrl": null,
        "imageWidth": null,
        "imageHeight": null,
        "imageAlt": "",
        "inputPlaceholder": "",
        "inputValue": "",
        "inputOptions": [],
        "inputAutoTrim": true,
        "inputAttributes": [],
        "inputValidator": null,
        "validationMesage": null,
        "progressSteps": [],
        "currentProgressStep": null,
        "progressStepsDistance": "40px",
        "onBeforeOpen": null,
        "onOpen": null,
        "onClose": null,
        "onAfterClose": null
    }).then((result) => {
        if (result.value) {
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        } else {
            Swal.fire(
                'Not Deleted!',
                'Your action has been cancelled.',
                'danger'
            )
        }
    });
}
