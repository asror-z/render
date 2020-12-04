/**
 *
 * Author:  Asror Zakirov
 * Created: 6/12/2020 3:21 PM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */

autoWidth

Feature control DataTables' smart column width handling

deferRender

Feature control deferred rendering for additional speed of initialisation.

    info

Feature control table information display field

lengthChange

Feature control the end user's ability to change the paging display length of the table.

ordering

Feature control ordering (sorting) abilities in DataTables.

    paging

Enable or disable table pagination.

    processing

Feature control the processing indicator.

    scrollX

Horizontal scrolling

scrollY

Vertical scrolling

searching

Feature control search (filtering) abilities

serverSide

Feature control DataTables' server-side processing mode.

stateSave

State saving - restore table state on page reload

DataTables - Data
ajax

Load data for the table's content from an Ajax source

ajax.data

Add or modify data submitted to the server upon an Ajax request

ajax.dataSrc

Data property or manipulation method for table data

data

Data to use as the display data for the table.

    DataTables - Callbacks
createdRow

Callback for whenever a TR element is created for the table's body.

drawCallback

Function that is called every time DataTables performs a draw.

    footerCallback

Footer display callback function.

formatNumber

Number formatting callback function.

headerCallback

Header display callback function.

infoCallback

Table summary information display callback.

    initComplete

Initialisation complete callback.

    preDrawCallback

Pre-draw callback.

    rowCallback

Row draw callback.

    stateLoadCallback

Callback that defines where and how a saved state should be loaded.

    stateLoadParams

State loaded - data manipulation callback

stateLoaded

State loaded callback.

    stateSaveCallback

Callback that defines how the table state is stored and where.

    stateSaveParams

State save - data manipulation callback

DataTables - Options
deferLoading

Delay the loading of server-side data until second draw

destroy

Destroy any existing table matching the selector and replace with the new options.

displayStart

Initial paging start point

dom

Define the table control elements to appear on the page and in what order

lengthMenu

Change the options in the page length select list.

    order

Initial order (sort) to apply to the table

orderCellsTop

Control which cell the order event handler will be applied to in a column

orderClasses

Highlight the columns being ordered in the table's body

orderFixed

Ordering to always be applied to the table

orderMulti

Multiple column ordering ability control.

    pageLength

Change the initial page length (number of rows per page)

pagingType

Pagination button display options

renderer

Display component renderer types

retrieve

Retrieve an existing DataTables instance

rowId

Data property name that DataTables will use to set tr element DOM IDs

scrollCollapse

Allow the table to reduce in height when a limited number of rows are shown.

    search

Set an initial filter in DataTables and / or filtering options.

    search.caseInsensitive

Control case-sensitive filtering option.

    search.regex

Enable / disable escaping of regular expression characters in the search term.

    search.search

Set an initial filtering condition on the table.

    search.smart

Enable / disable DataTables' smart filtering

searchCols

Define an initial search for individual columns.

    searchDelay

Set a throttle frequency for searching

    stateDuration

Saved state validity duration

stripeClasses

Set the zebra stripe class names for the rows in the table.

    tabIndex

Tab index control for keyboard navigation

DataTables - Columns
columnDefs

Set column definition initialisation properties.

    columnDefs.targets

Assign a column definition to one or more columns.

    columns

Set column specific initialisation properties.

    columns.cellType

Cell type to be created for a column

columns.className

Class to assign to each cell in the column

columns.contentPadding

Add padding to the text content used when calculating the optimal width for a table.

    columns.createdCell

Cell created callback to allow DOM manipulation

columns.data

Set the data source for the column from the rows data object / array

columns.defaultContent

Set default, static, content for a column

columns.name

Set a descriptive name for a column

columns.orderData

Define multiple column ordering as the default order for a column

columns.orderDataType

Live DOM sorting type assignment

columns.orderSequence

Order direction application sequence

columns.orderable

Enable or disable ordering on this column

columns.render

