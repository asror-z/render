/**
 *
 * Author:  Asror Zakirov
 * Created: 6/13/2020 11:06 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */



//https://datatables.net/reference/event/column-sizing


//Notify when the column widths are recalculated:


$('#example').dataTable();

$('#example').on( 'column-sizing.dt', function ( e, settings ) {
    console.log( 'Column width recalculated in table' );
} );


//https://datatables.net/reference/event/column-visibility


//Notify when column visiblity is changed:

$('#example').dataTable();

$('#example').on( 'column-visibility.dt', function ( e, settings, column, state ) {
    console.log(
        'Column '+ column +' has changed to '+ (state ? 'visible' : 'hidden')
    );
} );


//https://datatables.net/reference/event/destroy

//Remove bound events on table destroy:


$('#example')
    .dataTable()
    .on( 'click', 'td', function () {
        alert( this.innerHTML );
    } );

$('#example').on( 'destroy.dt', function ( e, settings ) {
    $(this).off( 'click', 'td' );
} );

//https://datatables.net/reference/event/draw

//Log to console on each draw:



var table = $('#example').DataTable();

table.on( 'draw', function () {
    console.log( 'Redraw occurred at: '+new Date().getTime() );
} );

//https://datatables.net/reference/event/error

//Use the event as a custom error handler:

$.fn.dataTable.ext.errMode = 'none';

$('#example')
    .on( 'error.dt', function ( e, settings, techNote, message ) {
        console.log( 'An error has been reported by DataTables: ', message );
    } )
    .DataTable();


//https://datatables.net/reference/event/init

//Show information about the current sort using the API:


console.log( 'Table initialisation start: '+new Date().getTime() );

$('#example')
    .on( 'init.dt', function () {
        console.log( 'Table initialisation complete: '+new Date().getTime() );
    } )
    .dataTable();


    //https://datatables.net/reference/event/length


$('#example').dataTable();

$('#example').on( 'length.dt', function ( e, settings, len ) {
    console.log( 'New page length: '+len );
} );



 //Show information about the current page using the API:


var table = $('#example').DataTable();

$('#example').on( 'page.dt', function () {
    var info = table.page.info();
    $('#pageInfo').html( 'Showing page: '+info.page+' of '+info.pages );
} );


//https://datatables.net/reference/event/preDraw


//Log time taken to draw the page:


var table = $('#example').DataTable();
var startTime;

table
    .on( 'preDraw', function () {
        startTime = new Date().getTime();
    } )
    .on( 'draw.dt', function () {
        console.log( 'Redraw took at: '+(new Date().getTime()-startTime)+'mS' );
    } );


    //https://datatables.net/reference/event/preInit


    //Set the data length to display to be 20 items:

$(document).on( 'preInit.dt', function (e, settings) {
    var api = new $.fn.dataTable.Api( settings );

    api.page.len( 20 );
} );

$('#example').DataTable();

//https://datatables.net/reference/event/preXhr


//Send additional data to the server on an Ajax request using an event:

$('#example')
    .on('preXhr.dt', function ( e, settings, data ) {
        data.sessionId = $('#sessionId').val();
    } )
    .dataTable( {
        ajax: "data.json"
    } );

// Note that `ajax.data` could also be used to perform this action in this case


//https://datatables.net/reference/event/processing


//Show / hide notification of table processing (where #example is the DataTable):


$('#example')
    .on( 'processing.dt', function ( e, settings, processing ) {
        $('#processingIndicator').css( 'display', processing ? 'block' : 'none' );
    } )
    .dataTable();


    //https://datatables.net/reference/event/search

    //Update an external input with filtering information using the API:




var table = $('#example').DataTable();

table.on( 'search.dt', function () {
    $('#filterInfo').html( 'Currently applied global search: '+table.search() );
} );



//https://datatables.net/reference/event/stateLoadParams

//Remove a saved filter from the saved state data:

$('#example')
    .dataTable()
    .on( 'stateLoadParams.dt', function (e, settings, data) {
        data.search.search = "";
    } );



    //https://datatables.net/reference/event/stateLoaded


    //Show custom saved data in an input element:


$('#example')
    .dataTable()
    .on( 'stateLoaded.dt', function (e, settings, data) {
        $('#myInput').val( data.myCustomValue );
    } );

    //https://datatables.net/reference/event/stateSaveParams


$('#example')
    .dataTable()
    .on( 'stateSaveParams.dt', function (e, settings, data) {
        data.search.search = "";
    } );




//https://datatables.net/reference/event/xhr


//Pre-process the data returned from the server:




$('#example')
    .on('xhr.dt', function ( e, settings, json, xhr ) {
        for ( var i=0, ien=json.aaData.length ; i<ien ; i++ ) {
            json.aaData[i].sum = json.aaData[i].one + json.aaData[i].two;
        }
        // Note no return - manipulate the data directly in the JSON object.
    } )
    .dataTable( {
        ajax: "data.json"
    } );


    //Use a custom property returned from the server in another DOM element:




$('#example')
    .on('xhr.dt', function ( e, settings, json, xhr ) {
        $('#status').html( json.status );
    } )
    .dataTable( {
        ajax: "data.json"
    } );







//Trigger inline editing with Editor when the enter key is pressed. Note that the keys.editor option can be used to provide a similar interface.:

























