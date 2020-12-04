    /**
 *
 * Author:  Asror Zakirov
 * Created: 6/13/2020 9:50 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */

/*columnDefsSince: DataTables 1.10
Set column definition initialisation properties.

Description
Very similar to columns, this parameter allows you to assign specific options to columns in the table, although in this case the column options defined can be applied to one or more columns. Additionally, not every column need be specified, unlike columns.

This parameter is an array of column definition objects, where the options available exactly match those for columns (see below for list of options in the related links).

In addition to the column property options, columnDefs requires a targets property to be set in each definition object (columnDefs.targets). This targets property tells DataTables which column(s) the definition should be applied to. It can be:

0 or a positive integer - column index counting from the left
A negative integer - column index counting from the right
A string - class name will be matched on the TH for the column
The string _all - all columns (i.e. assign a default)
Additionally, targets can be either a single option from the list above, or an array of options (the different types can be mixed in the array if required). For example targets: [ -1, -2 ] would target the last and second last columns in the table.

*/
    // https://datatables.net/reference/option/columnDefs


var table = $('#myTable').DataTable( {
    columnDefs: [
        { targets: [0, 1], visible: true},
        { targets: '_all', visible: false }
    ]
} );




$('#example').dataTable( {
    "columnDefs": [ {
        "targets": 0,
        "searchable": false
    } ]
} );



/*Description
The columnDefs option allows a column definition object to be defined and then assigned to one or more columns in a DataTable, regardless of the order of the column definitions array, or the order of the columns in the table.

This columnDefs.targets option provides the information required by DataTables for which columns in the table the column definition object should be applied.*/


   //Disable filtering on the first column:


//  https://datatables.net/reference/option/columnDefs.targets


$('#example').dataTable( {
    "columnDefs": [ {
        "targets": 0,
        "searchable": false
    } ]
} );



  //Disable sorting on the first and third columns:

$('#example').dataTable( {
    "columnDefs": [ {
        "targets": [ 0, 2 ],
        "orderable": false
    } ]
} );


    //Disable ordering on columns which have a class of 'nosort':

$('#example').dataTable( {
    "columnDefs": [ {
        "targets": 'nosort',
        "orderable": false
    } ]
} );



/*columnsSince: DataTables 1.10
Set column specific initialisation properties.

Description
The columns option in the initialisation parameter allows you to define details about the way individual columns behave. For a full list of column options that can be set, please see the related parameters below.

Note that if you use columns to define your columns, you must have an entry in the array for every single column that you have in your table (these can be null if you don't wish to specify any options).*/

// https://datatables.net/reference/option/columns


$('#example').dataTable( {
    "columns": [
        { "searchable": false },
        null,
        null,
        null,
        null
    ]
} );





/*columns.cellTypeSince: DataTables 1.10
Cell type to be created for a column.

Description
Change the cell type created for the column - either TD cells or TH cells.

This can be useful as TH cells have semantic meaning in the table body, allowing them to act as a header for a row (you may wish to add scope='row' to the TH elements using columns.createdCell option).

Type
      https://datatables.net/reference/option/columns.cellType
*/

"cellType": "td"      //default

$('#example').dataTable( {
    "ajax": "json.txt",
    "columnDefs": [ {
        "targets": 0,
        "cellType": "th"
    } ]
} );



/*columns.classNameSince: DataTables 1.10
Class to assign to each cell in the column.

Description
Quite simply this option adds a class to each cell in a column, regardless of if the table source is from DOM, Javascript or Ajax. This can be useful for styling columns.*/


//https://datatables.net/reference/option/columns.className

 //Using className to assign a class to the cells in the first column with columnDefs:

$('#example').dataTable( {
    "columnDefs": [
        { className: "my_class", "targets": [ 0 ] }
    ]
} );


//Using className to assign a class to the cells in the first column with columns:

$('#example').dataTable( {
    "columns": [
        { className: "my_class" },
        null,
        null,
        null,
        null
    ]
} );


/*columns.contentPaddingSince: DataTables 1.10
Add padding to the text content used when calculating the optimal width for a table.

Description
The first thing to say about this property is that generally you shouldn't need this!

Having said that, it can be useful on rare occasions. When DataTables calculates the column widths to assign to each column, it finds the longest string in each column and then constructs a temporary table and reads the widths from that. The problem with this is that "mmm" is much wider then "iiii", but the latter is a longer string - thus the calculation can go wrong (doing it properly and putting it into an DOM object and measuring that is horribly slow!). Thus as a "work around" we provide this option. It will append its value to the text that is found to be the longest string for the column - i.e. padding.*/

