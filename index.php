<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>datatable</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <style>
        .outside{
            width: 80%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="outside">
    <table id="mytb" class="display">

    </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $.get("./api/api.php", function(res) {
            console.log(res);
            console.log(JSON.parse(res));
            let data = JSON.parse(res);
            $('#mytb').DataTable({
                data: data,
                columns: [{
                        data: 'sna',
                        title: '站名'
                    },
                    {
                        data: 'sarea',
                        title: '地區'
                    },
                    {
                        data: 'tot',
                        title: '車位'
                    },
                    {
                        data: 'sbi',
                        title: '現有車輛'
                    },
                    {
                        data: 'ar',
                        title: '地址'
                    }
                ]
            });
        })
    </script>
</body>

</html>