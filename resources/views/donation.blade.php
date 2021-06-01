@include('includes.header')

<div class="container" style="margin-bottom: 150px">

    <section id="donar" style="height: 65vh">

        <h2>Colaborar con nuestra causa</h2>

            <div class="mt-5 p-4" style="background-color: rgba(230, 130, 8, 0.034)">

                <p>
                    Si querés apoyarnos podés realizar una donación mediante nuestro botón de PayPal!
                <p>
                    Cualquiera sea la suma que puedas aportar es de mucha utilidad para nosotros y nos ayuda a continuar realizando nuestra labor.
                </p>
            
                <div class="pt-4 pb-2 d-flex justify-content-center">

                    <form action="https://www.paypal.com/donate" method="post" target="_top">
                        <input type="hidden" name="hosted_button_id" value="9V76PBVCFUF4C" />
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                        <img alt="" border="0" src="https://www.paypal.com/en_CO/i/scr/pixel.gif" width="1" height="1" />
                    </form>

                </div>

            </div>

            <div class="d-flex justify-content-center" style="margin-top:150px">
                <h2>Muchas Gracias!</h2>
            </div>

    </section>

</div>

@include('includes.footer')