Render (process) the data for use in the table

columns.searchable

Enable or disable search on the data in this column

columns.title

Set the column title

columns.type

Set the column type - used for filtering and sorting string processing

columns.visible

Enable or disable the display of this column

columns.width

Column width assignment

DataTables - Internationalisation
language

Language configuration options for DataTables

    language.aria

Language strings used for WAI-ARIA specific attributes

language.aria.paginate

WAI-ARIA labels for pagination buttons

language.aria.paginate.first

WAI-ARIA label for the first pagination button

language.aria.paginate.last

WAI-ARIA label for the last pagination button

language.aria.paginate.next

WAI-ARIA label for the next pagination button

language.aria.paginate.previous

WAI-ARIA label for the previous pagination button

language.aria.sortAscending

Language strings used for WAI-ARIA specific attributes

language.aria.sortDescending

Language strings used for WAI-ARIA specific attributes

language.decimal

Decimal place character

language.emptyTable

Table has no records string

language.info

Table summary information display string

language.infoEmpty

Table summary information string used when the table is empty of records

language.infoFiltered

Appended string to the summary information when the table is filtered

language.infoPostFix

String to append to all other summary information strings

language.lengthMenu

Page length options string

language.loadingRecords

Loading information display string - shown when Ajax loading data

language.paginate

Pagination specific language strings

language.paginate.first

Pagination 'first' button string

language.paginate.last

Pagination 'last' button string

language.paginate.next

Pagination 'next' button string

language.paginate.previous

Pagination 'previous' button string

language.processing

Processing indicator string

language.search

Search input string

language.searchPlaceholder

Search input element placeholder attribute

language.thousands

Thousands separator

language.url

Load language information from remote file

language.zeroRecords

Table empty as a result of filtering string

DataTables - Static
$.fn.dataTable.ext.errMode

Set how DataTables will report detected errors

AutoFill
autoFill

Enable and configure the AutoFill extension for DataTables

    autoFill.alwaysAsk

Always ask the end user if an action should be taken or not

autoFill.columns

Select the columns that can be auto filled

autoFill.editor

Attach an Editor instance for database updating

autoFill.enable

Initial enablement state of AutoFill

autoFill.focus

Action that will cause the auto fill drag handle to appear in a cell

autoFill.horizontal

Enable / disable user ability to horizontally drag and fill

autoFill.update

Control automatic update of data when a fill drag is completed

autoFill.vertical

Enable / disable user ability to vertically drag and fill

language.autoFill

Container object for language strings used by AutoFill

language.autoFill.button

Multi-fill selector button text

language.autoFill.cancel

Multi-fill selector cancel option message

language.autoFill.fill

Multi-fill selector message for the full fill fill type

language.autoFill.fillHorizontal

Multi-fill selector message for the horizontal fill fill type

language.autoFill.fillVertical

Multi-fill selector message for the vertical fill fill type

language.autoFill.increment

Multi-fill selector message for the increment fill type

language.autoFill.info

Information message shown at the top of the fill type selector

Buttons
buttons

Buttons configuration object

buttons.buttons

List of buttons to be created

buttons.buttons.action

Action to take when the button is activated

buttons.buttons.attr

Collection of attribute key / values to set for a button

buttons.buttons.available

Ensure that any requirements have been satisfied before initialising a button

buttons.buttons.className

Set the class name for the button

buttons.buttons.destroy

Function that is called when the button is destroyed

buttons.buttons.enabled

Set a button's initial enabled state

buttons.buttons.extend

Define which button type the button should be based on

buttons.buttons.init

Initialisation function that can be used to add events specific to this button

buttons.buttons.key

Define an activation key for a button

buttons.buttons.name

Set a name for each selection

buttons.buttons.namespace

Unique namespace for every button

buttons.buttons.tag

Set the tag for the button

buttons.buttons.text

The text to show in the button

buttons.buttons.titleAttr

Button title attribute text

buttons.dom

