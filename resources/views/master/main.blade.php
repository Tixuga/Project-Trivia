<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Trivia</title>

         <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Glory:wght@700&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

        <title>Trivia</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-image:url({{asset('images/low-poly-grid-haikei.svg')}});
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                min-height: 100vh;
                margin: 0;
            }

            .py-4{
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
                align-items: center;
            }

             /* .full-height {
                height: 100vh;
            } 

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }*/

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            } 

            .content {
                text-align: center;
            }

            .title {
                font-family: 'Glory', sans-serif;
                font-size: 10rem;
                color: rgb(255, 202, 9);
                letter-spacing: 1rem;
                text-shadow: 
                    0.025em 0.025em 0 rgb(255, 94, 0),
                    0.05em 0.05em 0 rgb(255, 0, 212),
                    0.075em 0.075em 0 rgb(0, 255, 21),
                    0.1em 0.1em 0 black
            }

            .links > a {
                color: #fdfeff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            h1{
                color: white;
            }
            .card{
                background-color: rgba(0, 0, 0, 0.437);
                color: white;
            }
            .card-header{
                font-size: 2rem;
            }

            .game-info{
                color: white;
                font-size: 1rem;
            }

            #question-form{
                font-family: 'Montserrat', sans-serif;
                background-color: rgba(0, 0, 0, 0.437);
                color: white;
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                flex-direction: column;
                width: 60%;
                min-height: 20rem;
                border-radius: 10px; 
                padding: 20px;
            }

            .answer-box{
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }

            #confirm-btn{
                width: 50%;
            }

            h3{
                font-size: 2rem;
            }

            .form-check-label{
                font-size: 1.75rem;
                padding-bottom: 0.5rem;
            }

            .table{
                background-color: rgba(0, 0, 0, 0.437);
                color: white;
            }
        </style>
    </head>
    <body>
        @component('master.header')
        @endcomponent

        <div class="container">
            <div class="content">
            
            <main class="py-4">
                @yield('content')
            </main>
            
            @component('master.footer')
            @endcomponent
            </div>
    </body>
</html>
