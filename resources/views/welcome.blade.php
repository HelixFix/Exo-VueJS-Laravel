<!doctype html>

<html lang="{{ app()->getLocale() }}">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Laravel makes it easy to protect your application from cross-site request forgery (CSRF) attacks. C-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}'} </script>

        <title>Larticles App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>

    <body>

        <div class="" id="app">

            <div class="container">

           
                <articles>

                
                </articles>

        </div> 

    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Import app.js -->

    </body>

</html>