Options to control the DOM structure Buttons creates

buttons.dom.button

DOM configuration for individual button elements

buttons.dom.buttonContainer

DOM configuration of a button container element

buttons.dom.buttonLiner

DOM configuration of a button liner element

buttons.dom.collection

DOM configuration of the collection display

buttons.dom.container

DOM configuration of the Buttons container element

buttons.name

Set a name for the instance for the group selector

ColReorder
colReorder

Enable and configure the ColReorder extension for DataTables

    colReorder.enable

Initial enablement state of ColReorder

colReorder.fixedColumnsLeft

Disallow x columns from reordering (counting from the left)

colReorder.fixedColumnsRight

Disallow x columns from reordering (counting from the right)

colReorder.order

Set a default order for the columns in the table

colReorder.realtime

Enable / disable live reordering of columns during a drag

FixedColumns
fixedColumns

Enable and configure the FixedColumns extension for DataTables

    fixedColumns.heightMatch

Row height matching algorithm to use

fixedColumns.leftColumns

Number of columns to fix to the left of the table

fixedColumns.rightColumns

Number of columns to fix to the right of the table

FixedHeader
fixedHeader

FixedHeader configuration object

fixedHeader.footer

Enable / disable fixed footer

fixedHeader.footerOffset

Offset the table's fixed footer

fixedHeader.header

Enable / disable fixed header

fixedHeader.headerOffset

Offset the table's fixed header

KeyTable
keys

Enable and configure the KeyTable extension for DataTables

    keys.blurable

Allow KeyTable's focus to be blurred (removed) from a table

keys.className

Set the class name used for the focused cell

keys.clipboard

Enable / disable clipboard interaction with KeyTable

    keys.clipboardOrthogonal

Set the orthogonal data to copy to clipboard

keys.columns

Select the columns that can gain focus

keys.editOnFocus

Control if editing should be activated immediately upon focus

keys.editor

Attach an Editor instance for Excel like editing

keys.focus

Cell to receive initial focus in the table

keys.keys

Limit the keys that KeyTable will listen for and take action on

keys.tabIndex

Set the table's tab index for when it will receive focus

Responsive
columns.responsivePriority

Set column's visibility priority

responsive

Enable and configure the Responsive extension for DataTables

    responsive.breakpoints

Set the breakpoints for a Responsive instance

responsive.details

Enable and configure the child rows shown by Responsive for collapsed tables

responsive.details.display

Define how the hidden information should be displayed to the end user

responsive.details.renderer

Define the renderer used to display the child rows

responsive.details.target

Column / selector for child row display control when using column details type

responsive.details.type

Set the child row display control type

responsive.orthogonal

Set the orthogonal data request type for the hidden information display

RowGroup
rowGroup

Enable and configure the RowGroup extension for DataTables

    rowGroup.className

Set the class name to be used for the grouping rows

rowGroup.dataSrc

Set the data point to use as the grouping data source

rowGroup.emptyDataGroup

Text to show for rows which have null, undefined or empty string group data

rowGroup.enable

Provides the ability to disable row grouping at initialisation

rowGroup.endClassName

Set the class name to be used for the grouping end rows

rowGroup.endRender

Provide a function that can be used to control the data shown in the end grouping row.

    rowGroup.startClassName

Set the class name to be used for the grouping start rows

rowGroup.startRender

Provide a function that can be used to control the data shown in the start grouping row.

    RowReorder
rowReorder

Enable and configure the RowReorder extension for DataTables

    rowReorder.dataSrc

Configure the data point that will be used for the reordering data

rowReorder.editor

Attach an Editor instance for database updating

rowReorder.enable

Enable / disable RowReorder's user interaction

rowReorder.formOptions

Set the options for the Editor form when submitting data

rowReorder.selector

Define the selector used to pick the elements that will start a drag

rowReorder.snapX

Horizontal position control of the row being dragged

rowReorder.update

Control automatic of data when a row is dropped

Scroller
scroller

