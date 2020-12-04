//https://datatables.net/reference/option/

//language: DataTables 1.10
// Language configuration options for DataTables.

{
    "decimal":        "",
    "emptyTable":     "No data available in table",
    "info":           "Showing _START_ to _END_ of _TOTAL_ entries",
    "infoEmpty":      "Showing 0 to 0 of 0 entries",
    "infoFiltered":   "(filtered from _MAX_ total entries)",
    "infoPostFix":    "",
    "thousands":      ",",
    "lengthMenu":     "Show _MENU_ entries",
    "loadingRecords": "Loading...",
    "processing":     "Processing...",
    "search":         "Search:",
    "zeroRecords":    "No matching records found",
    "paginate": {
    "first":      "First",
        "last":       "Last",
        "next":       "Next",
        "previous":   "Previous"
},
    "aria": {
    "sortAscending":  ": activate to sort column ascending",
        "sortDescending": ": activate to sort column descending"
}
}

//language.ariaSince: DataTables 1.10
// Language strings used for WAI-ARIA specific attributes.


//language.aria.paginateSince: DataTables 1.10.10
// WAI-ARIA labels for pagination buttons


//Define full paging language options as icons with ARIA label text:
$('#example').DataTable( {
    pagingType: 'full',
    language: {
        paginate: {
            first:    '«',
            previous: '‹',
            next:     '›',
            last:     '»'
        },
        aria: {
            paginate: {
                first:    'First',
                previous: 'Previous',
                next:     'Next',
                last:     'Last'
            }
        }
    }
} );



//language.aria.paginate.firstSince: DataTables 1.10.10
// WAI-ARIA label for the first pagination button
//Description
// Set the ARIA label attribute for the first pagination button. This can be particularly useful for cases where you wish to show an icon such as « in the button itself, while retaining full accessibility.

$('#example').DataTable( {
    pagingType: 'full',
    language: {
        paginate: {
            first:    '«',
            previous: '‹',
            next:     '›',
            last:     '»'
        },
        aria: {
            paginate: {
                first:    'First',
                previous: 'Previous',
                next:     'Next',
                last:     'Last'
            }
        }
    }
} );


//language.aria.paginate.lastSince: DataTables 1.10.10
// WAI-ARIA label for the last pagination button.
//
// Description
// Set the ARIA label attribute for the last pagination button. This can be particularly useful for cases where you wish to show an icon such as » in the button itself, while retaining full accessibility

//Define full paging language options as icons with ARIA label text


$('#example').DataTable( {
    pagingType: 'full',
    language: {
        paginate: {
            first:    '«',
            previous: '‹',
            next:     '›',
            last:     '»'
        },
        aria: {
            paginate: {
                first:    'First',
                previous: 'Previous',
                next:     'Next',
                last:     'Last'
            }
        }
    }
} );

//language.aria.paginate.nextSince: DataTables 1.10.10
// WAI-ARIA label for the next pagination button.
//Description
// Set the ARIA label attribute for the next pagination button. This can be particularly useful for cases where you wish to show an icon such as » or › in the button itself, while retaining full accessibility

//Use icons for the previous and next buttons with ARIA label text:
$('#example').DataTable( {
    language: {
        paginate: {
            previous: '‹',
            next:     '›'
        },
        aria: {
            paginate: {
                previous: 'Previous',
                next:     'Next'
            }
        }
    }
} );

//language.aria.paginate.previousSince: DataTables 1.10.10
// WAI-ARIA label for the previous pagination button.
//
// Description
// Set the ARIA label attribute for the previous pagination button. This can be particularly useful for cases where you wish to show an icon such as « or ‹ in the button itself, while retaining full accessibility.

//Example
// Use icons for the previous and next buttons with ARIA label text

$('#example').DataTable( {
    language: {
        paginate: {
            previous: '‹',
            next:     '›'
        },
        aria: {
            paginate: {
                previous: 'Previous',
                next:     'Next'
            }
        }
    }
} );


//language.aria.sortAscendingSince: DataTables 1.10
// Language strings used for WAI-ARIA specific attributes.
//
// Description
// ARIA label that is added to the table headers when the column may be sorted ascending by activating the column (click or return when focused).
//
// Note that the column header text is prefixed to this string.

//Set ARIA sort ascending string:
$('#example').dataTable( {
    "language": {
        "aria": {
            "sortAscending": " - click/return to sort ascending"
        }
    }
} );

//language.aria.sortDescendingSince: DataTables 1.10
// Language strings used for WAI-ARIA specific attributes.
//
// Description
// ARIA label that is added to the table headers when the column may be sorted descending by activing the column (click or return when focused).
//
// Note that the column header text is prefixed to this string

//Set ARIA sort descending string:

$('#example').dataTable( {
    "language": {
        "aria": {
            "sortDescending": " - click/return to sort descending"
        }
    }
} );

