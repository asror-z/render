/**
 *
 * Author:  Asror Zakirov
 * Created: 6/13/2020 9:37 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */




//57 records available in the table, no filtering applied:



 "ServerSide": null   // Default

$('#example').dataTable( {
    "serverSide": true,
    "ajax": "scripts/server_processing.php",
    "deferLoading": 57
} );


//57 records after filtering, 100 without filtering (an initial filter applied):

$('#example').dataTable( {
    "serverSide": true,
    "ajax": "scripts/server_processing.php",
    "deferLoading": [ 57, 100 ],
    "search": {
        "search": "my_filter"
    }
} );




"destroy": false   // Default


//Destroy an existing table and create a new one

$('#example').dataTable( {
    "scrollY": "200px"
} );

// Some time later, recreate without (no scrolling)
$('#example').dataTable( {
    "destroy": true
} );



"displayStart" : 0  //Default


    //Show row 20 as the first row in the table on startup:
$('#example').dataTable( {
    "displayStart": 20
} );

//Disable information display:
$('#example').dataTable( {
    "info": false
} );



//Related
// The following options are directly related and may also be useful in your application development.
//
// Options


$('#example').dataTable( {
    "language": {
        "info": "Showing page _PAGE_ of _PAGES_"
    }
} );

$('#example').dataTable( {
    "language": {
        "infoEmpty": "No entries to show"
    }
} );

$('#example').dataTable( {
    "language": {
        "infoFiltered": " - filtered from _MAX_ records"
    }
} );

//You can also include html in the value. For example, if you want to highlight the text to indicate that it is filtered:


$('#example').dataTable( {
    "language": {
        "infoFiltered": " <span class='quickApproveTable_info_filtered_span'>(filtered from _MAX_ total entries)</span>"
    }
} );

//Show start to end indexes in the information element:


$('#example').dataTable( {
    "infoCallback": function( settings, start, end, max, total, pre ) {
        return start +" to "+ end;
    }
} );


//Use the API in the callback to show page count


$('#example').dataTable( {
    "infoCallback": function( settings, start, end, max, total, pre ) {
        var api = this.api();
        var pageInfo = api.page.info();

        return 'Page '+ (pageInfo.page+1) +' of '+ pageInfo.pages;
    }
} );


//Styling
// The styling libraries that DataTables supports will override the default value of the dom parameter and replace it with a value that is suitable for their layout system. For example the Bootstrap integration makes use of Bootstrap's grid layout.
//
// The defaults for the styling integrations are:
//
// Bootstrap 3:

"<'row'<'col-sm-6'l><'col-sm-6'f>>" +
"<'row'<'col-sm-12'tr>>" +
"<'row'<'col-sm-5'i><'col-sm-7'p>>",
//4

"<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
"<'row'<'col-sm-12'tr>>" +
"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",

//foundation:

"<'row'<'small-6 columns'l><'small-6 columns'f>r>"+
"t"+
"<'row'<'small-6 columns'i><'small-6 columns'p>>",

//jQuery UI:

'<"fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-tl ui-corner-tr"lfr>'+
't'+
'<"fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-bl ui-corner-br"ip>',



//Semantic UI:

"<'ui stackable grid'"+
"<'row'"+
"<'eight wide column'l>"+
"<'right aligned eight wide column'f>"+
">"+
"<'row dt-table'"+
"<'sixteen wide column'tr>"+
">"+
"<'row'"+
"<'seven wide column'i>"+
"<'right aligned nine wide column'p>"+
">"+
">"



//No filtering input control:


/* Results in:
    <div class="wrapper">
      {length}
      {processing}
      {table}
      {information}
      {pagination}
    </div>
*/
$('#example').dataTable( {
    "dom": 'lrtip'
} );

//Simpler wrapper element:



/* Results in:
    <div class="wrapper">
      {filter}
      {length}
      {information}
      {pagination}
      {table}
    </div>
*/
$('#example').dataTable( {
    "dom": '<"wrapper"flipt>'
} );



//Length and filter above, information and pagination below table


/* Results in:
    <div>
      {length}
      {filter}
      <div>
        {table}
      </div>
      {information}
      {pagination}
    </div>
*/
$('#example').dataTable( {
    "dom": '<lf<t>ip>'
} );

//Table summary in header, filtering, length and processing in footer, with a clearing element.:

/* Results in:
    <div class="top">
      {information}
    </div>
    {processing}
    {table}
    <div class="bottom">
      {filter}
      {length}
      {pagination}
    </div>
    <div class="clear"></div>
*/
$('#example').dataTable( {
    "dom": '<"top"i>rt<"bottom"flp><"clear">'
} );

//Table summary in header, filtering, length and processing in footer, with a clearing element.:



/* Results in:
    <div class="top">
      {information}
    </div>
    {processing}
    {table}
    <div class="bottom">
      {filter}
      {length}
      {pagination}
    </div>
    <div class="clear"></div>
*/
$('#example').dataTable( {
    "dom": '<"top"i>rt<"bottom"flp><"clear">'
} );


//Show options 10, 25, 50, 75 and 100 records:


"lengthMenu":  [ 10, 25, 50, 100 ]   // Default

  

$('#example').dataTable( {
    "lengthMenu": [ 10, 25, 50, 75, 100 ]
} );

//Show options 10, 25, 50 and all records:


$('#example').dataTable( {
    "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
} );

//No ordering applied by DataTables during initialisation. The rows are shown in the order they are read by DataTables (i.e. the original order from the DOM if DOM sourced, or the array of data if Ajax / data sourced):


"order": [[0, 'asc']]    //Default



$('#example').dataTable( {
    "order": []
} );


//Multi-column ordering as the initial state:

