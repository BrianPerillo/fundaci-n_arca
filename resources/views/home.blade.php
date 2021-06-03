@include('includes.header')
  
<div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel" style="width:80%;margin:auto">

    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style="width:50px; height: 8px"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1" style="width:50px; height: 8px"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2" style="width:50px; height: 8px"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3" style="width:50px; height: 8px"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4" style="width:50px; height: 8px"></li>
    </ol>

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img class="d-block w-100"  style="max-height:800px" src="{{asset('imgs/slider/5.jpg')}}" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100"  style="max-height:800px" src="{{asset('imgs/slider/2.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100"  style="max-height:800px" src="{{asset('imgs/slider/1.jpg')}}" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100"  style="max-height:800px" src="{{asset('imgs/slider/3.jpg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100"  style="max-height:800px" src="{{asset('imgs/slider/4.jpg')}}" alt="Third slide">
        </div>

    </div>
    
</div>



{{-- <div class="slider">
    <div><img src="https://espacio.fundaciontelefonica.com.ar/wp-content/uploads/2015/10/talleres-espacio-1400x600-1400x600.jpg" alt=""></div>
    <div><img src="https://www.gdfe.org.ar/wp-content/uploads/2017/04/a47812_613e2742de93463b94b1f1ee9f010580mv2_d_1800_1800_s_2-1200x675.jpg" alt=""></div>
</div> --}}


<section id="about_us" style="margin-top:50px">

    <div class="container" style="margin-bottom:10px">
        <h2 style="text-align: center;font-size:60px;color:grey">Fundación Arca</h2>

        <div style="margin-top:70px;text-align: center;">
            <a href="#nosotros">
                <span id="arrow">
                    <i class="fas fa-arrow-down fa-4x"></i>
                </span>
            </a>
        </div>
    </div>


        
    <div class="">

        <article id="nosotros" class="pt-5">
            <div class="container content">
                <h2>Quienes Somos?</h2>
                <div class="row">
                    <div class="col p-5">
                        <p class="mt-2">
                            Somos una organización sin ánimo de lucro que viene desarrollando una labor social desde hace 9 años beneficiando a comunidades a través 
                            de líneas estratégicas enfocadas en Salud, educación y medio ambiente que buscan transformar la forma de cohabitar en armonía con el planeta.
                        </p>  
                    </div>                  
                </div>
            </div>
        </article>

         <article id="mision" class="">
            <div class="container content">
                <div class="row">
                    <div class="col p-5" style="display: flex;align-items: center;justify-content: center;">
                        <span style="text-align:center;background-color: rgba(255, 255, 255, 0.178);display:inline-block;border-radius:100px">
                            <i class="fas fa-user-friends fa-8x" style="color:orange"></i>     
                        </span>
                    </div>
                    <div class="col p-5">
                        <h2>Misión</h2>
                        <p class="mt-5">
                            La Fundación ARCA busca transformar la forma de relacionarnos y cohabitar con otras formas de vida a través de iniciativas de carácter 
                            social, ambiental y de investigación que permitan mejorar la calidad de vida de las comunidades.
                        </p>  
                    </div>                  
                </div>
            </div>
         </article>

        <article id="vision" class="">
             <div class="container content">
                <div class="row">
                    <div class="col p-5">
                        <h2>Visión</h2>
                        <p class="mt-5">
                            Seguir trabajando y transformando nuestro entorno a través de  programas de atención integral a los animales y comunidades vulnerables
                            generando credibilidad y confianza sustentada en la responsabilidad y transparencia de nuestras acciones.
                        </p>  
                    </div>   
                    <div class="col p-5" style="display: flex;align-items: center;justify-content: center;">
                        <span style="text-align:center;background-color: rgba(255, 255, 255, 0.178);display:inline-block;border-radius:100px">
                            <i class="fas fa-star fa-8x" style="color:orange;margin-top:30px"></i>
                        </span>
                    </div>
               
                </div>
            </div>
        </article>

        <article id="valores" class="">
            <div class="container content">
               <div class="row">
                   <div class="col p-5" style="display: flex;align-items: center;justify-content: center;">
                       <span style="text-align:center;background-color: rgba(255, 255, 255, 0.178);display:inline-block;border-radius:100px">
                           <i class="fas fa-heart fa-8x" style="color:orange;margin-top:30px"></i>
                       </span>
                   </div>
                   <div class="col p-5">
                    <h2>Valores</h2>
                       <p class="mt-5">
                            Responsabilidad, Compromiso, Respeto, Honestidad, Servicio.
                       </p>  
                   </div>                  
               </div>
           </div>
       </article>

</section>

<section id="contacto" style="background-color:rgba(223, 223, 223, 0.438)">
    
    <div class="container">

        <div class="row">
            {{-- <div class="col p-4">
                <h3>Estar al día</h3>
                <div class="p-5">
                    <p>Suscribite a nuestro boletín</p>
                    <form  action="">
                        <div class="form-group" >
                            <input class="form-control" style="height:60px" type="text" name="" id="" placeholder="Escriba su correo aquí">
                        </div>
                    </form>
                </div>
            </div> --}}

            <div class="col p-4">
                <h3>Contacto</h3>
                <div class="p-5">
                <p>Para obtener mayor información comuníquese</p>
                    <form  action="">
                        <div class="form-group">
                            <div class="mb-4">
                                <input class="form-control" style="height:60px" type="text" name="" id="" placeholder="Nombre">
                            </div>
                            <div class="mb-4">
                                <input class="form-control" style="height:60px" type="text" name="" id="" placeholder="Asunto">
                            </div>
                            <div class="">
                                <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</section>



@include('includes.footer')