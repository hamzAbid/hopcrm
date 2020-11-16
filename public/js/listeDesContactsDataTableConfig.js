$(document).ready(function () {
    $('#example').DataTable(
        {
            "pagingType": "simple_numbers",

            "dom": '"<\'row\'<\'col-sm-12 col-md-6\'f><\'col-sm-12 col-md-6\'p>>" +\n' +
                '"<\'row\'<\'col-sm-12\'tr>>" +\n' +
                '"<\'row\'<\'col-sm-12 col-md-5\'l><\'col-sm-12 col-md-7\'p>>",',

            "lengthMenu": [[15, 20, 25, 50, -1], [15, 20, 25, 50, "All"]],

            "language": {
                "lengthMenu": "Lignes Par Pages _MENU_",
                "zeroRecords": "No data pour votre recherche  ",
                "search": "Recherche  ",
                "paginate": {
                    "next": "Suivant",
                },
            },

        }
    );

});