//https://datatables.net/reference/option/columns.contentPadding


//Set a content padding for the last column in the table:

$('#example').dataTable( {
    "columns": [
        null,
        null,
        null,
        { "contentPadding": "mmm" }
    ]
} );



/*columns.createdCellSince: DataTables 1.10
Cell created callback to allow DOM manipulation.

Description
This is a callback function that is executed whenever a cell is created (Ajax source, etc) or read from a DOM source. It can be used as a complement to columns.render allowing modification of the cell's DOM element (add background colour for example) when the element is created (cells may not be immediately created on table initialisation if deferRender is enabled, or if rows are dynamically added using the API (rows.add()).*/

//https://datatables.net/reference/option/columns.createdCell

//Using createdCell manipulate the DOM with columnDefs:

$('#example').dataTable( {
    "columnDefs": [ {
        "targets": 3,
        "createdCell": function (td, cellData, rowData, row, col) {
            if ( cellData < 1 ) {
                $(td).css('color', 'red')
            }
        }
    } ]
} );


/*Description
This property can be used to read and write data to and from any data source property, including deeply nested objects / properties. data can be given in a number of different ways which affect its behaviour as documented below.*/

//https://datatables.net/reference/option/columns.data

"data": {
    "_": "phone",
        "filter": "phone_filter",
        "display": "phone_display"
}

   //Read table data from objects:
// JSON structure for each row in this example:
//   {
//      "engine": {value},
//      "browser": {value},
//      "platform": {value},
//      "version": {value},
//      "grade": {value}
//   }
$('#example').dataTable( {
    "ajaxSource": "sources/objects.txt",
    "columns": [
        { "data": "engine" },
        { "data": "browser" },
        { "data": "platform" },
        { "data": "version" },
        { "data": "grade" }
    ]
} );

     //Read information from deeply nested objects:
// JSON structure for each row:
//   {
//      "engine": {value},
//      "browser": {value},
//      "platform": {
//         "inner": {value}
//      },
//      "details": [
//         {value}, {value}
//      ]
//   }
$('#example').dataTable( {
    "ajaxSource": "sources/deep.txt",
    "columns": [
        { "data": "engine" },
        { "data": "browser" },
        { "data": "platform.inner" },
        { "data": "details.0" },
        { "data": "details.1" }
    ]
} );


//Read a DOM sourced table into data objects:

$(document).ready(function() {
    $('#example').DataTable({
        "columns": [
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "age" },
            { "data": "start_date" },
            { "data": "salary" }
        ]
    });
} );

//Using data as a function to provide different information for sorting, filtering and display. In this case, currency (price):

$('#example').dataTable( {
    "columnDefs": [ {
        "targets": 0,
        "data": function ( row, type, val, meta ) {
            if (type === 'set') {
                row.price = val;
                // Store the computed display and filter values for efficiency
                row.price_display = val=="" ? "" : "$"+numberFormat(val);
                row.price_filter  = val=="" ? "" : "$"+numberFormat(val)+" "+val;
                return;
            }
            else if (type === 'display') {
                return row.price_display;
            }
            else if (type === 'filter') {
                return row.price_filter;
            }
            // 'sort', 'type' and undefined all just use the integer
            return row.price;
        }
    } ]
} );

//Using default content:

$('#example').dataTable( {
    "columnDefs": [ {
        "targets": [ 0 ],
        "data": null,
        "defaultContent": "Click to edit"
    } ]
} );

//Using array notation - outputting a list from an array:

$('#example').dataTable( {
    "columnDefs": [ {
        "targets": [ 0 ],
        "data": "name[, ]"
    } ]
} );


/*Description
Often you may wish to have static content in a column, for example simple edit and / or delete buttons, which have events assigned to them. This option is available for those use cases - creating static content for a column. If you wish to create dynamic content (i.e. based on other data in the row), the columns.render option should be used.

Additionally, this option can be useful when loading JSON data, as the value set here will be used if the cell value from the JSON is found to be null (for example, you might set a default string of Not available.*/

//https://datatables.net/reference/option/columns.defaultContent



//   type: string  default


      //Show an information message for a field that can have a null or undefined value:
