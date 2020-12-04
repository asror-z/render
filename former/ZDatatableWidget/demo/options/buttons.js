//https://datatables.net/reference/option/buttons

//For example the following two configurations are functionally identical:


// Using `buttons` as an array
$('#myTable').DataTable( {
    buttons: [ 'copy', 'csv', 'excel' ]
} );




// Using `buttons.buttons`
$('#myTable').DataTable( {
    buttons: {
        buttons: [ 'copy', 'csv', 'excel' ]
    }
} );


//Creation of Buttons using defaults and insertion by dom:


$('#example').DataTable( {
    dom: 'B<"clear">lfrtip',
    buttons: true
} );


//Creation of Buttons with array configuration of buttons and insertion by dom:

$('#example').DataTable( {
    dom: 'B<"clear">lfrtip',
    buttons: [ 'copy', 'csv', 'excel' ]
} );

//Creation of Buttons with object configuration and insertion by dom:


$('#example').DataTable( {
    dom: 'B<"clear">lfrtip',
    buttons: {
        name: 'primary',
        buttons: [ 'copy', 'csv', 'excel' ]
    }
} );

//Creation of Buttons using defaults are API insertion to the DOM:

var table = $('#example').DataTable( {
    buttons: true
} );

table
    .buttons()
    .container()
    .appendTo( '#controlPanel' );


    //https://datatables.net/reference/option/buttons.buttons


    //Default
// Value: TBC
    //DataTables initialisation: buttons as an array using basic types:
$('#myTable').DataTable( {
    buttons: [ 'copy', 'csv', 'print' ]
} );


//DataTables initialisation: Two buttons, one with customisations:

$('#myTable').DataTable( {
    buttons: {
        buttons: [
            'copy',
            { extend: 'excel', text: 'Save as Excel' }
        ]
    }
} );

//DataTables initialisation: A fully custom button:




$('#myTable').DataTable( {
    buttons: {
        buttons: [
            'copy',
            {
                text: 'My button',
                action: function ( dt ) {
                    console.log( 'My custom button!' );
                }
            }
        ]
    }
} );



//Instance initialisation: Using the buttons array:




new $.fn.dataTable.Buttons( table, {
    buttons: [
        'copy',
        { extend: 'excel', text: 'Save as Excel' }
    ]
} );

//https://datatables.net/reference/option/buttons.buttons.action


//Default
// Value: Default action depends upon the button type. Please refer to the button type documentation

//DataTables initialisation: Custom action functions:

$('#myTable').DataTable( {
    buttons: {
        buttons: [
            {
                text: 'Alert',
                action: function ( e, dt, node, config ) {
                    alert( 'Activated!' );
                    this.disable(); // disable button
                }
            }
        ]
    }
} );


//Instance initialisation: Custom action functions:



