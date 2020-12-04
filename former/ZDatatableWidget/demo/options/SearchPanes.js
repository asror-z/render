/*
https://datatables.net/reference/option/columns.searchPanes

columns.searchPanesSince: SearchPanes SearchPanes 1.0.0
Container for options for individual columns.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, no custom options will be applied to the pane for the column if columns.searchPanes is undefined. Otherwise the related options will be applied if they are defined within this object.

This is useful as it means that the panes for individual columns can be customised rather than affecting every pane.
 */

Value: undefined; //default

// Alter searching and info of the third columns pane:

$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Pfrtip',
        columnDefs:[
            {
                dtOpts:{
                    searching:false,
                    info: true,
                },
                targets[2]
            }
    }
});
});

// Hide count for the 5th columns pane::

$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Pfrtip',
        columnDefs: [
            {
                searchPanes: {
                    hideCount: true,
                }
                targets: [4]
            }
        ]
    });
});

// Define custom Options for a specific pane:

$(document).ready(function() {
    var dt = $('#example').DataTable( {
        dom: 'Sfrtip',
        columnDefs:[
            {
                searchPanes: {
                    options:[
                        {
                            label: 'Under 20',
                            value: function(rowData, rowIdx){
                                return rowData[4] < 20;
                            }
                        },
                        {
                            label: '20 to 30',
                            value: function(rowData, rowIdx){
                                return rowData[4] <= 30 && rowData[4] >=20;
                            }
                        },
                        {
                            label: '30 to 40',
                            value: function(rowData, rowIdx){
                                return rowData[4] <= 40 && rowData[4] >=30;
                            }
                        },
                        {
                            label: '40 to 50',
                            value: function(rowData, rowIdx){
                                return rowData[4] <= 50 && rowData[4] >=40;
                            }
                        },
                        {
                            label: '50 to 60',
                            value: function(rowData, rowIdx){
                                return rowData[4] <= 60 && rowData[4] >=50;
                            }
                        },
                        {
                            label: 'Over 60',
                            value: function(rowData, rowIdx){
                                return rowData[4] > 60;
                            }
                        },
                    ]
                },
                targets:[4],
            },
            {
                searchPanes: {
                    options:[
                        {
                            label: 'Not Edinburgh',
                            value: function(rowData, rowIdx){
                                return rowData[3] !== 'Edinburgh';
                            }
                        },
                        {
                            label: 'Not London',
                            value: function(rowData, rowIdx){
                                return rowData[3] !== 'London';
                            }
                        }
                    ],
                },
                targets: [3]
            }
        ],
    });

    // Pre-Select Values in a Pane:Pre-Select Values in a Pane:

    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Sfrtip',
            columnDefs:[
                {
                    searchPanes: {
                        preSelect:['Edinburgh','London']
                    },
                    targets:[3],
                }
            ]
        });
    });

    // Force panes to hide and show:

    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Sfrtip',
            columnDefs:[
                {
                    searchPanes:{
                        show: true,
                    },
                    targets: [0],
                },
                {
                    searchPanes:{
                        show: false,
                    },
                    targets: [2],
                }
            ]
        });
    });

    // Change the threshold of the uniqueness ratio for a specific column:

    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Sfrtip',
            columnDefs:[
                {
                    searchPanes:{
                        threshold: 0.99,
                    },
                    targets:[0]
                },
            ],
        });
    });


    /*
https://datatables.net/reference/option/columns.searchPanes.className

    columns.searchPanes.classNameSince: SearchPanes SearchPanes 1.0.0
Add a custom class name to a pane.
Please note - this property requires the SearchPanes extension for DataTables.

Description
By setting a class name, specific panes can be targetted for custom styling.

Custom Panes can have custom classes applied in a similar way to how columns.searchPanes.dtOpts are applied to panes. You can declare the columns.searchPanes.className option within an object of the columnDefs array - this will apply the custom class to that pane.
     */

    Value: undefined//default

    // Setting a custom class on a pane:

    $('#example').DataTable( {
        searchPanes:true,
        dom: 'Pfrtip',
        columnDefs: [
            {
                searchPanes: {
                    className: 'myCustomClass'
                },
                targets: [3]
            }
        ]
    });

    // Setting a custom class on a custom pane:

    table = $('#example').DataTable({
        dom: 'Pfrtip',
        searchPanes: {
            panes: [
                {
                    header:'Custom',
                    options:[
                        {
                            label:'Accountants from Tokyo',
                            value: function(rowData, rowIdx){
                                return rowData[1] === 'Accountant' && rowData[2] === 'Tokyo';
                            }
                        }
                    ],
                    className:"PaneSpecific"
                }
            ],
        }
    });

    /*
https://datatables.net/reference/option/columns.searchPanes.combiner

    columns.searchPanes.combinerSince: SearchPanes SearchPanes 1.0.0
Set the type of logic to be implemented on the pane.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will use OR logic when multiple selections have been made. However at times it may be desirable to implement AND logic instead, for example to eliminate rows from the dataset.
     */


    Value: or// default

    // Set the Combiner Option to and Logic:

    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Pfrtip',
            columnDefs:[
                {
                    searchPanes: {
                        combiner: 'and',
                    },
                    targets: [4]
                }
            ]
        });
    });

    // Using the combiner option to eliminate rows:

    $(document).ready(function() {
        var dt = $('#example').DataTable( {
            dom: 'Pfrtip',
            columnDefs:[
                {
                    searchPanes: {
                        options:[
                            {
                                label: 'Not Edinburgh',
                                value: function(rowData, rowIdx){
                                    return rowData[3] !== 'Edinburgh';
                                }
                            },
                            {
                                label: 'Not London',
                                value: function(rowData, rowIdx){
                                    return rowData[3] !== 'London';
                                }
                            }
                        ],
                        combiner: 'and'
                    },
                    targets: [3]
                }
            ],
            select: {
                style:    'os',
                selector: 'td:first-child'
            },
            order: [[ 1, 'asc' ]]
        });
    });

    /*
    https://datatables.net/reference/option/columns.searchPanes.controls


    columns.searchPanes.controlsSince: SearchPanes SearchPanes 1.0.0
Hide the Control buttons and disable searching in the pane of a specific column.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will be displayed with the control buttons included in the interface and searching will be enabled. However if the value of columns.searchPanes.controls is set to false then the control buttons will no longer be displayed and searching will be disabled.

The control buttons can be hidden and searching disabled for all of the panes by making use of searchPanes.controls.
     */

    Value: true//default

    // Hide control buttons and disabled searching for the 5th columns pane:

    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Pfrtip',
            columnDefs:[
                {
                    searchPanes: {
                        controls: false,
                    },
                    targets: [4]
                }
            ]
        });
    });

    /*
https://datatables.net/reference/option/columns.searchPanes.dtOpts


    columns.searchPanes.dtOptsSince: SearchPanes SearchPanes 1.0.0
Define properties of the DataTables being used for an individual pane.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will overwrite the options for that column defined by the SearchPanes code with the options defined in columns.searchPanes.dtOpts. As Standard SearchPanes internal DataTable has a dom property of only t, meaning that if you are added paging or something visual then you must also modify the dom property.

This functionality is useful as it allows all of the standard DataTables options and API methods to be available to all of the the panes, either globally or individually.

All of the panes can be altered by using the searchPanes.dtOpts option.
     */

    Value: undefined  //default

    // Alter searching and info of the third columns pane:

    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Pfrtip',
            columnDefs: [
                {
                    searchPanes: {
                        dtOpts: {
                            info: true
                        }
                    },
                    targets: [2]
                }
            ]
        });
    });


    /*
    https://datatables.net/reference/option/columns.searchPanes.header



    columns.searchPanes.headerSince: SearchPanes SearchPanes 1.0.0
Set the title of the SearchPane.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will set the headers of the pane based on the title of the corresponding column. This option customises that text in the pane's header.

Type
     */

    Value: undefined; //default


    // Set the Header of the Pane to a custom string:

    $(document).ready(function() {
        $('#example').DataTable( {
            searchPanes:true,
            dom: 'Pfrtip',
            columnDefs:[
                {
                    searchPanes: {
                        header: 'Length of Life'
                    },
                    targets: [3]
                }
            ]
        });
    });

    /*
https://datatables.net/reference/option/columns.searchPanes.hideCount



    columns.searchPanes.hideCountSince: SearchPanes SearchPanes 1.0.0
Hide the count column in the pane of a specific column.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will be displayed with the count column included in the table. However if the value of columns.searchPanes.hideCount is set to true then the count column won't be displayed.

The count column can be hidden for all of the panes by making use of searchPanes.hideCount.
     */


    Value: false// default

    // Hide count for the 5th columns pane:


    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Pfrtip',
            columnDefs:[
                {
                    searchPanes: {
                        hideCount: true,
                    },
                    targets: [4]
                }
            ]
        });
    });


    /*
    https://datatables.net/reference/option/columns.searchPanes.name

    columns.searchPanes.nameSince: SearchPanes SearchPanes 1.1.0
Set the name of the SearchPane.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will set the names of the pane based on the title of the corresponding column. This option customises that name. The order of the panes is then set using the searchPanes.order option.
     */

    Value: string //default

    // Set the Name of the Pane to a custom string:

    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Pfrtip',
            columnDefs:[
                {
                    searchPanes: {
                        name: 'Length of Life'
                    },
                    targets: [3]
                }
            ]
        });
    });


    /*


    https://datatables.net/reference/option/columns.searchPanes.options

    columns.searchPanes.optionsSince: SearchPanes SearchPanes 1.0.0
Define custom search options.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will not add any custom options to the panes.

When columns.searchPanes.options.value is a function, this function is used when searching the table. The function recieves the following parameters.

rowData - the data from the current row being compared as an array with one element from each column
rowIdx - the index of the row currently being compared
The function's context is an API instance of the host DataTable. This means that from within the custom search functions it is possible to call API methods, such as this.rows().data().

The function must return true if that row is to be included in the search results and false if it is not.

This is useful when you want to add an option to search for which isn't a value in the table. For example, "Countries in Europe", or, "Cities which aren't Edinburgh", or age ranges.
     */

    Value: undefined // default

    // Define custom Options for a specific pane:

    $(document).ready(function() {
        var dt = $('#example').DataTable( {
            searchPanes: {
                viewTotal: true,
                columns: [0, 3, 4],
            },
            dom: 'Pfrtip',
            columnDefs:[
                {
                    searchPanes: {
                        options:[
                            {
                                label: 'Under 20',
                                value: function(rowData, rowIdx){
                                    return rowData[4] < 20;
                                }
                            },
                            {
                                label: '20 to 30',
                                value: function(rowData, rowIdx){
                                    return rowData[4] <= 30 && rowData[4] >=20;
                                }
                            },
                            {
                                label: '30 to 40',
                                value: function(rowData, rowIdx){
                                    return rowData[4] <= 40 && rowData[4] >=30;
                                }
                            },
                            {
                                label: '40 to 50',
                                value: function(rowData, rowIdx){
                                    return rowData[4] <= 50 && rowData[4] >=40;
                                }
                            },
                            {
                                label: '50 to 60',
                                value: function(rowData, rowIdx){
                                    return rowData[4] <= 60 && rowData[4] >=50;
                                }
                            },
                            {
                                label: 'Over 60',
                                value: function(rowData, rowIdx){
                                    return rowData[4] > 60;
                                }
                            },
                        ]
                    },
                    targets:[4],
                },
                {
                    searchPanes: {
                        options:[
                            {
                                label: 'Not Edinburgh',
                                value: function(rowData, rowIdx){
                                    return rowData[3] !== 'Edinburgh';
                                }
                            },
                            {
                                label: 'Not London',
                                value: function(rowData, rowIdx){
                                    return rowData[3] !== 'London';
                                }
                            }
                        ],
                        combiner: 'and'
                    },
                    targets: [3]
                }
            ],
            select: {
                style:    'os',
                selector: 'td:first-child'
            },
            order: [[ 1, 'asc' ]]
        });
    });

    /*
    https://datatables.net/reference/option/columns.searchPanes.orderable


    columns.searchPanes.orderableSince: SearchPanes SearchPanes 1.0.0
Hide the ordering buttons in the pane of a specific column.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will be displayed with the ordering buttons included in the interface. However if the value of columns.searchPanes.orderable is set to false then the ordering buttons will no longer be displayed.

The ordering buttons can be hidden for all of the panes by making use of searchPanes.orderable.
     */

    Value: true // default

    // Hide ordering buttons for the 5th columns pane:

    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Pfrtip',
            columnDefs:[
                {
                    searchPanes: {
                        orderable: false,
                    },
                    targets: [4]
                }
            ]
        });
    });

    /*
https://datatables.net/reference/option/columns.searchPanes.orthogonal

    columns.searchPanes.orthogonalSince: SearchPanes SearchPanes 1.0.0
Set values of orthogonal data for rendering functions.
Please note - this property requires the SearchPanes extension for DataTables.

Description
columns.searchPanes.orthogonal is used to create a custom rendering function. By setting its value to a string it tells SearchPanes how to display and filter on the data it is provided from the DataTable.

SearchPanes uses rendering when populating the table and as standard will render the display value using the columns.searchPanes.orthogonal.display property and will identify the value to use while filtering by rendering on the columns.searchPanes.orthogonal.filter value.

columns.searchPanes.orthogonal is normally only defined as a string when dealing with arrays. By setting the render object to the following
     */

    {
        render: {
            _: '[, ].name',
                sp: '[].name'
        }
    }

    Value: object//default

    // The default value of the columns.searchPanes.orthogonal object is shown below

    orthogonal: {
        display: 'display',
            search: 'filter',
            sort: 'sort',
            type: 'type'
    }

    // Normal Render Function Which Uses Default Value of orthogonal:

    {
        data: "salary",
            render: $.fn.dataTable.render.number( ',', '.', 0, '$' )
    }