//language.decimalSince: DataTables 1.10
// Decimal place character.
//
// Description
// A dot (.) is used to mark the decimal place in Javascript, however, many parts of the world use a comma (,) and other characters such as the Unicode decimal separator (⎖) or a dash (-) are often used to show the decimal place in a displayed number.

//Detect and sort numbers which use a comma as a decimal place

$('#example').dataTable( {
    "language": {
        "decimal": ","
    }
} );

//Detect and sort numbers which use a dash as a decimal place:

$('#example').dataTable( {
    "language": {
        "decimal": "-",
        "thousands": "."
    }
} );


//language.emptyTableSince: DataTables 1.10
// Table has no records string
//Description
// This string is shown in preference to language.zeroRecords when the table is empty of data (regardless of filtering) - i.e. there are zero records in the table.
//
// Note that this is an optional parameter. If it is not given, the value of language.zeroRecords will be used instead (either the default or given value).

//Set emptyTable string:

$('#example').dataTable( {
    "language": {
        "emptyTable": "No data available in table"
    }
} );

//language.infoSince: DataTables 1.10
// Table summary information display string.
//
// Description
// This string gives information to the end user about the information that is current on display on the page. The following tokens can be used in the string and will be dynamically replaced as the table display updates.
//
// These tokens can be placed anywhere in the string, or removed as needed by the language requires:

//Show page count:

$('#example').dataTable( {
    "language": {
        "info": "Showing page _PAGE_ of _PAGES_"
    }
} );

//language.infoSince: DataTables 1.10
// Table summary information display string.
//
// Description
// This string gives information to the end user about the information that is current on display on the page. The following tokens can be used in the string and will be dynamically replaced as the table display updates.
//
// These tokens can be placed anywhere in the string, or removed as needed by the language requires:

//Show page count:

$('#example').dataTable( {
    "language": {
        "info": "Showing page _PAGE_ of _PAGES_"
    }
} );


//language.infoEmptySince: DataTables 1.10
// Table summary information string used when the table is empty of records
//Description
// Display information string for when the table is empty. Typically the format of this string should match info.

// show page count

$('#example').dataTable( {
    "language": {
        "infoEmpty": "No entries to show"
    }
} );

//language.infoFilteredSince: DataTables 1.10
// Appended string to the summary information when the table is filtered.
//
// Description
// When a user filters the information in a table, this string is appended to the information (info) to give an idea of how strong the filtering is.
//
// The token _MAX_ is dynamically updated - see language.info for information about all available tokens.

//Alter the filtering information summary string:

$('#example').dataTable( {
    "language": {
        "infoFiltered": " - filtered from _MAX_ records"
    }
} );

//language.infoPostFixSince: DataTables 1.10
// String to append to all other summary information strings.
//
// Description
// If can be useful to append extra information to the info string at times, and this variable does exactly that.
//
// This string will be appended to the language.info (language.infoEmpty and language.infoFiltered in whatever combination they are being used) at all times.

//Postfix string to the information summary:

$('#example').dataTable( {
    "language": {
        "infoPostFix": "All records shown are derived from real information."
    }
} );

//language.lengthMenuSince: DataTables 1.10
// Page length options string.
//
// Description
// Detail the action that will be taken when the drop down menu for the pagination length option is changed. The token _MENU_ is replaced with a default select list of 10, 25, 50 and 100 (or any other value specified by lengthMenu), and can be replaced with a custom select list if required.

//Language change only:

$('#example').dataTable( {
    "language": {
        "lengthMenu": "Display _MENU_ records"
    }
} );

//Language and options change (you'd be better off useing lengthMenu though!:

$('#example').dataTable( {
    "language": {
        "lengthMenu": 'Display <select>'+
            '<option value="10">10</option>'+
            '<option value="20">20</option>'+
            '<option value="30">30</option>'+
            '<option value="40">40</option>'+
            '<option value="50">50</option>'+
            '<option value="-1">All</option>'+
            '</select> records'
    }
} );

//language.loadingRecordsSince: DataTables 1.10
// Loading information display string - shown when Ajax loading data.
//
// Description
// When using Ajax sourced data and during the first draw when DataTables is gathering the data, this message is shown in an empty row in the table to indicate to the end user the the data is being loaded. Note that this parameter is not used when loading data by server-side processing, just Ajax sourced data with client-side processing.

//Set loading information text:

$('#example').dataTable( {
    "ajax": "json.txt",
    "language": {
        "loadingRecords": "Please wait - loading..."
    }
} );

//language.paginateSince: DataTables 1.10
// Pagination specific language strings.
//
// Description
// Pagination string used by DataTables for the built-in pagination control types.


//Pagination 'first' button string.
//
// Description
// Text used when the pagination control shows the button to take the user to the first page.
//
// Note that DataTables writes this property to the document as HTML, so you can use HTML tags in the language string, but HTML entities such as < and > should be encoded as &lt; and &gt; respectively.

//Set text for pagination 'first' button:

$('#example').dataTable( {
    "language": {
        "paginate": {
            "first": "First page"
        }
    }
} );

