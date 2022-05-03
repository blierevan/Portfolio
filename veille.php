<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Portfolio Evan Blier</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Blier Evan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.html#apropos">A propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#competence">Compétences</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#projet">Projets</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#about">Parcour</a></li>
                    <li class="nav-item"><a class="nav-link" href="veille.php">Veille</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="page-section bg-light" id="apropos">
        <div class="container">
            <div class="text-center">
            <br><br><br>
                <h2 class="section-heading text-uppercase">WEB 3.0</h2>
                <br>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large ">Le Web 3 ou le Web 3.0 est la nouvelle génération d’internet. Le contrôle du web est remis entre les mains des utilisateurs. 
                        La distinction est créée par des technologies émergentes telles que la blockchain.
                         Lorsque nous communiquons via Internet, des copies de nos données sont créées et conservées sur 
                        les serveurs d'entreprises telles que Google ou Facebook, et nous perdons ainsi le contrôle de nos données. 
                        Le fait que nos informations soient détenues par des tiers n'est pas en soi une chose négative ; néanmoins, 
                        lorsqu'une seule entreprise assure la médiation de l'ensemble du processus, les choses peuvent mal tourner.</p>

                </div>
            </div>
        </div>
    </section>
    <section class="page-section bg-light" id="apropos">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center">
                    <br><br><br><br>
                    <h3 class="section-heading text-uppercase">Source Google Alerts</h3>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row py-5">
                                <div class="col-lg-4">
                                    <figure class="rounded p-3 bg-white shadow-sm">
                                        <div class="img-fluid2">
                                            <img src="assets/img/portfolio/web3.png" alt="" class="w-100 card-img-bottom">
                                        </div>
                                        <figcaption class="p-4 card-img-bottom">
                                            <h5 class="h5 font-weight-bold mb-2 font-italic">Le Web 3.0, un outil de la parfaite transparence des informations ?</h5><br>
                                            <a class="btn btn-primary btn-xl text-uppercase" target="_blank" href="https://www.zonebourse.com/actualite-bourse/Episode-12-Le-Web-3-0-un-outil-de-la-parfaite-transparence-des-informations---40247475/">Article</a>

                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-lg-4">
                                    <figure class="rounded p-3 bg-white shadow-sm">
                                        <div class="img-fluid2">
                                            <img src="assets/img/portfolio/meta.png" alt="" class="w-100 card-img-top">
                                        </div>
                                        <figcaption class="p-4 card-img-bottom">
                                            <h5 class="h5 font-weight-bold mb-2 font-italic">Construire un écosystème multichaîne pour accélérer la vision du métaverse</h5>
                                            <a class="btn btn-primary btn-xl text-uppercase" target="_blank" href="https://fr.techtribune.net/web3/construire-un-ecosysteme-multichaine-pour-accelerer-la-vision-du-metaverse/306480/">Article</a>

                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-lg-4">
                                    <figure class="rounded p-3 bg-white shadow-sm">
                                        <div class="img-fluid2">
                                            <img src="assets/img/portfolio/web3-.png" alt="" class="w-100 card-img-top">
                                        </div>
                                        <figcaption class="p-4 card-img-bottom">
                                            <h5 class="h5 font-weight-bold mb-2 font-italic">Web3 : révolution ou illusion ?</h5><br><br>
                                            <a class="btn btn-primary btn-xl text-uppercase" target="_blank" href="https://bigmedia.bpifrance.fr/news/web3-revolution-ou-illusion">Article</a>

                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section bg-light" id="apropos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <?php
                                echo "<h3>Source par FLUX RSS</h3><br>";
                                echo "<h4 style='padding:0px 20px;'>Journal du coin</h4>";
                                $url = "https://journalducoin.com/tag/web-3/feed/"; 
                                $rss = simplexml_load_file($url);
                                echo '<ul>';
                                foreach ($rss->channel->item as $item){
                                $datetime = date_create($item->pubDate);
                                $date = date_format($datetime, 'd M Y, H\hi');
                                echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
                                }
                                echo '</ul>';


                                echo "<h4 style='padding:0px 20px;'>We Demain</h4>";
                                $url2 = "https://www.wedemain.fr/dechiffrer/metaverse-de-quoi-sagit-il-et-faut-il-sy-interesser/feed/"; 
                                $rss = simplexml_load_file($url2);
                                echo '<ul>';

                                foreach ($rss->channel->item as $item){
                                $datetime = date_create($item->pubDate);
                                $date = date_format($datetime, 'd M Y, H\hi');
                                echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
                                }
                                echo '</ul>';

                                ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted"></p>

                </div>
            </div>
        </div>
    </section>
    <footer class="footer py-4 ">
        <div class="container ">
            <div class="row align-items-center ">
                <div class="col-lg-4 text-lg-start ">Copyright &copy; Template Bootstrap 2022</div>
                <div class="col-lg-4 my-3 my-lg-0 ">
                    <a class="btn btn-dark btn-social mx-2 " href="mailto:blier.evan@gmail.com" aria-label="Email"><i class="fa fa-envelope "></i></a>
                    <a class="btn btn-dark btn-social mx-2 " href="https://github.com/blierevan" aria-label="Github"><i class="fab fa-github "></i></a>
                    <a class="btn btn-dark btn-social mx-2 " href="https://www.linkedin.com/in/evan-blier-07843822b/" aria-label="LinkedIn "><i class="fab fa-linkedin-in "></i></a>
                    <a class="btn btn-dark btn-social mx-2 " href="tel:+33640081509" aria-label="téléphone"><i class="fa fa-phone "></i></a>
                </div>
                <div class="col-lg-4 text-lg-end ">
                    <a class="link-dark text-decoration-none me-3 " href="infolegale.html">Info légale</a>
                </div>
            </div>
        </div>
    </footer>
                <!-- Bootstrap core JS-->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                <!-- Core theme JS-->
                <script src="js/scripts.js"></script>
                <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                <!-- * *                               SB Forms JS                               * *-->
                <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
                <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>