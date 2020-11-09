
$(document).ready(function() {

    // Call events API, and display results in Datatables
    $('#events').DataTable( {
        "searching": false,
        "lengthChange": false,
        "ajax": {
            "url": "/api/events",
            "dataSrc": "",
        },
        "columns": [
            { "data": "ID" },
            { "data": "Title" },
            { "data": "Location.City" },
            { "data": "Location.State" },
            { "data": "Location.Country" }
        ]
    });

});
