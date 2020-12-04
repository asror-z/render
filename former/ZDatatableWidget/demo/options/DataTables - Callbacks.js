/**
 *
 * Author:  Asror Zakirov
 * Created: 6/13/2020 9:29 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */

    /*https://datatables.net/reference/option/*/
   /*https://datatables.net/reference/option/createdRow*/
/*createdRow
This callback is executed when a TR element is created (and all TD child elements have been inserted), or registered if using a DOM source, allowing manipulation of the TR element.

    This is particularly useful when using deferred rendering (deferRender) or server-side processing (serverSide) so you can add events, class name information or otherwise format the row when it is created.*/


$('#example').dataTable( {
    "createdRow": function( row, data, dataIndex ) {
        if ( data[4] == "A" ) {
            $(row).addClass( 'important' );
        }
    }
} );


      /*https://datatables.net/reference/option/drawCallback*/
    /*drawCallback
It can be useful to take an action on every draw event of the table - for example you might want to update an external control with the newly displayed data, or with server-side processing is enabled you might want to assign events to the newly created elements. This callback is designed for exactly that purpose and will execute on every draw.*/


    /*Notify whenever DataTables does a draw:*/
$('#example').dataTable( {
    "drawCallback": function( settings ) {
        alert( 'DataTables has redrawn the table' );
    }
} );

    /*Use API method in the callback to get the data for the rows in the draw:*/
$('#example').dataTable( {
    "drawCallback": function( settings ) {
        var api = this.api();

        // Output the data for the visible rows to the browser's console
        console.log( api.rows( {page:'current'} ).data() );
    }
} );

        /*https://datatables.net/reference/option/footerCallback*/

    /*footerCallback
Identical to headerCallback but for the table footer this function allows you to modify the table footer on every 'draw' event.

Note that if the table does not have a tfoot element, it this callback will not be fired.*/


    /*Alter the content of the footer on callback:*/
$('#example').dataTable( {
    "footerCallback": function( tfoot, data, start, end, display ) {
        $(tfoot).find('th').eq(0).html( "Starting index is "+start );
    }
} );

    /*Use the API to sum a specific column and output:*/
$('#example').dataTable( {
    "footerCallback": function( tfoot, data, start, end, display ) {
        var api = this.api();
        $( api.column( 5 ).footer() ).html(
            api.column( 5 ).data().reduce( function ( a, b ) {
                return a + b;
            }, 0 )
        );
    }
} );
          /*https://datatables.net/reference/option/formatNumber*/
    /*formatNumber
DataTables will display numbers in a few different locations when drawing information about a table, for example in the table's information element and the pagination controls. When working with large numbers it is often useful to format it for readability by separating the thousand units - for example 1 million is rendered as "1,000,000", allowing the user to see at a glance what order of magnitude the number shows.

This function allows complete control over how that formatting is performed. By default DataTables will use the character specified in language.thousands (in turn, that, by default, is a comma) as the thousands separator.*/


$('#example').dataTable( {
    "formatNumber": function ( toFormat ) {
        return toFormat.toString().replace(
            /\B(?=(\d{3})+(?!\d))/g, "'"
        );
    };
} );

        /*https://datatables.net/reference/option/headerCallback*/
    /*headerCallback
This function is called on every 'draw' event (i.e. when a filter, sort or page event is initiated by the end user or the API), and allows you to dynamically modify the header row. This can be used to calculate and display useful information about the table.*/


$('#example').dataTable( {
    "headerCallback": function( thead, data, start, end, display ) {
        $(thead).find('th').eq(0).html( 'Displaying '+(end-start)+' records' );
    }
} );

    /*https://datatables.net/reference/option/infoCallback*/
    /*infoCallback
The information element can be used to convey information about the current state of the table. Although the internationalisation options presented by DataTables are quite capable of dealing with most customisations, there may be times where you wish to customise the string further. This callback allows you to do exactly that.

Please note that if the info option is disabled in the initialisation, this callback function is not fired*/

    /*Show start to end indexes in the information element:*/
$('#example').dataTable( {
    "infoCallback": function( settings, start, end, max, total, pre ) {
        return start +" to "+ end;
    }
} );

    /*Use the API in the callback to show page count:*/
$('#example').dataTable( {
    "infoCallback": function( settings, start, end, max, total, pre ) {
        var api = this.api();
        var pageInfo = api.page.info();

        return 'Page '+ (pageInfo.page+1) +' of '+ pageInfo.pages;
    }
} );

       /*https://datatables.net/reference/option/initComplete*/

    /*initComplete
It can often be useful to know when your table has fully been initialised, data loaded and drawn, particularly when using an ajax data source. In such a case, the table will complete its initial run before the data has been loaded (Ajax is asynchronous after all!) so this callback is provided to let you know when the data is fully loaded.

Additionally the callback is passed in the JSON data received from the server when Ajax loading data, which can be useful for configuring components connected to your table, for example Editor fields.*/


    /*Show an alert when the table has fully loaded:*/
$('#example').dataTable( {
    "initComplete": function(settings, json) {
        alert( 'DataTables has finished its initialisation.' );
    }
} );

    /*Show a loading message while the table is being initialised (processing will do this as well):*/
$('<div class="loading">Loading</div>').appendTo('body');

$('#example').dataTable( {
    "initComplete": function( settings, json ) {
        $('div.loading').remove();
    }
} );

       /*https://datatables.net/reference/option/preDrawCallback*/
    /*preDrawCallback
The partner of the drawCallback callback, this function is called at the very start of each table draw. It can therefore be used to update or clean the display before each draw (for example removing events), and additionally can be used to cancel the draw by returning false. Any other return (including undefined) results in the full draw occurring.*/

    /*Remove bound events from cells in the table's body:*/
