<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fundación Arca</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- Propios -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/noticias.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        

        <!-- Slick para Slider y Carousell -->
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        

    </head>

    <body>

        <header class="">
           
                <nav class="container" style="width: 100%; height:100%;padding:10px">

                    <div style="margin: auto;height: 100%;width: 100%">

                        <div class="" style="float: left; padding-left:50px; margin-top:10px">
                            <div class="float-right">
                                <a href="{{ route('home') }}">
                                    <img style="width:140px;height:110px" src="{{asset("imgs/logo.jpg")}}" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="" style="float: right;padding-top:30px">
                        
                                <div class="row p-3">

                                    <div class="col-md-12" style="text-align: right;margin-left:30px">
                                        <ul id="menu">
                                            <li><a href="{{ route('home') }}">Inicio</a></li>
                                            <li><a href="#nosotros">Nosotros</a></li>
                                            <li><a href="{{ route('noticias') }}">Noticias</a></li>
                                            <li><a href="{{ route('proyectos') }}">Proyectos</a></li>
                                            <li style="width:24%"><a href="{{ route('lineas_accion') }}">Lineas de Acción</a></li>
                                        </ul>
                                    </div>
                                </div>
                        
                        </div>

                    </div>

                </nav>
         
           
        </header>

   

