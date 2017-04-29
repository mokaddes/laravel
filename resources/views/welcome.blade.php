<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>myproject</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            .container .header{
                text-align: center;
                font-size: 48px;
                font-family: cursive;
                color: green;
            }
            .container ul{
                margin-left: 34%;
            }
            .container nav{
                width: 500px;
                margin: 0 auto;
                margin-top: 10%;
                background-color: coral;
            }
            .container ul li a{
                color: chartreuse;
            }
            .container ul li a:hover{
                color: black;
                background-color:chartreuse; 
            }
        </style>
       
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                       
                        <div class="container">
                               <div class="header">
                                   <h1>WELCOME TO MY WEBSITE</h1>
                                   <h2>MD. MOKADDES HOSAIN</h2>
                                   <h2>Dept. of Applied Physics &amp; Electronics Engineering</h2>
                                   <h2></h2>
                               </div>
                               
                                <nav class="navbar">
                                   <ul class="nav navbar-nav">
                                        <li><a href="{{ url('/login') }}" class="text-center">Login</a></li>
                                        <li> <a href="{{ url('/register') }}" class="text-center">Register</a></li>
                                   </ul>
                                    
                                </nav>
                        </div>
                    @endif
                </div>
            @endif

            <div class="content">
                
            </div>
                
           
        </div>
    </body>
</html>