$('#example').dataTable( {
    "preDrawCallback": function( settings ) {
        $('#example tbody').off( 'click', 'td' );
    }
} );


    /*Cancel the table draw if #test has a value of 1:*/
$('#example').dataTable( {
    "preDrawCallback": function( settings ) {
        if ( $('#test').val() == 1 ) {
            return false;
        }
    }
} );

       /*https://datatables.net/reference/option/rowCallback*/
    /*rowCallback
This callback allows you to 'post process' each row after it have been generated for each table draw, but before it is rendered into the document. This means that the contents of the row might not have dimensions ($().width() for example) if it is not already in the document.

This function might be used for setting the row class name or otherwise manipulating the row's tr element (although note that createdRow can often be more efficient).*/

    /*Highlight cells based on their content (object data source):*/
$('#example').dataTable( {
    "rowCallback": function( row, data ) {
        if ( data.grade == "A" ) {
            $('td:eq(4)', row).html( '<b>A</b>' );
        }
    }
} );
/*Highlight cells based on their content (array data source):*/
$('#example').dataTable( {
    "rowCallback": function( row, data ) {
        if ( data[4] == "A" ) {
            $('td:eq(4)', row).html( '<b>A</b>' );
        }
    }
} );

    /*https://datatables.net/reference/option/stateLoadCallback*/
    /*stateLoadCallback
With this callback you can define where, and how, the state of a table is loaded from. By default DataTables will load from localStorage or sessionStrorage, but for more permanent storage, you can store state in a server-side database.

Prior to DataTables 1.10.13 this method had to act synchronously, i.e. the state would be returned by the function. As of 1.10.13 it is possible to load state asynchronously via Ajax or any other async method and execute the callback function, passing in the loaded state.

To maintain backwards compatibility the state can still be returned synchronously. To use the callback method, simply don't return a value from your stateLoadCallback function. See below for examples of both use cases.

Note that this callback works hand-in-hand with stateSaveCallback. This callback loads the state from storage when the table is reloaded while stateSaveCallback saves it.*/

    /*Load state from a server via Ajax (1.10.13 or newer):*/
$('#example').DataTable( {
    stateSave: true,
    stateLoadCallback: function (settings, callback) {
        $.ajax( {
            url: '/state_load',
            dataType: 'json',
            success: function (json) {
                callback( json );
            }
        } );
    }
} );


    /*Load state from a server via Sjax (prior to 1.10.13):*/
$('#example').DataTable( {
    stateSave: true,
    stateLoadCallback: function (settings) {
        var o;

        // Send an Ajax request to the server to get the data. Note that
        // this is a synchronous request since the data is expected back from the
        // function
        $.ajax( {
            url: '/state_load',
            async: false,
            dataType: 'json',
            success: function (json) {
                o = json;
            }
        } );

        return o;
    }
} );


    /*https://datatables.net/reference/option/stateLoadParams*/
    /*stateLoadParams
Callback which allows modification of the saved state prior to loading that state. This callback is called when the table is loading state from the stored data, but prior to the settings object being modified by the saved state.

Note that the stateLoadCallback option is used to define where and how to load the state, while this function is used to manipulate the data once it has been retrieved from storage.

Further note that for plug-in authors, you should use the stateLoadParams event to load parameters for a plug-in.*/


    /*Remove a saved filter, so saved filtering is never loaded:*/
$('#example').dataTable( {
    "stateSave": true,
    "stateLoadParams": function (settings, data) {
        data.search.search = "";
    }
} );

    /*Disallow state loading by returning false:*/
$('#example').dataTable( {
    "stateSave": true,
    "stateLoadParams": function (settings, data) {
        return false;
    }
} );


    /*https://datatables.net/reference/option/stateLoaded*/
    /*stateLoaded
Callback that is fired once the state has been loaded (stateLoadCallback) and the saved data manipulated (if required - stateLoadParams).

This callback is useful if you simply wish to know information from the saved state, without getting into the inner workings of where and how the state information has been saved. For example it can be useful for populating custom filter inputs.*/


$('#example').dataTable( {
    "stateSave": true,
    "stateLoaded": function (settings, data) {
        alert( 'Saved filter was: '+data.search.search );
    }
} );


    /*https://datatables.net/reference/option/stateSaveCallback*/
    /*stateSaveCallback
DataTables can save the state of the table (paging, filtering etc) when the stateSave option is enabled, and by default it will use HTML5's localStorage to save the state into. This callback method allows you to change where the state is saved (for example you might wish to use a server-side database or cookies).*/

$('#example').dataTable( {
    "stateSave": true,
    "stateSaveCallback": function (settings, data) {
        // Send an Ajax request to the server with the state object
        $.ajax( {
            "url": "/state_save",
            "data": data,
            "dataType": "json",
            "type": "POST",
            "success": function () {}
        } );
    }
} );



    /*https://datatables.net/reference/option/stateSaveParams*/
    /*stateSaveParams
Callback which allows modification of the parameters to be saved for the DataTables state saving (stateSave), prior to the data actually being saved. This callback is called every time DataTables requests that the state be saved. For the format of the data that is stored, please refer to the stateSaveCallback documentation.

Note that the stateSaveCallback option is used to define where and how to store the state, while this function is used to manipulate the data before it is entered into storage.

Further note that for plug-in authors, you should use the stateSaveParams event to add extra parameters to the state storage object if required.*/


$('#example').dataTable( {
    "stateSave": true,
    "stateSaveParams": function (settings, data) {
        data.search.search = "";
    }
} );





    


    
