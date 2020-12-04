//https://datatables.net/reference/option/columns.responsivePriority

//Default
// Value: undefined


//Give priority to the first and last columns:

$('#example').DataTable( {
    responsive: true,
    columnDefs: [
        { responsivePriority: 1, targets: 0 },
        { responsivePriority: 2, targets: -1 }
    ]
} );


//Hide columns from the left to the right:

$('#example').DataTable( {
    responsive: true,
    columns: [
        { responsivePriority: 6 },
        { responsivePriority: 5 },
        { responsivePriority: 4 },
        { responsivePriority: 3 },
        { responsivePriority: 2 },
        { responsivePriority: 1 }
    ]
} );


//https://datatables.net/reference/option/responsive
//Default
// Value: undefined

//Enable Responsive for a table
$('#example').DataTable( {
    responsive: true
} );


//Enable Responsive with configuration options:


$('#example').DataTable( {
    responsive: {
        details: false
    }
} );


//Here is an example of custom breakpoints:


$('#example').DataTable( {
    responsive: {
        breakpoints: [
            {name: 'bigdesktop', width: Infinity},
            {name: 'meddesktop', width: 1480},
            {name: 'smalldesktop', width: 1280},
            {name: 'medium', width: 1188},
            {name: 'tabletl', width: 1024},
            {name: 'btwtabllandp', width: 848},
            {name: 'tabletp', width: 768},
            {name: 'mobilel', width: 480},
            {name: 'mobilep', width: 320}
        ]
    }
} );


//https://datatables.net/reference/option/responsive.breakpoints
//
//
// The default breakpoints defined by $.fn.dataTable.Responsive.breakpoints is:
[
    { name: 'desktop',  width: Infinity },
    { name: 'tablet-l', width: 1024 },
    { name: 'tablet-p', width: 768 },
    { name: 'mobile-l', width: 480 },
    { name: 'mobile-p', width: 320 }
]


//https://datatables.net/reference/option/responsive.details

//Default
// Value: true

//Disable the details row display:

$('#example').DataTable( {
    responsive: {
        details: false
    }
} );

//Set the type option for the details display:


$('#example').DataTable( {
    responsive: {
        details: {
            type: 'column'
        }
    }
} );

//https://datatables.net/reference/option/responsive.details.display


//Default
// Value: $.fn.dataTable.Responsive.display.childRow


//Use the childRowImmediate display option:
$('#example').DataTable( {
    responsive: {
        details: {
            display: $.fn.dataTable.Responsive.display.childRowImmediate,
            type: ''
        }
    }
} );


//Using modal without any options:
$('#example').DataTable( {
    responsive: {
        details: {
            display: $.fn.dataTable.Responsive.display.modal()
        }
    }
} );
//Using modal specifying a header:


$('#example').DataTable( {
    responsive: {
        details: {
            display: $.fn.dataTable.Responsive.display.modal( {
                header: function ( row ) {
                    var data = row.data();
                    return 'Details for '+data.clientName;
                }
            } )
        }
    }
} );

//https://datatables.net/reference/option/responsive.details.renderer


//Default
// Value: function


//Use the tableAll renderer without specifying a class name:

$('#example').DataTable( {
    responsive: {
        details: {
            renderer: $.fn.dataTable.Responsive.renderer.tableAll()
        }
    }
} );


//Use the tableAll renderer and specify a class name:

$('#example').DataTable( {
    responsive: {
        details: {
            renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                tableClass: 'ui table'
            } )
        }
    }
} );


//Custom renderer which displays the data that has been hidden in an HTML table:

$('#example').DataTable( {
    responsive: {
        details: {
            renderer: function ( api, rowIdx, columns ) {
                var data = $.map( columns, function ( col, i ) {
                    return col.hidden ?
                        '<tr data-dt-row="'+col.rowIndex+'" data-dt-column="'+col.columnIndex+'">'+
                        '<td>'+col.title+':'+'</td> '+
                        '<td>'+col.data+'</td>'+
                        '</tr>' :
                        '';
                } ).join('');

                return data ?
                    $('<table/>').append( data ) :
                    false;
            }
        }
    }
} );


//https://datatables.net/reference/option/responsive.details.target


//Default
// Value: 0

//Use the column control type and target the right most column


$('#example').DataTable( {
    responsive: {
        details: {
            type: 'column',
            target: -1
        }
    },
    columnDefs: [ {
        className: 'control',
        orderable: false,
        targets:   -1
    } ]
} );


//Use the whole row to show / hide the details row:

$('#example').DataTable( {
    responsive: {
        details: {
            type: 'column',
            target: 'tr'
        }
    }
} );


//https://datatables.net/reference/option/responsive.details.type

//Use the column control type:

$('#example').DataTable( {
    responsive: {
        details: {
            type: 'column'
        }
    },
    columnDefs: [ {
        className: 'control',
        orderable: false,
        targets:   0
    } ],
    order: [ 1, 'asc' ]
} );


//https://datatables.net/reference/option/responsive.orthogonal


$('#example').DataTable( {
    responsive: {
        orthogonal: 'responsive'
    }
} );




















