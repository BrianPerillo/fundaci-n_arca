@include('includes.header')

{{-- <div class="slider">
    <div><img src="https://espacio.fundaciontelefonica.com.ar/wp-content/uploads/2015/10/talleres-espacio-1400x600-1400x600.jpg" alt=""></div>
    <div><img src="https://www.gdfe.org.ar/wp-content/uploads/2017/04/a47812_613e2742de93463b94b1f1ee9f010580mv2_d_1800_1800_s_2-1200x675.jpg" alt=""></div>
</div> --}}

<section id="proyectos" style="margin-bottom:150px">
        
    <div class="" style="width: 55%;margin: auto;">

        {{-- PROYECTO 1 --}}

        <div id="proyecto1" class="row">

            <div class="col-md-6 m-2">
                <h3 style="text-align: justify">Apoyo a campañas educativas de tenencia responsable de animales de compañía en el municipio de Puerto Asís - 2014</h3>
                
                <br>

                <p>
                    <strong>Objetivo General:</strong> Desarrollar estrategias pedagógicas de tenencia responsable de animales de compañía en el municipio de Puerto Asis.
                </p>

                <p>
                    <strong>Resumen del proyecto:</strong> Con el apoyo de la Universidad de la Amazonia se logró llegar a barrios prestando servicios de medicina veterinaria para 
                    caninos, felinos y equinos.
                </p>

                <p>
                    <strong>Beneficiarios: </strong> Municipio de Puerto Asís
                </p>
                
            
            </div>

            <div class="col m-2">
                <div id="slider1" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                      <li data-target="#slider1" data-slide-to="0" class="active"></li>
                      <li data-target="#slider1" data-slide-to="1"></li>
                      <li data-target="#slider1" data-slide-to="2"></li>
                      <li data-target="#slider1" data-slide-to="3"></li>
                    </ol>

                    <div class="carousel-inner" style="height:350px">

                      <div class="carousel-item active">
                        <img  style="height:350px" class="d-block w-100" src="{{asset('imgs/proyectos/1ero/9da56f_939f1f58ef4849c99f17a82dd8aa2235_mv2.jpg')}}" alt="First slide">
                      </div>

                      <div class="carousel-item">
                        <img style="height:350px" class="d-block w-100" src="{{asset('imgs/proyectos/1ero/9da56f_36a2af88593d444389c8abd955c54675_mv2.jpg')}}" alt="Second slide">
                      </div>

                      <div class="carousel-item">
                        <img style="height:350px" class="d-block w-100" src="{{asset('imgs/proyectos/1ero/9da56f_823af913af6d4aeea0fc9e2a75db7c2d_mv2.jpg')}}" alt="Third slide">
                      </div>

                      <div class="carousel-item">
                        <img style="height:350px" class="d-block w-100" src="{{asset('imgs/proyectos/1ero/9da56f_5b5e195afe474876bd610ba4d5c3e538_mv2.jpg')}}" alt="Fourth slide">
                      </div>

                    </div>

                </div>
            </div>

        </div>

        {{-- PROYECTO 2 --}}

        <div id="proyecto2" class="row" style="margin-top:100px">

            <div class="col-md-6 m-2">
                <h3 style="text-align: justify">Promover y fomentar la tenencia de fauna en el municipio de Puerto Asís - 2015</h3>
                
                <br>

                <p>
                    <strong>Objetivo General:</strong> Desarrollar actividades de tenencia responsable, campañas de No al trafico de fauna silvestre y brigadas de salud.
                </p>

                <p>
                    <strong>Resumen del proyecto:</strong> Con el apoyo de la alcaldía se realiza el I Foro de protección animal en tres temáticas: Veganismo, la protección 
                    animal desde el ámbito jurídico y los derechos de los animales, también se realiza la primera jornada de esterilización a comunidades vulnerables.
                </p>

                <p>
                    <strong>Beneficiarios: </strong> Municipio de Puerto Asís
                </p>
                
            
            </div>

            <div class="col m-2">
                <div id="slider2" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                      <li data-target="#slider2" data-slide-to="0" class="active"></li>
                      <li data-target="#slider2" data-slide-to="1"></li>
                      <li data-target="#slider2" data-slide-to="2"></li>
                      {{-- <li data-target="#slider2" data-slide-to="3"></li> --}}
                    </ol>

                    <div class="carousel-inner" style="max-height:400px">

                      <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('imgs/proyectos/2do/9da56f_25bba85dccd442aa8ded22b61a08c4f4_mv2,jpg.jpg')}}" alt="First slide">
                      </div>

                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('imgs/proyectos/2do/9da56f_703533a6069c4d719683c22463991e54_mv2.jpg')}}" alt="Second slide">
                      </div>

                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('imgs/proyectos/2do/9da56f_5a9cd1df1b7247e28b16fcf8b6a587c6_mv2.jpg')}}" alt="Third slide">
                      </div>

                      {{-- <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('imgs/proyectos/2do/9da56f_1dfda3b94c374f0a962df5e32a9c9a07_mv2.jpg')}}" alt="Fourth slide">
                      </div> --}}

                    </div>

                </div>
            </div>

        </div>

        {{-- PROYECTO 3 --}}

        <div id="proyecto2" class="row" style="margin-top:100px">

            <div class="col-md-6 m-2">
                <h3 style="text-align: justify">Campaña por los derechos de los animales en el municipio de Mocoa - 2016</h3>
                
                <br>

                <p>
                    <strong>Objetivo General:</strong> Promover la salud y bienestar de los animales en el municipio de Mocoa - 2016.
                </p>

                <p>
                    <strong>Resumen del proyecto:</strong> La Fundación con recursos propios y el apoyo de la Universidad de la Amazonia promueve la salud y el bienestar de los animales, llevando servicios de atención médica, 
                    laboratorios y medicamentos a población vulnerables.
                </p>

                <p>
                    <strong>Beneficiarios:</strong> Municipio de Puerto Asís
                </p>
                
            
            </div>

            <div class="col m-2">
                <div id="slider3" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                      <li data-target="#slider3" data-slide-to="0" class="active"></li>
                      <li data-target="#slider3" data-slide-to="1"></li>
                    </ol>

                    <div class="carousel-inner" style="width:500px">

                      <div class="carousel-item active">
                        <img class="d-block w-100" src="https://espacio.fundaciontelefonica.com.ar/wp-content/uploads/2015/10/talleres-espacio-1400x600-1400x600.jpg" alt="First slide">
                      </div>

                      <div class="carousel-item">
                        <img class="d-block w-100" src="https://www.gdfe.org.ar/wp-content/uploads/2017/04/a47812_613e2742de93463b94b1f1ee9f010580mv2_d_1800_1800_s_2-1200x675.jpg" alt="Second slide">
                      </div>

                    </div>

                </div>
            </div>

        </div>

        {{-- PROYECTO 4 --}}

        <div id="proyecto2" class="row" style="margin-top:100px">

            <div class="col-md-6 m-2">
                <h3 style="text-align: justify">Apoyo en servicios de salud y esterilización a animales de población damnificada por la avenida torrencial en el municipio de Mocoa - 2017</h3>
                
                <br>

                <p>
                    <strong>Objetivo General:</strong> Brindar apoyo en servicios de salud y esterilización a animales de población damnificada por la avenida torrencial de marzo de 2017
                </p>

                <p>
                    <strong>Resumen del proyecto:</strong> Con el invaluable apoyo de Mocoa desde la base se realizaron brigadas de salud y esterilización a los animales de población afectada 
                    por la avenida torrencial.
                </p>

                <p>
                    <strong>Damnificados:</strong> Animales de población damnificada por la avenida torrencial.
                </p>
                
            
            </div>

            <div class="col m-2">
                <div id="slider4" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                      <li data-target="#slider4" data-slide-to="0" class="active"></li>
                      <li data-target="#slider4" data-slide-to="1"></li>
                    </ol>

                    <div class="carousel-inner" style="width:500px">

                      <div class="carousel-item active">
                        <img class="d-block w-100" src="https://espacio.fundaciontelefonica.com.ar/wp-content/uploads/2015/10/talleres-espacio-1400x600-1400x600.jpg" alt="First slide">
                      </div>

                      <div class="carousel-item">
                        <img class="d-block w-100" src="https://www.gdfe.org.ar/wp-content/uploads/2017/04/a47812_613e2742de93463b94b1f1ee9f010580mv2_d_1800_1800_s_2-1200x675.jpg" alt="Second slide">
                      </div>

                    </div>

                </div>
            </div>

        </div>        



    </div>

</section>



@include('includes.footer')