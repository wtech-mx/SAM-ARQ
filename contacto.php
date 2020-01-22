    <?php 
    include("home.php");
 ?>
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_2">
        <h3>Contactanos</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    
                <iframe style="width:100%;height:300px;border-radius: 10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.3673283976223!2d-99.1717555850939!3d19.39652858690482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff6d61843241%3A0x566b60c505a3ae8e!2sAv.%20Divisi%C3%B3n%20del%20Nte.%20213%2C%20Col%20del%20Valle%20Nte%2C%20Benito%20Ju%C3%A1rez%2C%2003103%20Del%20Valle%20Nte%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1573190921720!5m2!1ses-419!2smx"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
    
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Ponte en contacto</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="cp" id="cp" type="cp" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter cp'" placeholder="Codigo Postal">
                                    </div>
                                </div>                               
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Asunto">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Emviar</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Direccion</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>55 49 89 32 69</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>samm.arquitectura@hotmail.com</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->

      <?php 
    include("footer.php");
    ?>
