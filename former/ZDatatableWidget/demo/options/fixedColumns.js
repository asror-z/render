//https://datatables.net/reference/option/fixedColumns

//Default
// Value: undefined

//Enable FixedColumns for a table:
//
// Javascript


$('#example').DataTable( {
    fixedColumns: true
} );


//Enable FixedColumns with configuration options:

$('#example').DataTable( {
    fixedColumns: {
        leftColumns: 2
    }
} );


//https://datatables.net/reference/option/fixedColumns.heightMatch

//Default
// Value: semiauto

//Allow CSS to set the row height:


$('#example').DataTable( {
    fixedColumns: {
        heightMatch: 'none'
    }
} );


//https://datatables.net/reference/option/fixedColumns.leftColumns

//Fixed two columns to the left of the table:


$('#example').DataTable( {
    fixedColumns: {
        leftColumns: 2
    }
} );


//Fix no columns on the left of the table:

$('#example').DataTable( {
    fixedColumns: {
        leftColumns: 0,
        rightColumns: 1
    }
} );

//Fix no columns on the left of the table:


$('#example').DataTable( {
    fixedColumns: {
        leftColumns: 0,
        rightColumns: 1
    }
} );


//https://datatables.net/reference/option/fixedColumns.rightColumns

//Default
// Value: 0

//Left and right columns fixed:

$('#example').DataTable( {
    fixedColumns: {
        rightColumns: 1
    }
} );

//Fix no columns on the left of the table:


$('#example').DataTable( {
    fixedColumns: {
        leftColumns: 0,
        rightColumns: 1
    }
} );










