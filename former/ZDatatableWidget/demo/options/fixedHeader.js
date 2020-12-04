//https://datatables.net/reference/option/fixedHeader

//Default
// Value: undefined
//Enable FixedHeader with default values:

$('#example').DataTable( {
    fixedHeader: true
} );

//Enable FixedHeader with footer also enabled:


$('#example').DataTable( {
    fixedHeader: {
        footer: true
    }
} );


//https://datatables.net/reference/option/fixedHeader.footer


//Default
// Value: false
//Disable the header, but enable footer:

$('#example').DataTable( {
    fixedHeader: {
        header: false,
        footer: true
    }
} );

//Default
// Value: 0

//Set the footer offset to a known value:


$('#example').DataTable( {
    fixedHeader: {
        footer: true,
        footerOffset: 40
    }
} );


//Use jQuery to calculate a required offset:

$('#example').DataTable( {
    fixedHeader: {
        footer: true,
        footerOffset: $('#navMenu').outerHeight()
    }
} );


//Default
// Value: true

//Disable the header, but enable footer:

$('#example').DataTable( {
    fixedHeader: {
        header: false,
        footer: true
    }
} );

//https://datatables.net/reference/option/fixedHeader.headerOffset

//Default
// Value: 0

//Set the header offset to a known value

$('#example').DataTable( {
    fixedHeader: {
        headerOffset: 50
    }
} );

//Use jQuery to calculate a required offset:

$('#example').DataTable( {
    fixedHeader: {
        headerOffset: $('#navMenu').outerHeight()
    }
} );