Enable and configure the Scroller extension for DataTables

    scroller.boundaryScale

Set the point at which new data will be loaded and drawn

scroller.displayBuffer

The amount of data that Scroller should pre-buffer to ensure smooth scrolling

scroller.loadingIndicator

Display a loading message while Scroller is loading additional data

scroller.rowHeight

Set the row height, or how the row height is calculated

scroller.serverWait

Time delay before new data is requested when server-side processing is enabled

SearchPanes
columns.searchPanes

Container for options for individual columns

columns.searchPanes.className

Add a custom class name to a pane

columns.searchPanes.combiner

Set the type of logic to be implemented on the pane

columns.searchPanes.controls

Hide the Control buttons and disable searching in the pane of a specific column

columns.searchPanes.dtOpts

Define properties of the DataTables being used for an individual pane

columns.searchPanes.header

Set the title of the SearchPane

columns.searchPanes.hideCount

Hide the count column in the pane of a specific column

columns.searchPanes.name

Set the name of the SearchPane

columns.searchPanes.options

Define custom search options

columns.searchPanes.orderable

Hide the ordering buttons in the pane of a specific column

columns.searchPanes.orthogonal

Set values of orthogonal data for rendering functions

columns.searchPanes.preSelect

Pre-selected options in a pane

columns.searchPanes.show

Force Panes to hide or show

columns.searchPanes.threshold

Set the minimum number of unique values needed in a specific column to display that pane

language.searchPanes

Container for options for language

    language.searchPanes.collapse

Set the message to be displayed in the SearchPanes Button

language.searchPanes.count

Set the message to be displayed in the count column when not searching

language.searchPanes.countFiltered

Set the message to be displayed in the count column when searching

language.searchPanes.emptyPanes

Add internationalisation to the message shown when no panes are displayed

language.searchPanes.title

Add internationalisation to the title showing how many panes are selected

searchPanes

Enable Search Panes

searchPanes.cascadePanes

Allow panes to cascade under selection

searchPanes.clear

Disable buttons to allow quick clearing of selections in panes

searchPanes.columns

Select which columns should be considered when displaying panes

searchPanes.controls

Hide the control buttons and disable searching in all panes

searchPanes.dataLength

Make use of ellipsis for a certain length of entry

searchPanes.dtOpts

Define properties of the DataTables being used as Panes

searchPanes.emptyMessage

Set custom empty message

searchPanes.hideCount

Hide the count column in all panes

searchPanes.layout

Set the layout of how the panes are displayed on the page

searchPanes.order

Set the order of the Panes

searchPanes.orderable

Hide the ordering buttons in all panes

searchPanes.panes

Define custom panes to filter across all columns

searchPanes.panes.className

Add a custom class for a custom pane

searchPanes.panes.dtOpts

Define the DataTables options for a custom pane

searchPanes.panes.header

Define the header for custom panes

searchPanes.panes.options

Define the options for custom panes

searchPanes.panes.options.label

Define the label for an option of a custom pane

searchPanes.panes.options.value

Define the value for an option of a custom pane

searchPanes.threshold

Set the minimum number of unique values needed in the columns to display that pane

searchPanes.viewTotal

Update the count column when searching to show visible count

Select
button.searchPanes

Button that is enabled when SearchPanes is to be used through a button

language.select

Container object for language strings used by Select

language.select.cells

Table information summary string for the number of cells selected

language.select.columns

Table information summary string for the number of columns selected

language.select.rows

Table information summary string for the number of rows selected

select

Select configuration object

select.blurable

Indicate if the selected items will be removed when clicking outside of the table

select.className

Set the class name that will be applied to selected items

select.info

Enable / disable the display for item selection information in the table summary.

    select.items

Set which table items to select (rows, columns or cells)

select.selector

Set the element selector used for mouse event capture to select items

select.style

Set the selection style for end user interaction with the table

select.toggleable

Disable the deselection of selected rows when clicked
