/**
 *
 * Author:  Asror Zakirov
 * Created: 6/13/2020 10:43 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */

 /*https://datatables.net/reference/option/*/

 /*https://datatables.net/reference/option/rowGroup*/
 /*Description
RowGroup is an extension for DataTables that provides grouping capabilities (like all other DataTables extensions, the clue is in the name!). A data point in the table's data is used to group information and then display grouping rows before and / or after the group, with options to customise the display of those rows.

This option provides the ability to enable and configure RowGroup for DataTables. In its simplest form as the boolean true it will enable RowGroup with the default configuration options (as defined by $.fn.dataTable.RowGroup.defaults). However, it is more likely that you will wish to use it as an object to provide custom configuration options, particularly for the data parameter to use for the grouping (rowGroup.dataSrc).

Please note that as with all other configuration options for RowGroup, this option is an extension to the default set of DataTables options. This property should be set in the DataTables initialisation object.*/


Value: undefined //default

/*Enable row grouping:*/
$('#myTable').DataTable( {
    rowGroup: true
} );
    /*Enable row grouping with a grouping data property specified:*/
$('#myTable').DataTable( {
    rowGroup: {
        dataSrc: 'group'
    }
} );


/*https://datatables.net/reference/option/rowGroup.className*/
/*Description
When using RowGroup it is important that your end users be able to distinguish between the regular rows in the table and the grouping rows. This is typically done with CSS and this property provides the ability to customise the class that RowGroup assigns to each grouping row.

Note that this class is assigned to both start and end rows.*/


Value: group  //default
$('#myTable').DataTable( {
    rowGroup: {
        className: 'table-group'
    }
} );


    /*https://datatables.net/reference/option/rowGroup.dataSrc*/
    /*Description
When using RowGroup you are very likely to wish to set this parameter as it provides the software with the information needed to find the data by which to group the rows in the table.

It is important to note that if you are using objects as a data source for the table, this property should be set to a string (the value being the property name for the grouping data), while if you are using arrays, it should be an index matching the column index for the grouping data.

When using objects it is not required that the data used for grouping be used in a column (unless you wish to be able to order the table by that data as well).

The data source for grouping can be dynamically altered using the rowGroup().dataSrc() method, after the table has been initialised.*/


Value: 0 //default

//Set an object property name as the data source for grouping information:
$('#myTable').DataTable( {
    rowGroup: {
        dataSrc: 'group'
    }
} );

//Nested data:
$('#myTable').DataTable( {
    rowGroup: {
        dataSrc: [
            'group',
            'date'
        ]
    }
} );



/*https://datatables.net/reference/option/rowGroup.emptyDataGroup*/
/*Description
If the data point (rowGroup.dataSrc) for a row is null, undefined or an empty string, it will still create a group of similar data, but the label shown is defined by this option.*/

Value: No group //default


//Set a custom group message:
$('#myTable').DataTable( {
    rowGroup: {
        emptyDataGroup: 'No categories assigned yet'
    }
} );

//Show no grouping row:

$('#myTable').DataTable( {
    rowGroup: {
        emptyDataGroup: null
    }
} );


/*https://datatables.net/reference/option/rowGroup.enable*/
/*Description
When using RowGroup you are most likely to set up an initial grouping configuration for the end user (using the rowGroup.dataSrc) option. But if you wish to provide the option to have the table initially un-grouped and let the user select the group (rowGroup().dataSrc()) this option provides that ability.*/


Value: true //default

$('#myTable').DataTable( {
    rowGroup: {
            enable: false
    }
} );


/*https://datatables.net/reference/option/rowGroup.endClassName*/
/*Description
When styling a grouped table, you will likely wish to visually distinguish between the start and the end grouping rows (if you are using both), applying different styles to each. This parameter provides the ability to customise the class name that is assigned to the grouping end rows.

Note that this class is assigned in addition to the rowGroup.className property, which can be used to provide common styling to both the start and end rows.*/

Value: group-end //default

$('#myTable').DataTable( {
    rowGroup: {
        startClassName: 'table-end-group'
    }
} );



/*https://datatables.net/reference/option/rowGroup.endRender*/
/*Description
It can be really useful to modify the contents of the grouping row that is displayed by RowGroup. By default it simply shows the grouping data value, but often you might wish to show more complex data, such as aggregations, counts and other summary information. This option provides that ability by letting you specify a function that will return the data to be shown for the group's ending row.

The function defined by this option will be called once for every group shown in the DataTables' current page, and will be called again every time the page is changed (e.g. paging, search or sort) to keep the grouping information current. As such it is important that the function used should be relatively fast in its execution - e.g. do not make any asynchronous Ajax calls!*/


Value: null //default

//Show the number of rows in the group along with the group data value:
$('#myTable').DataTable( {
    rowGroup: {
        endRender: function ( rows, group ) {
            return group +' ('+rows.count()+' rows)';
        }
    }
} );

//Disable the start grouping row:
$('#myTable').DataTable( {
    rowGroup: {
        startRender: null,
        endRender: function ( rows, group ) {
            return group +' ('+rows.count()+' rows)';
        }
    }
} );

//Show aggregate data in the footer:
$('#myTable').DataTable( {
    rowGroup: {
        endRender: function ( rows, group ) {
            var avg = rows
                .data()
                .pluck('salary')
                .reduce( function (a, b) {
                    return a + b.replace(/[^\d]/g, '')*1;
                }, 0) / rows.count();

            return 'Average salary in '+group+': '+
                $.fn.dataTable.render.number(',', '.', 0, '$').display( avg );
        }
    }
} );


/*https://datatables.net/reference/option/rowGroup.startClassName*/
/*Description
When styling a grouped table, you will likely wish to visually distinguish between the start and end grouping rows (if you are using both), applying different styles to each. This parameter provides the ability to customise the class name that is assigned to the grouping start rows.

Note that this class is assigned in addition to the rowGroup.className property, which can be used to provide common styling to both the start and end rows.*/

Value: group-start //default

$('#myTable').DataTable( {
    rowGroup: {
        startClassName: 'table-start-group'
    }
} );


/*https://datatables.net/reference/option/rowGroup.startRender*/
/*Description
It can be really useful to modify the contents of the grouping row that is displayed by RowGroup. By default it simply shows the grouping data value, but often you might wish to show more complex data, such as aggregations, counts and other summary information. This option provides that ability by letting you specify a function that with return the data to be shown for the group's starting row.

The function defined by this option will be called once for every group shown in the DataTables' current page, and will be called again every time the page is changed (e.g. paging, search or sort) to keep the grouping information current. As such it is important that the function used should be relatively fast in its execution - e.g. do not make any asynchronous Ajax calls!*/


Value: function (rows, data) { return data; } //default

$('#myTable').DataTable( {
    rowGroup: {
        startRender: function ( rows, group ) {
            return group +' ('+rows.count()+' rows)';
        }
    }
} );