//language.paginate.lastSince: DataTables 1.10
// Pagination 'last' button string.
//
// Description
// Text used when the pagination control shows the button to take the user to the last page.
//
// Note that DataTables writes this property to the document as HTML, so you can use HTML tags in the language string, but HTML entities such as < and > should be encoded as &lt; and &gt; respectively.

//Set text for pagination 'last' button:

$('#example').dataTable( {
    "language": {
        "paginate": {
            "last": "Last page"
        }
    }
} );

//Pagination 'next' button string.
//
// Description
// Text to use for the 'next' pagination button (to take the user to the next page).
//
// Note that DataTables writes this property to the document as HTML, so you can use HTML tags in the language string, but HTML entities such as < and > should be encoded as &lt; and &gt; respectively.

//Set text for pagination 'next' button:

$('#example').dataTable( {
    "language": {
        "paginate": {
            "next": "Next page"
        }
    }
} );

//language.paginate.previousSince: DataTables 1.10
// Pagination 'previous' button string.
//
// Description
// Text to use for the 'previous' pagination button (to take the user to the previous page).
//
// Note that DataTables writes this property to the document as HTML, so you can use HTML tags in the language string, but HTML entities such as < and > should be encoded as &lt; and &gt; respectively.

//Set text for pagination 'previous' button:

$('#example').dataTable( {
    "language": {
        "paginate": {
            "previous": "Previous page"
        }
    }
} );

//language.processingSince: DataTables 1.10
// Processing indicator string.
//
// Description
// Text that is displayed when the table is processing a user action (usually a sort command or similar).

//Set processing information text:

$('#example').dataTable( {
    "language": {
        "processing": "DataTables is currently busy"
    }
} );

//anguage.searchSince: DataTables 1.10
// Search input string.
//
// Description
// Sets the string that is used for DataTables filtering input control.
//
// The token _INPUT_, if used in the string, is replaced with the HTML text box for the filtering input allowing control over where it appears in the string. If _INPUT_ is not given then the input box is appended to the string automatically.

//Input text box will be appended at the end automatically:
$('#example').dataTable( {
    "language": {
        "search": "Filter records:"
    }
} );

//Specify where the filter should appear:

$('#example').dataTable( {
    "language": {
        "search": "Apply filter _INPUT_ to table"
    }
} );


//language.searchPlaceholderSince: DataTables 1.10.1
// Search input element placeholder attribute.
//
// Description
// HTML 5 introduces a placeholder attribute for input type="text" elements to provide informational text for an input control when it has no value.
//
// This parameter can be used to set a value for the placeholder attribute in a DataTable's search input.

//Set a placeholder:

$('#example').dataTable( {
    language: {
        searchPlaceholder: "Search records"
    }
} );

//Search input with no label - just the placeholder:

$('#example').dataTable( {
    language: {
        search: "_INPUT_",
        searchPlaceholder: "Search..."
    }
} );

//language.thousandsSince: DataTables 1.10
// Thousands separator.
//
// Description
// DataTables' built in number formatter (formatNumber) is used to format large numbers that are used in the table information. By default a comma is used, but this can be trivially changed to any other character you wish with this parameter, suitable for any locality, or set to an empty string if you do not which to have a thousands separator character.
//
// Please note that unlike the language.decimal option, the thousands separator option is used for output of information only (specifically the info option). Changing it does not effect how DataTables reads numeric data.

//Set thousands separator to be a quote mark:

$('#example').dataTable( {
    "language": {
        "thousands": "'"
    }
} );

//language.urlSince: DataTables 1.10
// Load language information from remote file.
//
// Description
// All of the language options DataTables provides can be stored in a file on the server, which DataTables will look up if this parameter is passed. The file must be a valid JSON file, and the object it contains has the same properties as the language object in the initialiser object.
//
// There are a wide range of translations readily available on this site, in the internationalisation plug-ins.
//
// Note that when this parameter is set, DataTables' initialisation will be asynchronous due to the Ajax data load. That is to say that the table will not be drawn until the Ajax request has completed. As such, any actions that require the table to have completed its initialisation should be placed into the initComplete callback.

//Load language information from a remote file:

$('#example').dataTable( {
    "language": {
        "url": "/dataTables/i18n/de_de.lang"
    }
} );

//

$('#example').dataTable( {
    "language": {
        "url": "/dataTables/i18n/de_de.lang"
    },
    "initComplete": function () {
        var api = this.api();

        // Put the sum of column 5 into the footer cell
        $( api.column( 5 ).footer() ).html(
            api.column( 5 ).data().reduce( function (a, b) {
                return a + b;
            } )
        );
    }
} );

//Table empty as a result of filtering string.
//
// Description
// Text shown inside the table records when the is no information to be displayed after filtering.
//
// Note that language.emptyTable is shown when there is simply no information in the table at all (regardless of filtering), while this parameter is used for when the table is empty due to filtering

//Set zero records string:
$('#example').dataTable( {
    "language": {
        "zeroRecords": "No records to display"
    }
} );