$('#example').dataTable( {
    "columns": [
        null,
        null,
        null,
        {
            "data": "first_name", // can be null or undefined
            "defaultContent": "<i>Not set</i>"
        }
    ]
} );


//Show an empty string when a field's value is null or undefined value:

$('#example').dataTable( {
    "columns": [
        null,
        null,
        null,
        {
            "data": "office", // can be null or undefined
            "defaultContent": ""
        }
    ]
} );


//Create an edit button in the last column with columnDefs:

$('#example').dataTable( {
    "columnDefs": [
        {
            "data": null,
            "defaultContent": "<button>Edit</button>",
            "targets": -1
        }
    ]
} );


//Create an edit button in the last column with columns:


$('#example').dataTable( {
    "columns": [
        null,
        null,
        null,
        {
            "data": null,
            "defaultContent": "<button>Edit</button>"
        }
    ]
} );



    /*columns.nameSince: DataTables 1.10
Set a descriptive name for a column.

Description
When working with DataTables' API, it is very common to want to be able to address individual columns so you can work with them (you wish to sum the numeric content of a column for example). DataTables has two basic methods of addressing columns:

As a column index (automatically assigned when the table is initialised)
With a name - assigned using this option!
This can make working with columns in the API very easy - for example to access the data from the column named location you would use table.column( 'location:name' ).data() - append the string :name to indicate to DataTables that it should perform a column name selector operation. For more information about column selectors, please see the column() documentation.*/

//https://datatables.net/reference/option/columns.name

//type : string

//Setting column names with columnDefs:

$('#example').dataTable( {
    "columnDefs": [
        { "name": "engine",   "targets": 0 },
        { "name": "browser",  "targets": 1 },
        { "name": "platform", "targets": 2 },
        { "name": "version",  "targets": 3 },
        { "name": "grade",    "targets": 4 }
    ]
} );

//Setting column names with columns:

$('#example').dataTable( {
    "columns": [
        { "name": "engine" },
        { "name": "browser" },
        { "name": "platform" },
        { "name": "version" },
        { "name": "grade" }
    ]
} );



/*columns.orderDataSince: DataTables 1.10
Define multiple column ordering as the default order for a column.

Description
Allows a column's sorting to take either the data from a different (often hidden) column as the data to sort, or data from multiple columns.

A common example of this is a table which contains first and last name columns next to each other, it is intuitive that they would be linked together to multi-column sort. Another example, with a single column, is the case where the data shown to the end user is not directly sortable itself (a column with images in it), but there is some meta data than can be sorted (e.g. file name) - note that orthogonal data is an alternative method that can be used for this.*/

     // https://datatables.net/reference/option/columns.orderData



//Takes the index value of the column automatically / default



//Using orderData to define multi-column sorting with columnDefs:

$('#example').dataTable( {
    "columnDefs": [
        { "orderData": [ 0, 1 ],    "targets": 0 },
        { "orderData": 0,           "targets": 1 },
        { "orderData": [ 2, 3, 4 ], "targets": 2 }
    ]
} );


//Using orderData to define multi-column sorting with columns:

$('#example').dataTable( {
    "columns": [
        { "orderData": [ 0, 1 ] },
        { "orderData": 0, },
        { "orderData": [ 2, 3, 4 ] },
        null,
        null
    ]
} );


/*columns.orderDataTypeSince: DataTables 1.10
Live DOM sorting type assignment.

Description
DataTables' primary order method (the ordering feature) makes use of data that has been cached in memory rather than reading the data directly from the DOM every time an order is performed for performance reasons (reading from the DOM is inherently slow). However, there are times when you do actually want to read directly from the DOM, acknowledging that there will be a performance hit, for example when you have form elements in the table and the end user can alter the values. This configuration option is provided to allow plug-ins to provide this capability in DataTables.*/

// https://datatables.net/reference/option/columns.orderDataType

//type : string

//Set live data sort type with columnDefs:
$('#example').dataTable( {
    "columnDefs": [
        { "orderDataType": "dom-text", "targets": [ 2, 3 ] },
        { "type": "numeric", "targets": 3 },
        { "orderDataType": "dom-select", "targets": 4 },
        { "orderDataType": "dom-checkbox", "targets": 5 }
    ]
} );
    //Set live data sort type with columns:
$('#example').dataTable( {
    "columns": [
        null,
        null,
        { "orderDataType": "dom-text" },
        { "orderDataType": "dom-text", "type": "numeric" },
        { "orderDataType": "dom-select" },
        { "orderDataType": "dom-checkbox" }
    ]
} );



