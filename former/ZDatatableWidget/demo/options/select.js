//https://datatables.net/reference/option/language.select.cells

//A simple string with no concern for pluralisation:

$('#example').DataTable( {
    language: {
        select: {
            cells: "%d cells selected"
        }
    },
    select:      select: {
    cells: {
        _: "Selected %d cells",
            0: "Click a cell to select it",
            1: "Selected 1 cell"
    }
}
} );

//Show a message when no cells are selected:


$('#example').DataTable( {
    language: {
        select: {
            cells: {
                _: "Selected %d cells",
                0: "Click a cell to select it",
                1: "Selected 1 cell"
            }
        }
    },
    select: true
} );



//https://datatables.net/reference/option/language.select.columns

//A simple string with no concern for pluralisation:


$('#example').DataTable( {
    language: {
        select: {
            columns: "%d columns selected"
        }
    },
    select: true
} );

//Show a message when no columns are selected:

$('#example').DataTable( {
    language: {
        select: {
            columns: {
                _: "Selected %d columns",
                0: "Click a column to select it",
                1: "Selected 1 column"
            }
        }
    },
    select: true
} );

//A simple string with no concern for pluralisation:




$('#example').DataTable( {
    language: {
        select: {
            rows: "%d rows selected"
        }
    },
    select: true
} );

//Show a message when no rows are selected:

$('#example').DataTable( {
    language: {
        select: {
            rows: {
                _: "Selected %d rows",
                0: "Click a row to select it",
                1: "Selected 1 row"
            }
        }
    },
    select: true
} );


//https://datatables.net/reference/option/select

//Enable selection of rows in the OS style:



$('#example').DataTable( {
    select: true
} );



//Enable selection of a single row:


$('#example').DataTable( {
    select: 'single'
} );


//Disable selection summary information from being shown in the table information element.:

$('#example').DataTable( {
    select: {
        info: false
    }
} );


//Select cells with no summary information shown:

$('#example').DataTable( {
    select: {
        items: 'cells',
        info: false
    }
} );

//https://datatables.net/reference/option/select.blurable

//Default
// Value: false

//Remove selected items when clicking outside of the table:

$('#example').DataTable( {
    select: {
        blurable: true
    }
} );


//https://datatables.net/reference/option/select.className



//Default
// Value: selected


//Set a custom class name for the item selection class:



$('#example').DataTable( {
    select:
    style:     'os',
    className: 'row-selected'
}
} );




//https://datatables.net/reference/option/select.info


//When enabled and information is shown the following markup is added to the table's information element:

<span class="select-info">
    <span class="select-item"/>{rows}</span>
    <span class="select-item"/>{columns}</span>
    <span class="select-item"/>{cells}</span>
    </span>




//Default
// Value: true

//Disable selection summary information:

$('#example').DataTable( {
    select: {
        info: false
    }
} );





//https://datatables.net/reference/option/select.items


///Default
// Value: row


//Select columns on load:

$('#example').DataTable( {
    select: {
        items: 'column'
    }
} );



//Select cells on load:

$('#example').DataTable( {
    select: {
        items: 'cell'
    }
} );

//Default
// Value: td, th

//Allow selection on the first column only:

$('#example').DataTable( {
    select: {
        style:    'os',
        selector: 'td:first-child',
        blurable: true
    }
} );

//Allow selection on all but the last column:

$('#example').DataTable( {
    select: {
        style:    'os',
        selector: 'td:not(:last-child)'
    }
} );


//https://datatables.net/reference/option/select.style


//Disable end user selection via Select's click event handler:


$('#example').DataTable( {
    select: {
        style: 'api'
    }
} );






//Enable selection with single item selection only:


$('#example').DataTable( {
    select: {
        style: 'single'
    }
} );


//https://datatables.net/reference/option/select.toggleable

//Default
// Value: false

//Disable the deselection of selected rows when clicked:

$(document).ready(function() {
    let table = $('#example').DataTable( {
        select: {
            toggleable: false
        }
    } );
    table.row(2).select();
} );

//https://datatables.net/reference/option/button.searchPanes



//SearchPanes Button initialisation: Set the config for SearchPanes to enable the cascadePanes option:


$('#example').DataTable( {
    buttons:[
        {
            extend: 'searchPanes',
            config: {
                cascadePanes: true
            }
        }
    ],
    dom: 'Bfrtip',
});


//https://datatables.net/reference/option/language.select


//Set the strings to be used for row selection



$('#example').DataTable( {
    language: {
        select: {
            rows: {
                _: "Selected %d rows",
                1: "Selected 1 row"
            }
        }
    },
    select: true ,

} );

