<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>@yield('title', 'Default') Residencial Moquegua</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/ve.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/animate.css') }}">
    
    </head>

        <style>
  
        *{
        padding: 0;
        margin: 0;  

        }
        
        header{
            
            position:relative;
            width: 100%;
            margin: 0;
        }
        .banner{
            display: block;
            position:relative;
            top:0px;
            padding: 0;
        }
        .reserva{
            display: block;
            position: relative;
            width: 100%;
            height: 30px;
            background: rgba(0,0,0,0.7);
        }
        section{
            display: block;
            position: relative;
            width: 100%;
            height: 1200px;
            background: rgba(150,150,150,0.7);
        }

        footer{


            display: block;
            position: relative;
            width: 100%;
            height: 200px;
            background: rgba(50,50,50,0.7);
        }

        </style>
    </head>
    <body>

    <head>
        
        @include('admin.templates.partials.nav')

                <div class="banner">
                        <img src="{{ asset('imagen/head.jpg') }}" class="img-responsive">
                </div>

    </head>
    <div class=" container-fluid">
        @yield('reserva')
    </div>
    


    <section>

        
    </section>





    <footer>

        
    </footer>

    <script type="text/javascript">

        $(function () {
            $('#datetimepicker6').datetimepicker();
            $('#datetimepicker7').datetimepicker({
                useCurrent: false //Important! See issue #1075
            });
            $("#datetimepicker6").on("dp.change", function (e) {
                $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
            });
            $("#datetimepicker7").on("dp.change", function (e) {
                $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
            });
        });

    </script>
    </body>
</html>
