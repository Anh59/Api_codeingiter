<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/2.0.2/js/dataTables.select.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/2.0.2/js/select.dataTables.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.5.2/js/dataTables.dateTime.min.js">
    <link rel="stylesheet" type="text/css" href="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.js">
    <link rel="stylesheet" type="text/css" href="https://editor.datatables.net/extensions/Editor/js/editor.dataTables.js">
    <!-- Include jQuery -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Include DataTables JS -->
    <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script> -->
</head>
<body>
    <h1> test Datatable </h1></h1>
    <table id="table" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Email</th>
                <th>User name</th>
                <th>Pass Word</th>
                <th>Otp</th>
                <th>status</th>
            
          
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>id</th>
                <th>Email</th>
                <th>User name</th>
                <th>Pass Word</th>
                <th>Otp</th>
                <th>status</th>
               
            </tr>
        </tfoot>
    </table>

    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script>
        $(document).ready(function() {
            const table = new DataTable('#table', {
                ajax: {
                    url: '<?= base_url('testdatatable')?>',
                    type: 'GET',
                },
                columns: [
                    { "data": 'id' },
                    { "data": 'email' },
                    { "data": 'username' },
                    { "data": 'password' },
                    { "data": 'otp' },
                    { "data": 'status' }
                ],
                processing: true,
                serverSide: true
            });

            // Thêm sự kiện click vào mỗi ô của bảng để kích hoạt chỉnh sửa trực tiếp
            $('#table').on('draw.dt', function (){
                $('#table').on('click', 'tbody td:not(:first-child)', function (e) {
                    const cell = table.cell(this); // Lấy ô cụ thể
                    cell.edit(); // Kích hoạt chỉnh sửa trực tiếp cho ô đó
                });
            });
        });
    </script>
</body>
</html>