$('#example').dataTable( {
    "order": [[ 0, 'asc' ], [ 1, 'asc' ]]
} );


//Consider for example the following HTML header:


<thead>
<tr>
<td rowspan="2">1</td>
    <td>2.1</td>
    </tr>
    <tr>
    <td>2.2</td>
    </tr>
    </thead>


    //Use the top cells in a complex header for ordering:


"orderCellsTop":false      // Default


$('#example').dataTable( {
    "orderCellsTop": true
} );

//Consider for example the following HTML header:


<thead>
<tr>
<td rowspan="2">1</td>
    <td>2.1</td>
    </tr>
    <tr>
    <td>2.2</td>
    </tr>
    </thead>

    //Use the top cells in a complex header for ordering:




$('#example').dataTable( {
    "orderCellsTop": true
} );


//Disable column sorting classes:

"orderClasses":true    // Default


$('#example').dataTable( {
    "orderClasses": false
} );

//The first column will always be sorted upon first:



$('#example').dataTable( {
    "orderFixed": [ 0, 'asc' ]
} );



//As above, the first colum is fixed ordering, but in object form



$('#example').dataTable( {
    "orderFixed": {
        "pre": [ 0, 'asc' ]
    }
} );



//The first and second column will always be ordered upon last (postfix) - note how a 2D array is used to specify multiple columns for postfix ordering.:

$('#example').dataTable( {
    "orderFixed": {
        "post": [[ 0, 'asc' ], [ 1, 'asc' ]]
    }
} );

//Both postfix and prefix options specified:


$('#example').dataTable( {
    "orderFixed": {
        "pre": [ 0, 'asc' ],
        "post": [ 1, 'asc' ]
    }
} );


//Disable multiple column ordering ability:


"orderMulti":true   // Default

$('#example').dataTable( {
    "orderMulti": false
} );




//Show 50 records per page:


"pageLength": 10    //Default

$('#example').dataTable( {
    "pageLength": 50
} );




//Use the full_numbers type of pagination control


Value: simple_numbers  // Default


$('#example').dataTable( {
    "pagingType": "full_numbers"
} );



//To change the amount of page numbers being displayed on the pagination bar, execute this after the DataTables library is loaded:

$.fn.DataTable.ext.pager.numbers_length = 9;


//Using the Bootstrap plug-in renderer:



$('#example').dataTable( {
    renderer: "bootstrap"
} );




//Specifying a specific renderer type for each available operation:

$('#example').dataTable( {
    renderer: {
        "header": "jqueryui",
        "pageButton": "bootstrap"
    }
} );





//Retrieve DataTable instance for an exisiting table


"retrieve": false   // Default


$(document).ready( function() {
    initTable();
    tableActions();
} );

function initTable () {
    return $('#example').dataTable( {
        "scrollY": "200px",
        "paginate": false,
        "retrieve": true
    } );
}

function tableActions () {
    var table = initTable();

    // perform API operations with `table`
    // ...
}


//Use the property staffId as the data source for the row id:


rowId: DT_RowId    //Default


$('#myTable').DataTable( {
    ajax: '/api/staff',
    rowId: 'staffId'
} );



//Enable state saving:


scrollCollapse: false   // Default

$('#example').dataTable( {
    scrollY: 300,
    scrollCollapse: true
} );



//Set an initial filter:




$('#example').dataTable( {
    "search": {
        "search": "Fred"
    }
} );



//Filter using case-sensitive matching:


"caseInsensitive":true    Default

$('#example').dataTable( {
    "search": {
        "caseInsensitive": false
    }
} );


//Treat search inputs as regular expressions:


"regex": false   //Default

$('#example').dataTable( {
    "search": {
        "regex": true
    }
} );



//Set an initial filter:



$('#example').dataTable( {
    "search": {
        "search": "Fred"
    }
} );


//https://datatables.net/reference/option/search.caseInsensitive



//Filter using case-sensitive matching:

$('#example').dataTable( {
    "search": {
        "caseInsensitive": false
    }
} );

    //https://datatables.net/reference/option/search.regex

//Treat search inputs as regular expressions:

$('#example').dataTable( {
    "search": {
        "regex": true
    }
} );






//https://datatables.net/reference/option/search.search


//Set an initial filter

$('#example').dataTable( {
    "search": {
        "search": "Fred"
    }
} );



//https://datatables.net/reference/option/search.smart


//Disable smart filtering:

"smart": true    //Default

$('#example').dataTable( {
    "search": {
        "smart": false
    }
} );

//https://datatables.net/reference/option/searchCols

//Set initial filtering on second and fourth columns:

$('#example').dataTable( {
    "searchCols": [
        null,
        { "search": "My filter" },
        null,
        { "search": "^[0-9]", "regex": true }
    ]
} );




//https://datatables.net/reference/option/searchDelay


//Set a 350mS throttle for searching:

searchDelay: null   //Default

$('#example').DataTable( {
    searchDelay: 350
} );

//

//https://datatables.net/reference/option/stateDuration

//Set state duration to 1 day:

"stateDuration": 7200  //Default

$('#example').dataTable( {
    "stateSave": true,
    "stateDuration": 60 * 60 * 24
} );




//Use sessionStorage:
//
// Javascript

$('#example').dataTable( {
    "stateSave": true,
    "stateDuration": -1
} );

//https://datatables.net/reference/option/stripeClasses



//Use three stripe classes:


$('#example').dataTable( {
    "stripeClasses": [ 'strip1', 'strip2', 'strip3' ]
} );


//https://datatables.net/reference/option/tabIndex

//Default
"tabIndex": 0

$('#example').dataTable( {
    "tabIndex": 1
} );





















































