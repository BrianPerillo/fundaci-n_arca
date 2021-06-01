
<footer class="col-md-12 site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">
            Somos una organización sin ánimo de lucro que viene desarrollando una labor social desde hace 9 años beneficiando a comunidades a través de líneas estratégicas 
            enfocadas en Salud, educación y medio ambiente que buscan transformar la forma de cohabitar en armonía con el planeta.
          </p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6></h6>
          <ul class="footer-links">

          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Links</h6>
          <ul class="footer-links">
            <li><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="#nosotros">Nosotros</a></li>
            <li><a href="{{ route('noticias') }}">Noticias</a></li>
            <li><a href="{{ route('proyectos') }}">Proyectos</a></li>
            <li><a href="{{ route('lineas_accion') }}">Lineas De Acción</a></li>
            <li><a href="{{ route('donation') }}">Donar</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">
            Sitio realizado por Brian Emiliano Perillo
          </p>
          <br>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="d-flex justify-content-center">
        <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
          Fundación Arca
        </p>
      </div>

    </div>
</footer>


  <!-- Scripts -->
    <!-- JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Slick para Slider y Carousell -->
    <script type="text/javascript" src="{{ asset('js/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/slick.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/slider.js')}}"></script>
    <!-- Scroll Magic -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>

    <!-- Main -->
    <script type="text/javascript" src="{{ asset('js/main.js')}}"></script>


</body>

</html>