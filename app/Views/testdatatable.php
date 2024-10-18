<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DataTables Example</title>
    <!-- Include DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <!-- Include jQuery -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Include DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
</head>
<body>
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>User name</th>
                <th>Email</th>
            </tr>
        </thead>
    </table>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').dataTable({
                "processing": true ,
                "serverSide":true,
                "ajax":<?php echo base_url('testdatatable') ?>,
                "columns":[
                        {"data":"id"},
                        {"data":"name"},
                        {"data":"email"},

                ]

            })
        });


      
    </script>
</body>
</html>
