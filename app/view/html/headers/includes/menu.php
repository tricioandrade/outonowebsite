<?php
use app\controller\global\consts;
?>
<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
        <div class="col">
            <div class="contact-info mr-auto">
                <i class="icofont-envelope"></i>
                <a href="mailto:geral@outono.ao">geral@outono.ao</a>
                <i class="icofont-phone"></i> 
                <a href="tel:+244928347743">+244 928 347 743</a>
            </div>
        </div>
        <div class="col">
            <div class="social-links float-end">
                <a href="https://twitter.com/cpsupport" target="_blank" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="https://facebook.com/cpsupport" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="https://instagram.com/cpsupport" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="https://linkedin.com/cpsupport" target="_blank" class="linkedin"><i class="icofont-linkedin"></i></i></a>
            </div>
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand col" href="#"><img src="<?php echo outonologo;?>" alt="" style="width: 100px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-toggler"></i>
            </button>
            <div class="collapse navbar-collapse col" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-home"></i>&nbsp;Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><i class="fa fa-question-circle"></i>&nbsp;Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team"><i class="fa fa-users"></i>&nbsp;Equipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><i class="fa fa-phone-alt"></i>&nbsp;Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-shopping-bag"></i>&nbsp;Encomendar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header><!-- End Header -->