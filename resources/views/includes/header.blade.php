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
           <header id="header" style="position: fixed;top:0;">
                <nav class="navbar navbar-expand-lg" style="min-height:50px;margin:auto; height:100%; padding:10px">
                    
                    <a href="{{ route('home') }}" class="navbar-brand" data-abc="true">
                        <img style="width:140px;height:110px" src="{{asset("imgs/logo.jpg")}}" alt="">
                    </a> 

                    <button style="" class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> 
                        <span class="fa fa-bars" aria-hidden="true"></span> 
                    </button>

                    <div class="collapse navbar-collapse" id="navbarColor02"> 

                        <ul id="menu" class="navbar-nav mr-auto" style="margin: auto;display:flex;align-items:center">

                            <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('noticias') }}">Noticias</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('proyectos') }}">Proyectos</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('lineas_accion') }}">Lineas de Acción</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('donation') }}">Donar</a></li>
                        </ul>

                    </div>

                </nav>
            </header>
                {{-- 

                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <a class="navbar-brand" href="#" data-abc="true">BBBOOTSTRAP</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbarColor02">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active"> <a class="nav-link" href="#" data-abc="true">HTML <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#" data-abc="true">CSS</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#" data-abc="true">JAVASCRIPT</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#" data-abc="true">BOOTSTRAP</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#" data-abc="true">PHP</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#" data-abc="true">JAVA</a> </li>
                            </ul>
                        </div>
                    </nav>

                --}}
           

   