//    Render Function for Arrays:

    {
        data: "permission",
            render: {
        _: '[, ].name',
            sp:'[].name'
    },
        searchPanes: {
            orthogonal:'sp'
        },
        dom: 'Pfrtip'
    }

    /*

https://datatables.net/reference/option/columns.searchPanes.preSelect


    columns.searchPanes.preSelectSince: SearchPanes SearchPanes 1.0.0
Pre-selected options in a pane.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will not pre-select any values in any of the panes.

If any of the elements in the array held in columns.searchPanes.preSelect are present in the pane then they will be pre-selected.
     */

    Value: undefined //default


    // Pre-select values in a pane:

    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Pfrtip',
            columnDefs: [
                {
                    searchPanes: {
                        preSelect: ['Edinburgh','London']
                    },
                    targets:[3]
                }
            ]
        });
    });


    /*
https://datatables.net/reference/option/columns.searchPanes.show

    columns.searchPanes.showSince: SearchPanes SearchPanes 1.0.0
Force Panes to hide or show.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will decide which columns to display a pane for by calculating a simple uniqueness ratio of unique values in that column to the total number of entries in the table. For example if there are 100 rows in a table, and in a certain column there are 10 unique options, then the ratio is 0.1.

If the calculated value is less than the default threshold for all of the panes then this column will have a pane (assuming that the threshold has not been altered for all or an individual pane by either searchPanes.threshold or columns.searchPanes.threshold).

The columns.searchPanes.show option is useful for removing this calculation from the process and effectively forcing a pane to either be shown or hidden.

The example forces a pane to be displayed for the first column and the pane for the third column to be hidden.
     */

    Value: undefined // default

    // Force panes to hide and show:

    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Pfrtip',
            columnDefs:[
                {
                    searchPanes:{
                        show: true,
                    },
                    targets: [0],
                },
                {
                    searchPanes:{
                        show: false,
                    },
                    targets: [2],
                }
            ]
        });
    });

    /*

https://datatables.net/reference/option/columns.searchPanes.threshold

    columns.searchPanes.thresholdSince: SearchPanes SearchPanes 1.0.0
Set the minimum number of unique values needed in a specific column to display that pane.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard columns must have a uniqueness ratio of 0.6 (ratio of different values throughout the column to the number of total rows).

By setting the columns.searchPanes.threshold option to a different decimal value, the uniqueness ratio must be less than this value to display the pane for the column specified.

This is useful as it determines at what point a pane for the specified column should be shown. If all panes for tables with lots of columns were shown, the searching may become confusing. This adjustment allows searchPanes to internally make the decisions to display a simpler, less cluttered user interface.

The threshold of the uniqueness ratio can also be set for all of the columns by making use of the searchPanes.threshold option.

If you desire to force specific panes to show and other specific panes to hide without having searchPanes automatically work it out, make use of the columns.searchPanes.show option.
     */

    Value: 0.6; //default

    // Change the threshold of the uniqueness ratio for a specific column:

    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Pfrtip',
            columnDefs: [
                {
                    searchPanes: {
                        threshold: 0.99
                    },
                    targets:[0]
                }
            ]
        });
    });


    /*
https://datatables.net/reference/option/language.searchPanes


    language.searchPanesSince: SearchPanes SearchPanes 1.0.0
Container for options for language.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, no custom options will be applied to the panes for languages if language.searchPanes is undefined. Otherwise the related options will be applied if they are defined within this object.

This is useful as it means that the language options can be set for panes leading to increased internationalisation.
     */


    Value: undefined // default

    // Alter title messages::


    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Pfrtip',
            language: {
                searchPanes: {
                    title: {
                        _: 'Filters Selected - %d',
                        0: 'No Filters Selected',
                        1: 'One Filter Selected'
                    }
                }
            }
        });
    });

    // Change messages for viewTotal::


    $(document).ready(function() {
        $('#example').DataTable( {
            searchPanes:{
                viewTotal: true
            },
            dom: 'Pfrtip',
            language: {
                searchPanes: {
                    count: '{total} found',
                    countFiltered: '{shown} ({total})'
                }
            }
        });
    });

    /*

https://datatables.net/reference/option/language.searchPanes.collapse

    language.searchPanes.collapseSince: SearchPanes SearchPanes 1.1.0
Set the message to be displayed in the SearchPanes Button.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will set the SearchPanes Button to display the total number of selections across the panes alongside the SearchPanes title.


  The value of `-init language.searchPanes.collapse` is passed into an `-api i18n()` function, `%d` is replaced by the count of selections across the panes. To just set the Button text to be a string no matter the count, just set `-init language.searchPanes.collapse` to the desired `-type string`.
     */

    Value: {0: 'SearchPanes', _: 'SearchPanes (%d)'}; //default

    // Change message for SearchPanes button which also displays selection count::

    $(document).ready(function() {
        $('#example').DataTable( {
            language: {
                searchPanes: {
                    collapse: {
                        0: 'Search Options',
                        1: 'Search (one selected)',
                        _: 'Search Options (%d)'
                    }
                }
            },
            buttons:[
                'searchPanes'
            ],
            dom: 'Bfrtip',
        });
    });

    // Change message for SearchPanes button to only be a string::

    $(document).ready(function() {
        $('#example').DataTable( {
            language: {
                searchPanes: {
                    collapse: 'Search Options"
                }
            },
            buttons:[
                'searchPanes'
            ],
            dom: 'Bfrtip',
        });
    });

    /*




    language.searchPanes.countSince: SearchPanes SearchPanes 1.0.0
Set the message to be displayed in the count column when not searching.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will set the count column to display the total number of different values visible in the column when no filtering is taking place.

SearchPanes replace two strings when creating the output for the count column: {shown} is the count for each different value that is currently displayed in the DataTable, {total} is the total count for each different value that is in the DataTable. When no filtering is taking place, {total} and {shown} will be the same value.

Both of the above strings can be included in the count message although they will be the same when no filtering is taking place.

This message will be shown regardless of the value of searchPanes.viewTotal, although it will only change to the message in language.searchPanes.countFiltered when searchPanes.viewTotal is true.
     */
    Value: {total}; //default

    // Change messages for row count::

    $(document).ready(function() {
        $('#example').DataTable( {
            searchPanes: {
                viewTotal: true
            },
            dom: 'Pfrtip',
            language: {
                searchPanes: {
                    count: '{total} found',
                    countFiltered: '{shown} ({total})'
                }
            }
        });
    });


    /*


https://datatables.net/reference/option/language.searchPanes.countFiltered


    language.searchPanes.countFilteredSince: SearchPanes SearchPanes 1.0.0
Set the message to be displayed in the count column when searching.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will set the count column to display the total number of different values visible in the column when no filtering is taking place.

SearchPanes replace two strings when creating the output for the count column: {shown} is the count for each different value that is currently displayed in the DataTable, {total} is the total count for each different value that is in the DataTable. When no filtering is taking place, {total} and {shown} will be the same value.

This message will not be displayed if searchPanes.viewTotal is not set to be true.
     */


    Value: {shown} ({total})//default

    // Change messages for viewTotal::

    $(document).ready(function() {
        $('#example').DataTable( {
            searchPanes: {
                viewTotal: true
            },
            dom: 'Pfrtip',
            language: {
                searchPanes: {
                    count: '{total} found',
                    countFiltered: '{shown} ({total})'
                }
            }
        });
    });

    /*

https://datatables.net/reference/option/language.searchPanes.emptyPanes

    language.searchPanes.emptyPanesSince: SearchPanes SearchPanes 1.0.0
Add internationalisation to the message shown when no panes are displayed.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will display a message in the div that is meant to hold the panes if there are none to display. If a custom message has been declared then this will be shown in the place of the default message. If the value of languages.searchPanes.emptyPanes is set to null then the div will not be shown.
     */

    Value: No searchPanes//default


    // Alter Empty Pane Message:

    $('#example').DataTable( {
        dom: 'Pfrtip',
        language: {
            searchPanes: {
                emptyPanes: 'There are no panes to display. :/'
            }
        }
    });

    // Hide the div that is meant to contain the SearchPanes:

    $('#example').DataTable( {
        dom: 'Pfrtip',
        language: {
            searchPanes: {
                emptyPanes: null
            }
        }
    });

    /*

https://datatables.net/reference/option/language.searchPanes.title

    language.searchPanes.titleSince: SearchPanes SearchPanes 1.0.0
Add internationalisation to the title showing how many panes are selected.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will set the title to display the number of filters in the style of the following 'Filters Active - %d'. This property allows that message to be configured.
     */

    Value: undefined //default



    // Alter title messages:

    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Pfrtip',
            language: {
                searchPanes: {
                    title:{
                        _: 'Filters Selected - %d',
                        0: 'No Filters Selected',
                        1: 'One Filter Selected',
                    }
                }
            }
        });
    });

    /*

https://datatables.net/reference/option/searchPanes

    searchPanesSince: SearchPanes SearchPanes 1.0.0
Enable Search Panes.
Please note - this property requires the SearchPanes extension for DataTables.

Description
SearchPanes is an extension that allows for clearer more accesible searching functionality.

When a selection is made in one of the associated panes, the DataTable will be searched for records that meet the criteria of the selections made in the panes. These records will then be displayed while all of the records that do not meet the criteria will not be included in the DataTable.

SearchPanes can be enabled by setting the dom property to dom: 'Pfrtip', which will set the configuration options to be the defaults as defined by $.fn.dataTable.SearchPanes.defaults or an object with further properties to define operation which is different to the defaults. It can also be enabled through the API.

Please note that as with all other configuration options for SearchPanes, this option is an extension to the default set of DataTables options. This property should be set in the DataTables initialisation object.

Where speed is a concern, SearchPanes operates fairly normally on the client side for tables with less than 2,000 rows. If increasing above this level then performance hits will occur and it will take longer to both load and operate the panes.
     */


    Value: false // default


    // Enable SearchPanes:

    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Pfrtip'
        });
    });


    /*
https://datatables.net/reference/option/searchPanes.cascadePanes

    searchPanes.cascadePanesSince: SearchPanes SearchPanes 1.0.0
Allow panes to cascade under selection.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will display all of the options for that column throughout its operation. When searchPanes.cascadePanes is set to true, the panes will remove options which are no longer present in the currently displayed DataTable. The cascade action will occur when a selection or a deselection is made in one of the panes.

This is useful when dealing with large data sets with many different options as they are narrowed down accordingly as selections proceed.
     */

    Value: false //default

    // Enable cascading panes::

    $(document).ready(function() {
        $('#example').DataTable( {
            searchPanes:{
                cascadePanes: true
            },
            dom: 'Pfrtip'
        });
    });

    /*
https://datatables.net/reference/option/searchPanes.clear


    searchPanes.clearSince: SearchPanes SearchPanes 1.0.0
Disable buttons to allow quick clearing of selections in panes.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will display the buttons which allow selections to be cleared in individual panes and across all panes. When searchPanes.clear is set to false, the clear buttons will not be present.

The searchPanes.clear functionality is useful when wanting to quickly deselect all of the options in a pane. It is useful to be able to disable these buttons, for example on smaller tables with less options it may be preferrable to employ a custom user interface.
     */

    Value: true // default

    // Disable Clear Buttons:

    $(document).ready(function() {
        $('#example').DataTable( {
            searchPanes: {
                clear: false
            },
            dom: 'Pfrtip'
        });
    });


    /*
    https://datatables.net/reference/option/searchPanes.columns


    searchPanes.columnsSince: SearchPanes SearchPanes 1.0.0
Select which columns should be considered when displaying panes.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will consider all of the columns when creating searchPanes. When searchPanes.columns is defined with an array of numbers, then only the columns with those indexes will be considered when creating panes. Note they still may not be displayed based upon the calculations of searchPanes.threshold or columns.searchPanes.threshold.

The searchPanes.columns functionality is useful when wanting to restrict which columns will be considered when displaying panes. This may result in faster load times as there is not as much validation to be done.
     */

    Value: undefined//default

    // Specify columns for consideration::

    $(document).ready(function() {
        $('#example').DataTable( {
            searchPanes:{
                columns:[1,3,5]
            },
            dom: 'Pfrtip'
        });
    });


    /*

https://datatables.net/reference/option/searchPanes.controls


    searchPanes.controlsSince: SearchPanes SearchPanes 1.0.0
Hide the control buttons and disable searching in all panes.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will be displayed with the control buttons included in the interface with searching enabled. However if the value of searchPanes.controls is set to false then the control buttons will no longer be displayed and searching will be disabled in all of the panes.

The control buttons can be hidden and searching disabled for individual panes by the columns.searchPanes.controls option.
     */

    Value: true//default

    // Hide control buttons and disable searching for all panes:

    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Pfrtip',
            searchPanes: {
                controls: false
            }
        });
    });

    /*https://datatables.net/reference/option/searchPanes.dataLength


    searchPanes.dataLengthSince: SearchPanes SearchPanes 1.0.0
Make use of ellipsis for a certain length of entry.
Please note - this property requires the SearchPanes extension for DataTables.

Description
This is useful as it prevents the searchPanes cells becoming mishapen and overpopulated when the table contains long strings.
     */


    Value: 30//default

    // Setting data length to a smaller value::


    $('#example').DataTable( {
        searchPanes: {
            dataLength: 15
        },
        dom: 'Pfrtip'
    });

    // Never truncate data:

    $('#example').DataTable( {
        searchPanes: {
            dataLength: false
        },
        dom: 'Pfrtip'
    });

    /*


https://datatables.net/reference/option/searchPanes.dtOpts

    searchPanes.dtOptsSince: SearchPanes SearchPanes 1.0.0
Define properties of the DataTables being used as Panes.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will overwrite the options defined by the SearchPanes code with the options defined in searchPanes.dtOpts. As Standard SearchPanes internal DataTable has a dom property of only t, meaning that if you are added paging or something visual then you must also modify the dom property.

By overwriting this value in the initialisation, the panes can be customised as much as a standard DataTables.

This functionality is useful as it allows all of the standard DataTables options and API Methods to be available to the panes.

Individual panes can be altered by using the columns.searchPanes.dtOpts option
     */


    Value: undefined//default

    // Alter searching and info of the Panes::

    $(document).ready(function() {
        $('#example').DataTable( {
            searchPanes: {
                dtOpts: {
                    paging: true,
                    pagingType: 'numbers',
                    searching: false
                }
            },
            dom: 'Pfrtip'
        });
    });

    /*

https://datatables.net/reference/option/searchPanes.emptyMessage


    searchPanes.emptyMessageSince: SearchPanes SearchPanes 1.0.0
Set custom empty message.
Please note - this property requires the SearchPanes extension for DataTables.

Description
Empty cells will be represented in the panes by the option searchPanes.emptyMessage. This is useful as it's a more user-friendly way than just having a blank cell.
     */


    Value: No Data //default

    // Altering Empty Message:

    $(document).ready(function() {
        var dt = $('#example').DataTable( {
            searchPanes:{
                emptyMessage:"</i></b>EMPTY</b></i>"
            },
            dom: 'Pfrtip',
        });
    });

    /*
https://datatables.net/reference/option/searchPanes.hideCount

    searchPanes.hideCountSince: SearchPanes SearchPanes 1.0.0
Hide the count column in all panes.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will be displayed with the count column included in the table. However if the value of searchPanes.hideCount is set to true then the count column won't be displayed in any of the panes.

The count column can be hidden for individual panes by the columns.searchPanes.hideCount option.
     */

    Value: false//default

    // Hide count for all panes:

    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Sfrtip',
            searchPanes: {
                hideCount: true
            }
        });
    });

    /*

https://datatables.net/reference/option/searchPanes.layout

    searchPanes.layoutSince: SearchPanes SearchPanes 1.0.0
Set the layout of how the panes are displayed on the page.
Please note - this property requires the SearchPanes extension for DataTables.

Description
By setting the searchPanes.layout parameter to columns-3, the panes will be displayed in 3 columns.

There are 6 sizes supported from 1 pane in a row to 6 panes in a row. Altering the number at the end of columns- will alter the number of panes on a row.
     */

    Value: false//


    // Set the number of panes in a row to 2:

    $(document).ready(function() {
        $('#example').DataTable( {
            searchPanes: {
                layout: 'columns-2'
            },
            dom: 'Pfrtip'
        });
    });

    /*

https://datatables.net/reference/option/searchPanes.order

    searchPanes.orderSince: SearchPanes SearchPanes 1.1.0
Set the order of the Panes.
Please note - this property requires the SearchPanes extension for DataTables.

Description
By setting the searchPanes.order to an array of the columns.searchPanes.name property of the SearchPanes, the panes are displayed in that order.

By default the columns.searchPanes.name is set to be the title of the column. This can be overridden if desired. This is particularly useful for mixing custom and auto generated panes. If the searchPanes.order property is set then any panes that would normally have shown but are not present in the array will not be shown at all.
     */

    Value: false//default

    // Set the order of the panes:

    $(document).ready(function() {
        $('#example').DataTable( {
            searchPanes: {
                order: ['Age', 'Office', 'Position']
            },
            dom: 'Pfrtip'
        });
    });

    // Set the order of the panes including a custom name:

    $(document).ready(function() {
        $('#example').DataTable( {
            searchPanes: {
                order: ['Length of Life', 'Office', 'Position']
            },
            columnDefs:[
                {
                    searchPanes: {
                        name: 'Length of Life'
                    },
                    targets: [3]
                }
            ],
            dom: 'Pfrtip'
        });
    });

    /*

https://datatables.net/reference/option/searchPanes.orderable

    searchPanes.orderableSince: SearchPanes SearchPanes 1.0.0
Hide the ordering buttons in all panes.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will be displayed with the ordering buttons included in the interface, allowing the user to change the order of the selections in each pane. However if the value of searchPanes.orderable is set to false then the ordering buttons will no longer be displayed in any of the panes.

The ordering buttons can be hidden for individual panes by the columns.searchPanes.orderable option.
     */


    Value: true//default

    // Hide ordering buttons for all panes:

    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Pfrtip',
            searchPanes: {
                orderable: false
            }
        });
    });

    /*

https://datatables.net/reference/option/searchPanes.panes

    searchPanes.panesSince: SearchPanes SearchPanes 1.0.0
Define custom panes to filter across all columns.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will not add any custom panes to the page.

It operates in a similair way to the options array in columns.searchPanes.options. With the addition of a header property to hold the title of the pane.

This is useful when you want to make searches across columns. Technically this would be possible by just adding an option to an already existing Pane but that may confuse the end user as they may think the option only applied to the corresponding column and not the table as a whole.
     */


    Value: undefined//default

    // Define custom pane::


    $(document).ready(function() {
        $('#example').DataTable( {
            searchPanes: {
                panes: [
                    {
                        header:'custom',
                        options: [
                            {
                                label:'Accountants in Tokyo',
                                value: function(rowData, rowIdx){
                                    return rowData[2] === 'Accountant' && rowData[3] === 'Tokyo';
                                }
                            }
                        ]
                    }
                ]
            },
            dom: 'Pfrtip'
        });
    });


    /*
https://datatables.net/reference/option/searchPanes.panes.className


    searchPanes.panes.classNameSince: SearchPanes SearchPanes 1.0.0
Add a custom class for a custom pane.
Please note - this property requires the SearchPanes extension for DataTables.

Description
By setting a class name, specific panes can be targetted for custom styling.

Custom Panes can have custom classes applied in a similar way to how columns.searchPanes.dtOpts are applied to panes. You can declare the searchPanes.panes.className option within an object of the panes array, this will apply the custom class to that pane.
     */

    Value: undefined//default

    // Define custom pane DataTable options:

    table = $('#example').DataTable({
        dom: 'Pfrtip',
        searchPanes: {
            panes: [
                {
                    header:'Custom',
                    options:[
                        {
                            label:'Accountants from Tokyo',
                            value: function(rowData, rowIdx){
                                return rowData[1] === 'Accountant' && rowData[2] === 'Tokyo';
                            }
                        }
                    ],
                    className:"PaneSpecific"
                }
            ],
        }
    });

    /*
https://datatables.net/reference/option/searchPanes.panes.dtOpts

    searchPanes.panes.dtOptsSince: SearchPanes SearchPanes 1.0.0
Define the DataTables options for a custom pane.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, SearchPanes will overwrite the options for that column defined by the SearchPanes code with the options defined in columns.searchPanes.dtOpts.

By overwriting this value in the initialisation, the pane can be customised fully as much as a DataTable can be.

This functionality is useful as it allows all of the standard DataTables options and API Methods to be available to the panes.

All of the panes can be altered by using the searchPanes.dtOpts option.
     */


    Value: undefined//default

    // Define custom pane DataTable options:

    table = $('#example').DataTable({
        dom: 'Pfrtip',
        searchPanes: {
            panes: [
                {
                    header:'Custom',
                    options:[
                        {
                            label:'Accountants from Tokyo',
                            value: function(rowData, rowIdx){
                                return rowData[1] === 'Accountant' && rowData[2] === 'Tokyo';
                            }
                        }
                    ],
                    dtOpts:{
                        paging: true,
                        order: [[1, 'desc']]
                    },
                }
            ],
        }
    });

    /*
https://datatables.net/reference/option/searchPanes.panes.header


    searchPanes.panes.headerSince: SearchPanes SearchPanes 1.0.0
Define the header for custom panes.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, Custom panes will be titled with the string "Custom Pane".

Setting searchPanes.panes.header to any other string value will cause that string to be displayed in the title of the Pane.

Type
     */


    Value: Custom Pane//default

    // Define custom pane header:

    $(document).ready(function() {
        $('#example').DataTable( {
            searchPanes: {
                panes: [
                    {
                        header: 'My Pane',
                        options: [
                            {
                                label: 'Accountants in Tokyo',
                                value: function(rowData, rowIdx){
                                    return rowData[2] === 'Accountant' && rowData[3] === 'Tokyo';
                                }
                            }
                        ]
                    }
                ]
            },
            dom: 'Pfrtip'
        });
    });

    /*

    https://datatables.net/reference/option/searchPanes.panes.options



    searchPanes.panes.optionsSince: SearchPanes SearchPanes 1.0.0
Define the options for custom panes.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, Custom panes have no options.

Setting searchPanes.panes.options to contain objects made up of both searchPanes.panes.options.label and searchPanes.panes.options.value will allow options to be defined within the custom panes. The label option is what will be displayed to the user and the value option is a function that will be used to search the DataTable.
     */


    Value: Undefined//default

    // Define custom pane options:

    $(document).ready(function() {
        $('#example').DataTable( {
            searchPanes: {
                panes: [
                    {
                        options: [
                            {
                                label:'Accountants in Tokyo',
                                value: function(rowData, rowIdx){
                                    return rowData[2] === 'Accountant' && rowData[3] === 'Tokyo';
                                }
                            }
                        ]
                    }
                ]
            },
            dom: 'Pfrtip'
        });
    });

    /*
https://datatables.net/reference/option/searchPanes.panes.options.label



    searchPanes.panes.options.labelSince: SearchPanes SearchPanes 1.0.0
Define the label for an option of a custom pane.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, the value of the label is undefined.

Setting searchPanes.panes.options.label to a string value will allow the custom pane to display that string in the list of search options.
     */


    Value: Undefined//default

    // Define custom pane options:

    $(document).ready(function() {
        $('#example').DataTable( {
            searchPanes: {
                panes: [
                    {
                        options: [
                            {
                                label:'Accountants in Tokyo',
                                value: function(rowData, rowIdx){
                                    return rowData[2] === 'Accountant' && rowData[3] === 'Tokyo';
                                }
                            }
                        ]
                    }
                ]
            },
            dom: 'Pfrtip'
        });
    });

    /*

https://datatables.net/reference/option/searchPanes.panes.options.value

    searchPanes.panes.options.valueSince: SearchPanes SearchPanes 1.0.0
Define the value for an option of a custom pane.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, the value of the value is undefined.

Setting searchPanes.panes.options.value to be a function allows searchPanes to use that function to search for results from the DataTable. Returning true from the function will include that row in the results, conversely false will exclude the row.

Having the value property as a function means that comparisons can be made at a variety of different levels of complexity, all completely open to the developers needs.

The example below shows a very simple function which compares data from multiple columns.
     */


    Value: Undefined//default

    // Define custom pane options:

    $(document).ready(function() {
        $('#example').DataTable( {
            searchPanes: {
                panes: [
                    {
                        options: [
                            {
                                label:'Accountants in Tokyo',
                                value: function(rowData, rowIdx){
                                    return rowData[2] === 'Accountant' && rowData[3] === 'Tokyo';
                                }
                            }
                        ]
                    }
                ]
            },
            dom: 'Pfrtip'
        });
    });


    /*

https://datatables.net/reference/option/searchPanes.threshold


    searchPanes.thresholdSince: SearchPanes SearchPanes 1.0.0
Set the minimum number of unique values needed in the columns to display that pane.
Please note - this property requires the SearchPanes extension for DataTables.

Description
As standard, columns must have a uniqueness ratio of 0.6. This is the ratio of different values throughout the column to the number of total values. If all values are unique, this will be 1; as the value drops towards 0, this means values are more often repeated. The benefit of dividing by the total values means that when arrays are present then the same logic applies. For example you may have a table with 2 rows, and each row contains 4 unique options in the column with arrays present. If you were to just divide by the row count then you would have a threshold of 4, outwith the value we are looking for. Dividing instead by the number of total options brings the value back to 1, which is within the range.

By setting the searchPanes.threshold option to a different decimal value, the uniqueness ratio must be less than this value to display the pane.

This is useful as it determines at what point a pane for the specified column should be shown. If all panes for tables with lots of columns were shown, the searching may become confusing. This adjustment allows searchPanes to internally make the decisions to display a simpler, less cluttered user interface.

The threshold of the uniqueness ratio can also be set for individual columns by making use of the columns.searchPanes.threshold option.

If you want to force specific panes to always be present, or to always be hidden, use the columns.searchPanes.show option.
     */


    Value: 0.6//default

    // Change the threshold of the uniqueness ratio:


    $(document).ready(function() {
        $('#example').DataTable( {
            searchPanes: {
                threshold: 0.4
            },
            dom: 'Pfrtip'
        });
    });

    /*
https://datatables.net/reference/option/searchPanes.viewTotal


    searchPanes.viewTotalSince: SearchPanes SearchPanes 1.0.0
Update the count column when searching to show visible count.
Please note - this property requires the SearchPanes extension for DataTables.

Description
By setting the searchPanes.viewTotal parameter to true, the message displayed in the count column will change when a search is applied to the DataTable.

As standard, SearchPanes will set the count column to display the total number of different values visible in the column when no filtering is applied. When filtering is active the count column will display the number of entries that satisfy this condition currently on display followed in brackets by the total in the table which satisfy the condition.

This is useful for seeing which options actually have entries present in the table when it has been searched upon.

It is possible to adjust the messages shown both when searching is taking place and when it isn't, by using the language.seearchPanes.count and language.searchPanes.countFiltered options. The language.searchPanes.countFiltered message will only be shown when searchPanes.viewtotal is set to true, otherwise only language.seearchPanes.count will be shown.
     */


    Value: false//default

    // Enable viewTotal:

    $(document).ready(function() {
        $('#example').DataTable( {
            searchPanes:{
                viewTotal: true
            },
            dom: 'Pfrtip'
        });
    });
