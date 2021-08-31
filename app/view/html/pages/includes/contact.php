<section id="contact" class="contact">
     <div class="container-fluid">
         <div class="row">
            <div class="col col-lg-4 col-sm-12 col-md-4">
                <h4 class="title">Entre em contacto</h4>
                <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
            <div class="row col col-lg-8 col-md-4  align-items-start">
                <div class="col  info-box text-center">
                    <span class="circle"><i class="fa fa-map"></i></span>
                    <h3>Endereço</h3>
                    <p>Av. Deolinda Rodrigues</p>
                </div>
                <div class="col  info-box text-center">
                    <span class="circle"><i class="fa fa-envelope"></i></span>
                    <h3>Email</h3>
                    <p>geral@outono.ao</p>
                </div>
                <div class="col float-end info-box text-center">
                    <span class="circle"><i class="fa fa-phone-alt"></i></span>
                    <h3>Ligue</h3>
                    <p>+244 928 347 743</p>
                </div>
                <div class="col-12 shadow">
                    <form action="forms/contact.php" method="post" role="form">
                        <div class="form-row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button></div>
                    </form>
                </div>
         </div>
     </div>
</section>