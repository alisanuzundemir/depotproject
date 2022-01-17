/* ------------------------------------------------------------------------------
*
*  # Row Reorder extension for Datatables
*
*  Specific JS code additions for datatable_extension_row_reorder.html page
*
*  Version: 1.0
*  Latest update: Nov 9, 2015
*
* ---------------------------------------------------------------------------- */

$(function() {

    // Basic initialization
    $('.datatable-row-basic').DataTable({
        rowReorder: true
    });


    // Full row selection
    $('.datatable-row-full').DataTable({
        rowReorder: {
            selector: 'tr'
        },
        columnDefs: [
            { targets: 0, visible: false }
        ]
    });


    // Responsive integration
    $('.datatable-row-responsive').DataTable({
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    });
/* 
$('#dattab').on('draw.dt', function () {
           if ($('#dattab').data('tabs')) {
               var rows = table.rows().data();
               var ord = new Array();
               for (var i = 0, ien = rows.length; i < ien; i++) {
                   ord[i] = rows[i].DT_RowId;
               }
               post_order(ord, $('#dattab').data('tabs'));
           }
       });

*/
    // Reorder events
    var table = $('.datatable-row-events').DataTable({
        rowReorder: true
    });
 
    // Setup event
    table.on('row-reorder', function (e, diff, edit) {
        var result = 'Reorder started on row: '+edit.triggerRow.data()[1]+'<br>';
 
        for (var i=0, ien=diff.length ; i<ien ; i++) {
            var rowData = table.row( diff[i].node ).data();
 
            result += rowData[1]+' updated to be in position '+
                diff[i].newData+' (was '+diff[i].oldData+')<br>';
        }
 
        $('#event-result').html('Event result:<br>'+result);
    });



    // External table additions
    // ------------------------------


    // Enable Select2 select for the length option
    $('.dataTables_length select').select2({
        minimumResultsForSearch: Infinity,
        width: 'auto'
    });
    
});
