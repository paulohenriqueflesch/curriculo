<!DOCTYPE html>
<html lang="pt-br">
<?php
    include('locale/texts.php');
    $lang = isset($_GET['lang']) ? $_GET['lang'] : 'pt';
?>
<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Paulo Flesch">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Paulo Flesch, web, Mobile, Consultoria, TI">
    <meta name="description" content="Paulo Flesch - Desenvolvedor de Aplicações Web e Mobile">
    <!-- title -->
    <title>Paulo Flesch - Desenvolvedor de Aplicações Web e Mobile</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png">
    <!-- theme css -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<!-- Body Start -->

<body class="white-theme">
    <!-- page loading -->
    <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>
    <!-- End -->
    <!-- Header -->
    <header class="main-header">
        <nav class="navbar header-nav header-white header-transparent navbar-expand-lg one-page-nav">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <img src="assets/img/paulo.png" title="" alt="">
                </a>
                <!-- / -->
                <!-- Mobile Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-toggle" aria-controls="navbar-collapse-toggle" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- / -->
                <!-- Top Menu -->
                <div class="collapse navbar-collapse justify-content-end" id="navbar-collapse-toggle">
                    <ul class="navbar-nav ml-auto">
                        <li><a class="nav-link" data-scroll-nav="0" href="#home"><span>Home</span></a></li>
                        <li><a class="nav-link" data-scroll-nav="1" href="#about"><span><?=$texts[$lang]['sobre']; ?></span></a></li>
                        <li><a class="nav-link" data-scroll-nav="2" href="#services"><span><?=$texts[$lang]['servicos']; ?></span></a></li>
                        <li><a class="nav-link" data-scroll-nav="4" href="#contactus"><span><?=$texts[$lang]['contato']; ?></span></a></li>
                        <li><a class="nav-link" href="https://github.com/paulohenriqueflesch/curriculo" target="_blank" style="margin-top: -8px;"><img src="assets/img/git.png" /></a></li>
                        <li><a class="nav-link" href="?lang=<?=($lang=='pt')?'en':'pt';?>" style="margin-top: -4px;"><img src="<?= ($lang == 'pt') ? 'assets/img/en.png' : 'assets/img/pt.png';?>" /></a></li>
                    </ul>
                </div>
                <!-- / -->
            </div><!-- Container -->
        </nav> <!-- Navbar -->
    </header>
    <!-- End Header -->
    <!-- Main -->
    <main class="wrapper">
        <!-- Home Section -->
        <section data-scroll-index="0" class="home-section">
            <div class="container">
                <div class="row min-vh-100 align-items-center gy-5">
                    <div class="col-lg-7 pe-lg-5">
                        <div class="home-intro">
                            <h6><?=$texts[$lang]['introducao']; ?></h6>
                            <h2><?=$texts[$lang]['intrText1']; ?> <span class="text-theme"><?=$texts[$lang]['intrText2']; ?></span></h2>
                            <p><?=$texts[$lang]['intrText3']; ?></p>
                            <div class="hs-exp">
                                <div class="exp-box">
                                    <h5>13+</h5>
                                    <span><?=$texts[$lang]['anos']; ?><br /> <?=$texts[$lang]['de_experiencia'] ?></span>
                                </div>
                                <div class="exp-box">
                                    <h5>&#8734;+</h5>
                                    <span><?=$texts[$lang]['projetos']; ?><br /> <?=$texts[$lang]['completos']; ?></span>
                                </div>
                            </div>
                            <div class="btn-bar">
                                <a class="link-effect" href="#about"><?=$texts[$lang]['curriculo']; ?> <i class="bi bi-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="home-image">
                            <img src="assets/img/banner.jpg" title="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Home Section -->
        <!-- About Section -->
        <section data-scroll-index="1" class="section about-section border-top-g">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-md-5 col-xl-4 mx-auto sticky-md-top">
                        <div class="about-img-box">
                            <div class="about-img">
                                <img src="assets/img/pp.jpg" title="" alt="">
                            </div>
                            <div class="nav social-icons justify-content-center">
                                <a class="facebook" href="https://www.facebook.com/paulo.flesch"><i class="fab fa-facebook-f"></i></a>
                                <a class="twitter" href="https://twitter.com/Paulo_Flesch"><i class="fab fa-twitter"></i></a>
                                <a class="instagram" href="https://www.instagram.com/pauloflesch/"><i class="fab fa-instagram"></i></a>
                                <a class="linkedin" href="https://www.linkedin.com/in/paulo-flesch-850046185/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 pt-5 pt-lg-0">
                        <div class="about-text">
                            <div class="about-row">
                                <h3><?=$texts[$lang]['biografia']; ?></h3>
                                <p><?=$texts[$lang]['txtBio']; ?></p>
                            </div>
                            <div class="about-row">
                                <h3><?=$texts[$lang]['educacao']; ?></h3>
                                <div class="row g-4">
                                    <div class="col-6">
                                        <h5><?=$texts[$lang]['curso1']; ?></h5>
                                        <p>Uninter Educacional S/A</p>
                                        <small>2021</small>
                                    </div>
                                    <div class="col-6">
                                        <h5><?=$texts[$lang]['curso2']; ?></h5>
                                        <p>Universidade Feevale</p>
                                        <small>7 <?=$texts[$lang]['semestres']; ?> <?=$texts[$lang]['de']; ?> 8 <?=$texts[$lang]['semestres']; ?></small>
                                    </div>
                                </div>
                            </div>
                            <div class="about-row">
                                <h3><?=$texts[$lang]['experiencia']; ?></h3>
                                <div class="row g-4">
                                    <div class="col-6">
                                        <h5><?=$texts[$lang]['analista_dev']; ?></h5>
                                        <p>MMB it Soluções</p>
                                        <small><?=$texts[$lang]['abril']; ?> 2021 — <?=$texts[$lang]['atual']; ?></small>
                                    </div>
                                    <div class="col-6">
                                        <h5><?=$texts[$lang]['dev_full']; ?></h5>
                                        <p>Smart Data Science</p>
                                        <small><?=$texts[$lang]['marco']; ?> 2021 — <?=$texts[$lang]['abril']; ?> 2021</small>
                                    </div>
                                    <div class="col-6">
                                        <h5><?=$texts[$lang]['analista_dev']; ?></h5>
                                        <p>BEM Informatica</p>
                                        <small><?=$texts[$lang]['janeiro']; ?> 2020 — <?=$texts[$lang]['marco']; ?> 2021</small>
                                    </div>
                                    <div class="col-6">
                                        <h5><?=$texts[$lang]['dev_full_mob']; ?></h5>
                                        <p>Virgoo Sistemas</p>
                                        <small><?=$texts[$lang]['novembro']; ?> 2018 - <?=$texts[$lang]['janeiro']; ?> 2020</small>
                                    </div>
                                    <div class="col-6">
                                        <h5><?=$texts[$lang]['dev_full']; ?></h5>
                                        <p>BVZ</p>
                                        <small><?=$texts[$lang]['janeiro']; ?> 2018 - <?=$texts[$lang]['novembro']; ?> 2018</small>
                                    </div>
                                    <div class="col-6">
                                        <h5><?=$texts[$lang]['dev_front']; ?></h5>
                                        <p>HoldPrint</p>
                                        <small><?=$texts[$lang]['julho']; ?> 2015 - <?=$texts[$lang]['janeiro']; ?> 2018</small>
                                    </div>
                                    <div class="col-6">
                                        <h5><?=$texts[$lang]['dev_full_mob']; ?></h5>
                                        <p>Coffee IT</p>
                                        <small><?=$texts[$lang]['julho']; ?> 2011 - <?=$texts[$lang]['junho']; ?> 2015</small>
                                    </div>
                                    <div class="col-6">
                                        <h5><?=$texts[$lang]['suporte']; ?></h5>
                                        <p>Secullum Softwares</p>
                                        <small><?=$texts[$lang]['outubro']; ?> 2008 - <?=$texts[$lang]['junho']; ?> 2011</small>
                                    </div>
                                </div>
                            </div>
                            <div class="about-row">
                                <div class="row g-4">
                                    <div class="col-6">
                                        <h3><?=$texts[$lang]['competencia']; ?></h3>
                                        <ul>
                                            <li>Oracle APEX</li>
                                            <li>PL/SQL</li>
                                            <li>JET</li>
                                            <li>PHP</li>
                                            <li>React JS</li>
                                            <li>React Native</li>
                                            <li>JQuery</li>
                                            <li>HTML5</li>
                                            <li>CSS3</li>
                                            <li>Xamarin</li>
                                            <li>Wordpress</li>
                                            <li>Magento</li>
                                            <li>UX & Design Thinking</li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <h3><?=$texts[$lang]['ferramentas']; ?></h3>
                                        <ul>
                                            <li>GIT</li>
                                            <li>Visual Studio</li>
                                            <li>AWS</li>
                                            <li>Adobe Photoshop</li>
                                            <li>Azure</li>
                                            <li>Digital Ocean</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->
        <!-- Services Section -->
        <section data-scroll-index="2" class="section services-section border-top-g">
            <div class="container">
                <div class="row justify-content-center section-heading">
                    <div class="col-lg-6 text-center">
                        <h6><span class="text-theme"><?=$texts[$lang]['servicos']; ?></span></h6>
                        <h3><?=$texts[$lang]['txtserv1']; ?></h3>
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01 media">
                            <div class="icon"><i class="bi bi-phone"></i></div>
                            <div class="feature-content col">
                                <h5><?=$texts[$lang]['app_mobile']; ?></h5>
                                <p><?=$texts[$lang]['txt_app_mobile']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01 media">
                            <div class="icon"><i class="bi bi-laptop"></i></div>
                            <div class="feature-content col">
                                <h5><?=$texts[$lang]['soft_custom']; ?></h5>
                                <p><?=$texts[$lang]['text_soft_custom']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01 media">
                            <div class="icon"><i class="bi bi-distribute-vertical"></i></div>
                            <div class="feature-content col">
                                <h5><?=$texts[$lang]['consultoria']; ?></h5>
                                <p><?=$texts[$lang]['text_consultoria']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section -->
        <section data-scroll-index="4" class="section contactus-section border-top-g">
            <div class="container">
                <div class="row justify-content-center section-heading">
                    <div class="col-lg-6 text-center">
                        <h6><span class="text-theme"><?=$texts[$lang]['contato']; ?></span></h6>
                        <h3><?=$texts[$lang]['txtcontato1']; ?></h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <form id="contact-form" method="POST">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="Name" id="name" placeholder="<?=$texts[$lang]['nome']; ?> *" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="Email" id="email" placeholder="E-mail *" class="form-control" type="email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input name="Subject" id="subject" placeholder="<?=$texts[$lang]['assunto']; ?> *" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" placeholder="<?=$texts[$lang]['sua_mensagem']; ?> *" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="send">
                                            <button class="link-effect" type="button" value="Send" onclick="send_mail()"> <?=$texts[$lang]['enviar_mensagem']; ?> <i class="bi bi-arrow-up-right"></i></button>
                                            <span id="suce_message" class="text-success" style="display: none">Mensagem enviada com sucesso</span>
                                            <span id="err_message" class="text-danger" style="display: none">Mensagem com falha</span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row gy-4 text-center justify-content-center contact-info">
                    <div class="col-md-4">
                        <div class="contact-name">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h5><?=$texts[$lang]['visite']; ?></h5>
                            <p>Rua Paraíba, 110 - Ap.: 11 <br>Novo Hamburgo - RS</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-name">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <h5>E-mail</h5>
                            <p>paulo.flesch@gmail.com<br><?=$texts[$lang]['seg_ate_sex']; ?> (08:00 – 18:00)</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-name">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h5>Fone</h5>
                            <p>+55 51 997597227<br></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
        <!-- Effect -->
        <div class="right-effects"></div>
        <div class="left-effects"></div>
        <!-- End Effect -->
    </main>
    <!-- Main -->
    <!-- Footer -->
    <footer class="footer white py-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 py-2">
                    <div class="nav justify-content-center justify-content-md-start">
                        <a href="https://www.facebook.com/paulo.flesch"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/Paulo_Flesch"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/pauloflesch/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/paulo-flesch-850046185/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 py-2 text-center text-md-end">
                    <p class="m-0">© 2021 P. Flesch Consultoria em Ti LTDA - 44.074.898/0001-18.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/vendor/appear/jquery.appear.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/one-page/scrollIt.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/mail_send.js"></script>
    <!-- end -->
</body>
<!-- Body End -->
</html>