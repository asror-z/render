//https://datatables.net/reference/option/keys

//Default
// Value: undefined


//Enable KeyTable for a table:

$('#myTable').DataTable( {
    keys: true
} );

//Enable KeyTable with configuration options:

$('#myTable').DataTable( {
    keys: {
        columns: ':not(:first-child)'
    }
} );




//Default
// Value: true

//Disallow the table form loosing focus:

$('#myTable').DataTable( {
    keys: {
        blurable: false
    }
} );


//https://datatables.net/reference/option/keys.className

//Default
// Value: focus


//Set the class name of the focused cells:



$('#myTable').DataTable( {
    keys: {
        className: 'highlight'
    }
} );


//https://datatables.net/reference/option/keys.clipboard

//Default
// Value: true


//Disable clipboard interaction:

$('#myTable').DataTable( {
    keys: {
        clipboard: false
    }
} );


//https://datatables.net/reference/option/keys.clipboardOrthogonal

//Default
// Value: display

//Set the orthogonal data for clipboard copy:

$('#myTable').DataTable( {
    keys: {
        clipboardOrthogonal: 'export'
    }
} );




//https://datatables.net/reference/option/keys.columns

//Don't allow focus on the last column in the table:

$('#myTable').DataTable( {
    keys: {
        columns: ':not(:last-child)'
    }
} );


//Allow focus only on column indexes 1, 2, 3, 4:

$('#myTable').DataTable( {
    keys: {
        columns: [ 1, 2, 3, 4 ]
    }
} );


//https://datatables.net/reference/option/keys.editOnFocus


//Default
// Value: false

//Immediately trigger inline editing, when the cell is focused.:


$('#myTable').DataTable( {
    keys: {
        editor: editor,
        editOnFocus: true
    }
} );

//https://datatables.net/reference/option/keys.editor

//Default
// Value: null

//Attach an Editor instance (editor) to a table to provide Excel like editing:



$('#myTable').DataTable( {
    keys: {
        editor: editor
    }
} );


//https://datatables.net/reference/option/keys.focus

//Default
// Value: null

//Automatically focus on the first cell in the table:

$('#myTable').DataTable( {
    keys: {
        focus: ':eq(0)'
    }
} );


//https://datatables.net/reference/option/keys.keys

//Default
// Value: null

//Listen for the tab key only:

$('#myTable').DataTable( {
    keys: {
        keys: [ "\t".charCodeAt(0) ]
    }
} );


//https://datatables.net/reference/option/keys.tabIndex

//Default
// Value: null


//Take the table out of the normal tab flow in the browser:

$('#myTable').DataTable( {
    keys: {
        tabIndex: 2
    }
} );


//Disable tab focus:
//
// Javascript


$('#myTable').DataTable( {
    keys: {
        tabIndex: -1
    }
} );
































