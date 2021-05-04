$(document).ready(function () {
    var table = $('#matkul').DataTable({
        columnDefs: [{
            orderable: false,
            className: 'select-checkbox',
            targets: 0
        }],
        select: {
            style: 'os',
            selector: 'td:first-child'
        },
        order: [[1, 'asc']]
    });
    var table2 = $('#matkul_regis').DataTable({
        columnDefs: [{
            orderable: false,
            className: 'select-checkbox',
            targets: 0
        }],
        select: {
            style: 'os',
            selector: 'td:first-child'
        },
        order: [[1, 'asc']]
    });

    $('#matkul tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
    $('#matkul_regis tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table2.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

    $('#ambil').on('click', function () {
        var value = table.row('.selected').data();
        table2.row.add([
            value[0],
            value[1],
            value[2],
            value[3]
        ]).draw(false);
        table.row('.selected').remove().draw(false);
    });
    $('#drop').on('click', function () {
        var value = table2.row('.selected').data();
        table.row.add([
            value[0],
            value[1],
            value[2],
            value[3]
        ]).draw(false);
        table2.row('.selected').remove().draw(false);
    });
});