/*columns.orderSequenceSince: DataTables 1.10
Order direction application sequence.

Description
You can control the default ordering direction, and even alter the behaviour of the order handler (i.e. only allow ascending sorting etc) using this parameter.*/

//https://datatables.net/reference/option/columns.orderSequence

    //type: array;
         //
 Value: [ 'asc', 'desc' ]   // default

 //Using orderSequence to define the applied order sequence with columnDefs:

$('#example').dataTable( {
    "columnDefs": [
        { "orderSequence": [ "asc" ], "targets": [ 1 ] },
        { "orderSequence": [ "desc", "asc", "asc" ], "targets": [ 2 ] },
        { "orderSequence": [ "desc" ], "targets": [ 3 ] }
    ]
} );


//Using orderSequence to define the applied order sequence with columns:

$('#example').dataTable( {
    "columns": [
        null,
        { "orderSequence": [ "asc" ] },
        { "orderSequence": [ "desc", "asc", "asc" ] },
        { "orderSequence": [ "desc" ] },
        null
    ]
} );


/*Description
Using this parameter, you can remove the end user's ability to order upon a column. This might be useful for generated content columns, for example if you have 'Edit' or 'Delete' buttons in the table.

Note that this option only affects the end user's ability to order a column. Developers are still able to order a column using the order option or the order() method if required.*/

//https://datatables.net/reference/option/columns.orderable


"orderable": false //default

   //Disable ordering on the first column with columnDefs:
$('#example').dataTable( {
    "columnDefs": [
        { "orderable": false, "targets": 0 }
    ]
} );


//Disable ordering on the first column with columns:

$('#example').dataTable( {
    "columns": [
        { "orderable": false },
        null,
        null,
        null,
        null
    ]
} );



/*Description
General overview
The documentation below is a technical reference (nitty-gritty details). For a more general overview of renderers in DataTables, including discussion of the built in renderers, please refer to the DataTables manual on this topic.

This property will modify the data that is used by DataTables for various operations as it is read from the data source. columns.render can be considered to be the the read only companion to columns.data which is read / write (and therefore more complex). Like columns.data this option can be given in a number of different ways to affect its behaviour as described below.*/

//https://datatables.net/reference/option/columns.render

"access": [
    { "id": "1", "name": "Printer" },
    { "id": "3", "name": "Desktop" },
    { "id": "4", "name": "VMs" }
]


//object:

"data": "phone",
    "render": {
    "_": "plain",
        "filter": "filter",
        "display": "display"
}

//Create a comma separated list from an array of objects:

$('#example').dataTable( {
    "ajaxSource": "sources/deep.txt",
    "columns": [
        { "data": "engine" },
        { "data": "browser" },
        {
            "data": "platform",
            "render": "[, ].name"
        }
    ]
} );

//As an object, extracting different data for the different types:


// This would be used with a data source such as:
//   { "phone": 5552368, "phone_filter": "5552368 555-2368", "phone_display": "555-2368", ... }
// Here the `phone` integer is used for sorting and type detection, while `phone_filter`
// (which has both forms) is used for filtering for if a user inputs either format, while
// the formatted phone number is the one that is shown in the table.
$('#example').dataTable( {
    "columnDefs": [ {
        "targets": 0,
        "data": null, // Use the full data source object for the renderer's source
        "render": {
            "_": "phone",
            "filter": "phone_filter",
            "display": "phone_display"
        }
    } ]
} );


//As above, with the phone information as an object:

// This would be used with a data source such as:
//   "phone": { "plain": 5552368, "filter": "5552368 555-2368", "display": "555-2368" }
$('#example').dataTable( {
    "columnDefs": [ {
        "targets": 0,
        "data": 'phone',
        "render": {
            "_": "plain",
            "filter": "filter",
            "display": "display"
        }
    } ]
} );


//Use as a function to create a link from the data source:

$('#example').dataTable( {
    "columnDefs": [ {
        "targets": 0,
        "data": "download_link",
        "render": function ( data, type, row, meta ) {
            return '<a href="'+data+'">Download</a>';
        }
    } ]
} );

//Show ellipsis for long strings:

