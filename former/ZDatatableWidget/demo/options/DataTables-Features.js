// https://datatables.net/reference/option/
   

    //autoWidth
    //Enable or disable automatic column width calculation. This can be disabled as an optimisation (it takes a finite amount of time to calculate the widths) if the tables widths are passed in using

        autoWidth : true, //default

        //Disable smart width calculations:
        $('#example').dataTable( {
            "autoWidth": false
        } );


     //deferRender  By default, when DataTables loads data from an Ajax or Javascript data source (ajax and data respectively) it will create all HTML elements needed up-front. When working with large data sets, this operation can take a not-insignificant amount of time, particularly in older browsers such as IE6-8. This option allows DataTables to create the nodes (rows and cells in the table body) only when they are needed for a draw.
    //Enable deferred rendering:
    "deferRender": true //default
    
    $('#example').dataTable( {
        "ajax": "sources/arrays.txt",
        "deferRender": true
    } );

    //Events with deferred rendering:
    $('#example tbody').on( 'click', 'td', function () {
        alert( 'Clicked on: '+this.innerHTML );
    } );

    $('#example').dataTable( {
        "ajax": "sources/arrays.txt",
        "deferRender": true
    } );

    //Feature control table information display field.When this option is enabled, Datatables will show information about the table including information about filtered data if that action is being performed. This option allows that feature to be enabled or disabled.
    "info": true //default
    
    //Disable information display:

    $('#example').dataTable( {
        "info": false
    } );


    //LengthChange 
    // -- Feature control the end user's ability to change the paging display length of the table.

    "lengthChange": true //default

    //Disable user ability to change number of records per page:

    $('#example').dataTable( {
        "lengthChange": false
    } );

    //orderingSince:
    // Feature control ordering (sorting) abilities in DataTables.

    "ordering": true //default

    //Disable ordering in the table:

    $('#example').dataTable( {
        "ordering": false
    } );

    //ordering
    // Feature control ordering (sorting) abilities in DataTable

    "ordering": true //default

    //Disable ordering in the table:

     $('#example').dataTable( {
       "ordering": false
     } );

     //pagingSince: DataTables 1.10
    // Enable or disable table pagination

    "paging": true //default

    //Disable pagination:

    $('#example').dataTable( {
        "paging": false
    } );

    //processing
    // Feature control the processing indicator
    "processing": false //default

    //Enable processing display:

    $('#example').dataTable( {
        "processing": true
    } );

    //scrollXSince: DataTables 1.10
    // Horizontal scrolling

    "scrollX": false //default

    //Enable horizontal scrolling:

    $('#example').dataTable( {
        "scrollX": true
    } );

    //scrollYSince: DataTables 1.10
    // Vertical scrolling.

    //Enable vertical scrolling with pagination disabled:
    $('#example').dataTable( {
        "scrollY": "200px",
        "scrollCollapse": true,
        "paging": false
    } );

    //searchingSince: DataTables 1.10
    // Feature control search (filtering) abilities.

    "searching": true //default

    $('#example').dataTable( {
        "searching": false
    } );


    //serverSideSince: DataTables 1.10
    // Feature control DataTables' server-side processing mode.

    "serverSide": true,//default

    $('#example').dataTable( {
        "serverSide": true,
        "ajax": "xhr.php"
    } );

    //stateSaveSince: DataTables 1.10
    // State saving - restore table state on page reload.

    //Enable state saving:

    $('#example').dataTable( {
        stateSave: true
    } );

    //Enable state saving and override state save/load handlers to use only the table's DOM id:

    $('#example').dataTable( {
        stateSave: true,
        stateSaveCallback: function(settings,data) {
            localStorage.setItem( 'DataTables_' + settings.sInstance, JSON.stringify(data) )
        },
        stateLoadCallback: function(settings) {
            return JSON.parse( localStorage.getItem( 'DataTables_' + settings.sInstance ) )
        }
    } );
    