new $.fn.dataTable.Buttons( table, {
    buttons: [
        {
            text: 'Copy to div',
            action: function ( e, dt, node, config ) {
                // Copy an array based DataTables' data to another element
                $('#output').html( dt.data().map( function (row) {
                    return row.join(' | ' );
                } ).join('<br>');
            }
        }
    ]
} );

//Create a custom button that uses a built in button's action method:


new $.fn.dataTable.Buttons( table, {
    buttons: [
        {
            text: 'Create CSV',
            action: function ( e, dt, node, config ) {
                // Do custom processing
                // ...

                // Call the default csvHtml5 action method to create the CSV file
                $.fn.dataTable.ext.buttons.csvHtml5.action.call(this, e, dt, node, config);
            }
        }
    ]
} );


//https://datatables.net/reference/option/buttons.buttons.attr

//Default
// Value: No default value (i.e. undefined)


//Copy button with title text and an id:

$('#myTable').DataTable( {
    buttons: [
        {
            extend: 'copyHtml5',
            attr:  {
                title: 'Copy',
                id: 'copyButton'
            }
        }
}
} );


//https://datatables.net/reference/option/buttons.buttons.available

//Ensure that the FileReader API is available:

$('#myTable').DataTable( {
    buttons: {
        buttons: [
            {
                text: 'FileReader available',
                available: function ( dt, config ) {
                    return window.FileReader !== undefined;
                }
            }
        ]
    }
} );


//https://datatables.net/reference/option/buttons.buttons.className

//Default
// Value: undefined

//DataTables initialisation: Set class name:




$('#myTable').DataTable( {
    buttons: {
        buttons: [
            { extend: 'copy', className: 'copyButton' },
            { extend: 'excel', className: 'excelButton' }
        ]
    }
} );



//Instance initialisation: Set class name:



new $.fn.dataTable.Buttons( table, {
    buttons: [
        { extend: 'copy', className: 'copyButton' },
        { extend: 'excel', className: 'excelButton' }
    ]
} );


//https://datatables.net/reference/option/buttons.buttons.destroy

//Button which has mouse enter / leave (hover) event listeners:


$('#myTable').DataTable( {
    buttons: {
        buttons: [
            {
                text: '',
                init: function ( e, dt, node, config ) {
                    node.on( 'mouseenter'+config.namespace, function () {
                        console.log( 'Mouse enter' );
                    } );

                    node.on( 'mouseleave'+config.namespace, function () {
                        console.log( 'Mouse leave' );
                    } );
                },
                destroy: function ( dt, node, config ) {
                    node.off( 'mouseenter'+config.namespace );
                    node.off( 'mouseleave'+config.namespace );
                }
            }
        ]
    }
} );

//https://datatables.net/reference/option/buttons.buttons.enabled


//Default
// Value: true



//DataTables initialisation: Disable a button on initialisation:

$('#myTable').DataTable( {
    buttons: {
        buttons: [
            'copy',
            { extend: 'excel', enabled: false }
        ]
    }
} );


//Instance initialisation: Disable a button on initialisation:

new $.fn.dataTable.Buttons( table, {
    buttons: [
        'copy',
        { extend: 'excel', enabled: false }
    ]
} );

//https://datatables.net/reference/option/buttons.buttons.extend

//Default
// Value: undefined

//DataTables initialisation: Two buttons, one with customisations:


$('#myTable').DataTable( {
    buttons: {
        buttons: [
            'copy',
            { extend: 'excel', text: 'Save as Excel' }
        ]
    }
} );


//Instance initialisation: Two buttons, one with customisations:


new $.fn.dataTable.Buttons( table, {
    buttons: [
        'copy',
        { extend: 'excel', text: 'Save as Excel' }
    ]
} );

//https://datatables.net/reference/option/buttons.buttons.init

//Enable / disable based on there being selected rows (from the Select extension)


$('#myTable').DataTable( {
    buttons: {
        buttons: [
            {
                text: 'Enabled only with selected item',
                init: function ( dt, node, config ) {
                    var that = this;

                    dt.on( 'select.dt.DT deselect.dt.DT', function () {
                        that.enable( dt.rows( { selected: true } ).any() );
                    } );

                    this.disable();
                }
            }
        ]
    }
} );

//https://datatables.net/reference/option/buttons.buttons.key

//Default
// Value: undefined

$('#myTable').DataTable( {
    buttons: [
        { extend: 'print', key: 'p' }
    ]
} );

//DataTables initialisation: Require alt key:

$('#myTable').DataTable( {
    buttons: [
        {
            extend: 'print',
            key: {
                key: 'p',
                altKey: true
            }
        }
    ]
} );



 //Instance initialisation: Require alt key:

new $.fn.dataTable.Buttons( table, {
    buttons: [
        {
            extend: 'print',
            key: {
                key: 'p',
                altKey: true
            }
        }
    ]
} );


//https://datatables.net/reference/option/buttons.buttons.name
//Default
// Value: undefined

//DataTables initialisation: Set a button's name:

$('#myTable').DataTable( {
    buttons: [
        { extend: 'copy', name: 'copy' }
    ]
} );

//Instance initialisation: Set a button's name:


new $.fn.dataTable.Buttons( table, {
    buttons: [
        {
            extend: 'print',
            name: 'printButton'
        }
    ]
} );






























