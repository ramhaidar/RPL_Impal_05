<!DOCTYPE html>
<html lang="id">

    <style>
        .login-box {
            border: solid 1px;
            width: 500px;
            padding: 20px;
            box-sizing: border-box;
            background-color: #bdbdbd;
            border-radius: 15px;
        }

        .img-thumbnail {
            thumbnail-padding: 50px;
            thumbnail-bg: #ff0000;
            thumbnail-border-width: 100px;
            thumbnail-border-radius: 20px;
            thumbnail-border-color: #ff0000;
            max-width: 50%;
        }

        .img-circle {
            width: 200px;
            height: 200px;
            border: solid 5px #ffa600;
            border-radius: 50%;
            overflow: hidden;
            display:inline-block;
            vertical-align:middle;
        }
    </style>

    <head>
        <!-- Required meta tags -->
        <meta charset="UTF8">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Bootstrap CSS -->
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" /> --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
        <title>@yield('title', $title)</title>
    </head>

    <body>
        @yield('content')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script> --}}
        {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            $(function() {
                // $('#datetimepicker').datetimepicker();
                $('.datepicker').datepicker({
                    format: 'dd/mm/yyyy'
                    , startDate: '-3d'
                });
                $.fn.datepicker.defaults.format = "dd/mm/yyyy";
            });
        </script>

    </body>

</html>