jQuery(document).ready(function($) {
    'use strict';





    if ($("table.second").length) {

        $(document).ready(function() {
            var table = $('table.second').DataTable({
                lengthChange: false,
            });


        });
    }


});
