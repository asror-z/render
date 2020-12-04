<style>
    .manage {
        margin: 0;
        width: 100vw;
        height: 100vh;
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        background-color: #302F2F;
        color: #fff;
        font-family: "Inconsolata";
        line-height: 16px;
    }

    .container {
        width: 80vw;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }
    table th, table td {
        padding: 3px 12px;
        text-align: center;
        width: 12.5%;
    }
    table th, table td {
        background-color: #414040;
        border-bottom: solid 1px #1c1c1c;
        border-right: solid 1px #1c1c1c;
    }
    table th, table td:nth-child(1) {
        cursor: pointer;
        background-color: #292929;
        vertical-align: middle;
        font-weight: 700;
    }
    table th:hover, table td:nth-child(1):hover {
        background-color: #363636;
    }
    table td:hover, table td.hover {
        background-color: #5b5959;
    }
    table td.ui-selecting {
        background-color: #7f8c8d;
    }
    table td.ui-selecting.ui-selected {
        background-color: #7f8c8d;
    }
    table td.ui-selected {
        background-color: #2980b9;
    }

    .ui-lasso {
        display: none;
    }
</style>



<div class="container-fluid manage">

    <table>
        <thead>
        <tr>
            <th data-selectable="all">
                Toggle All
            </th>
            <th data-selectable="column">
                Sun
            </th>
            <th data-selectable="column">
                Mon
            </th>
            <th data-selectable="column">
                Tue
            </th>
            <th data-selectable="column">
                Wed
            </th>
            <th data-selectable="column">
                Thu
            </th>
            <th data-selectable="column">
                Fri
            </th>
            <th data-selectable="column">
                Sat
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td data-selectable="row">
                19 - 20
            </td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
        </tr>
        <tr>
            <td data-selectable="row">
                20 - 21
            </td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
        </tr>
        <tr>
            <td data-selectable="row">
                21 - 22
            </td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
        </tr>
        <tr>
            <td data-selectable="row">
                22 - 23
            </td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
        </tr>
        <tr>
            <td data-selectable="row">
                23 - 24
            </td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
            <td class="selectable"></td>
        </tr>
        </tbody>
    </table>
</div>

<script id="rendered-js">
    const table = document.querySelector("table");

    const selectable = new Selectable({
        // appendTo: table,
        filter: table.querySelectorAll(".selectable"),
        toggle: true,
        saveState: 10
    });

    selectable.table();
</script>
<script src='https://unpkg.com/selectable.js@latest/selectable.min.js'></script>
<script src='https://unpkg.com/selectable-table-plugin@latest/selectable.table.min.js'></script>