$('#example').dataTable( {
    "columnDefs": [ {
        "targets": 4,
        "data": "description",
        "render": function ( data, type, row, meta ) {
            return type === 'display' && data.length > 40 ?
                '<span title="'+data+'">'+data.substr( 0, 38 )+'...</span>' :
                data;
        }
    } ]
} );


//Using an object instance as the data source for the row:

function Person( name, age, position ) {
    this._name     = name;
    this._age      = age;
    this._position = position;

    this.name = function () {
        return this._name;
    };

    this.age = function () {
        return this._age;
    };

    this.position = function () {
        return this._position;
    };
}


$(document).ready(function() {
    var table = $('#example').DataTable({
        columns: [
            { data: null, render: 'name' },
            { data: null, render: 'age' },
            { data: null, render: 'position' }
        ]
    });

    table.row.add( new Person( 'Airi Satou',     33, 'Accountant' ) );
    table.row.add( new Person( 'Angelica Ramos', 47, 'Chief Executive Officer (CEO)' ) );
    table.row.add( new Person( 'Ashton Cox',     66, 'Junior Technical Author' ) );
    table.draw();
} );




//Value: true   //default


//Disable search on the first column with columnDefs:
$('#example').dataTable( {
    "columnDefs": [
        { "searchable": false, "targets": 0 }
    ]
} );

//Disable search on the first column with columns:

$('#example').dataTable( {
    "columns": [
        { "searchable": false },
        null,
        null,
        null,
        null
    ] } );
} );


/*columns.titleSince: DataTables 1.10
Set the column title.

Description
The titles of columns are typically read directly from the DOM (from the cells in the THEAD element), but it can often be useful to either override existing values, or have DataTables actually construct a header with column titles for you (for example if there is not a THEAD element in the table before DataTables is constructed). This option is available to provide that ability.*/

//https://datatables.net/reference/option/columns.title



//Value read from the column's header cell.      //default


//Set the first column's title with columnDefs:

$('#example').dataTable( {
    "columnDefs": [
        { "title": "My column title", "targets": 0 }
    ]
} );

//Set the first column's title with columns:

$('#example').dataTable( {
    "columns": [
        { "title": "My column title" },
        null,
        null,
        null,
        null
    ]
} );
         /*Description
When operating in client-side processing mode, DataTables can process the data used for the display in each cell in a manner suitable for the action being performed. For example, HTML tags will be removed from the strings used for filter matching, while sort formatting may remove currency symbols to allow currency values to be sorted numerically. The formatting action performed to normalise the data so it can be ordered and searched depends upon the column's type.*/

//https://datatables.net/reference/option/columns.type

//Auto-detected from raw data.        //default

//Set the first column's type manually with columnDefs:

$('#example').dataTable( {
    "columnDefs": [
        { "type": "html", "targets": 0 }
    ]
} );

//Set the first column's type manually with columns:

$('#example').dataTable( {
    "columns": [
        { "type": "html" },
        null,
        null,
        null,
        null
    ]
} );


/*Description
DataTables and show and hide columns dynamically through use of this option and the column().visible() / columns().visible() methods. This option can be used to get the initial visibility state of the column, with the API methods used to alter that state at a later time.*/

//https://datatables.net/reference/option/columns.visible


// Value: true     //default

//Hide the first column with columnDefs:

$('#example').dataTable( {
    "columnDefs": [
        { "visible": false, "targets": 0 }
    ]
} );


//Hide the first column with columns:

$('#example').dataTable( {
    "columns": [
        { "visible": false },
        null,
        null,
        null,
        null
    ] } );
} );


/*
* columns.widthSince: DataTables 1.10
Column width assignment.

Description
This parameter can be used to define the width of a column, and may take any CSS value (3em, 20px etc).

Please note that pixel perfect column width is virtually impossible to achieve in tables with dynamic content, so do not be surprised if the width of the column is off by a few pixels from what you assign using this property. Column width in tables depends upon many properties such as cell borders, table borders, the border-collapse property, the content of the table and many other properties. Both DataTables and the browsers attempt to lay the table out in an optimal manner taking this options all into account.*/

     //https://datatables.net/reference/option/columns.width

     //Auto-detected from the table's content. //default

//Set the first column's width to 20% with columnDefs:

$('#example').dataTable( {
    "columnDefs": [
        { "width": "20%", "targets": 0 }
    ]
} );


//Set the first column's width to 20% with columns:

$('#example').dataTable( {
    "columns": [
        { "width": "20%" },
        null,
        null,
        null,
        null
    ]
} );
