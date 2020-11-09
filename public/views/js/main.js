
$(document).ready(function() {

    // Call events API, and display results in Datatables
    $('#events').DataTable( {
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
