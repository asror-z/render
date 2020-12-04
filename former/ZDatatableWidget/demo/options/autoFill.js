

//https://datatables.net/reference/option/autoFill

//Enable AutoFill for a table:
$('#example').DataTable( {
    autoFill: true
} );

//Enable AutoFill with configuration options:

$('#example').DataTable( {
    autoFill: {
        columns: ':not(:first-child)'
    }
} );


//Default
// Value: false




//Always ask the end user if the fill should proceed.:

//https://datatables.net/reference/option/autoFill.alwaysAsk


$('#myTable').DataTable( {
    autoFill: {
        alwaysAsk: true
    }
} );


//https://datatables.net/reference/option/autoFill.columns


//Don't allow fill on the last column in the table:

$('#myTable').DataTable( {
    autoFill: {
        columns: ':not(:last-child)'
    }
} );




//Allow fill only on column indexes 1, 2, 3, 4:


$('#myTable').DataTable( {
    autoFill: {
        columns: [ 1, 2, 3, 4 ]
    }
} );


//https://datatables.net/reference/option/autoFill.editor


//$('#myTable').DataTable( {
//     autoFill: {
//         editor: editor
//     }
// } );
$('#myTable').DataTable( {
    autoFill: {
        editor: editor
    }
} );



//https://datatables.net/reference/option/autoFill.enable


//Default
// Value: true


//Disable AutoFill on initialisation:

$('#example').DataTable( {
    autoFill: {
        enable: false
    }
} );



//https://datatables.net/reference/option/autoFill.focus




//Default
// Value: null



//Automatically focus on the first cell in the table:




$('#myTable').DataTable( {
    autoFill: {
        focus: 'click'
    }
} );






//https://datatables.net/reference/option/autoFill.horizontal


//Default
// Value: true


//Disable horizontal filling:




$('#example').DataTable( {
    autoFill: {
        horizontal: false
    }
} );



//https://datatables.net/reference/option/autoFill.update


//Default
// Value: true


//Disable data update.:



$('#example').DataTable( {
    autoFill: {
        update: false
    }
} );


//https://datatables.net/reference/option/autoFill.vertical

//Default
// Value: true




//Disable vertical filling:


$('#example').DataTable( {
    autoFill: {
        vertical: false
    }
} );


//https://datatables.net/reference/option/language.autoFill


//Set a fill type information message

$('#example').DataTable( {
    language: {
        autoFill: {
            info: 'Select a data fill type:'
        }
    },
    autoFill: true
} );


//https://datatables.net/reference/option/language.autoFill.button


//Default
// Value: >


//Set a fill type information message:

$('#example').DataTable( {
    language: {
        autoFill: {
            button: 'Go!'
        }
    },
    autoFill: true
} );

//https://datatables.net/reference/option/language.autoFill.cancel


//Default
// Value: Cancel


//Set a fill type information message:

$('#example').DataTable( {
    language: {
        autoFill: {
            cancel: 'Close and perform no updates'
        }
    },
    autoFill: true
} );


//https://datatables.net/reference/option/language.autoFill.fill

//Default
// Value: Fill all cells with >i<{data}>/i<


//Set a fill type information message:



$('#example').DataTable( {
    language: {
        autoFill: {
            fill: 'Fill all cells with the same value'
        }
    },
    autoFill: true
} );


//https://datatables.net/reference/option/language.autoFill.fillHorizontal

//Default
// Value: Fill cells horizontally


//Set a fill type information message:


$('#example').DataTable( {
    language: {
        autoFill: {
            fillHorizontal: 'Copy values horizontally'
        }
    },
    autoFill: true
} );



//https://datatables.net/reference/option/language.autoFill.fillVertical


//Default
// Value: Fill cells vertically

//Set a fill type information message:



$('#example').DataTable( {
    language: {
        autoFill: {
            fillVertical: 'Copy values vertically'
        }
    },
    autoFill: true
} );



//https://datatables.net/reference/option/language.autoFill.increment

//Default
// Value: Increment / decrement each cell by: >input type='number' value='1'<


//Set a fill type information message:

$('#example').DataTable( {
    language: {
        autoFill: {
            increment: 'Change each cell by: <input type="number" value="1">'
        }
    },
    autoFill: true
} );


//https://datatables.net/reference/option/language.autoFill.info


//Set a fill type information message:

$('#example').DataTable( {
    language: {
        autoFill: {
            info: 'Select a data fill type:'
        }
    },
    autoFill: true
} );
