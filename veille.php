<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Portfolio</title>
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
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Veille Techologique</div>
        </div>
    </header>
    <section class="page-section bg-light" id="apropos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <?php
                                echo "<h1 style='text-align:center;'>FLUX RSS</h1>";
                                echo "<h1 style='padding:0px 20px;'>L'informaticien</h1>";
                                $url = "https://www.ladn.eu/tech-a-suivre/le-web3-ils-le-detestent-deja/feed/"; 
                                $rss = simplexml_load_file($url);
                                echo '<ul>';
                                foreach ($rss->channel->item as $item){
                                $datetime = date_create($item->pubDate);
                                $date = date_format($datetime, 'd M Y, H\hi');
                                echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
                                }
                                echo '</ul>';

                                echo "<h1 style='padding:0px 20px;'>Anssi</h1>";
                                $url2 = "https://www.ssi.gouv.fr/feed/actualite/"; 
                                $rss = simplexml_load_file($url2);
                                echo '<ul>';

                                foreach ($rss->channel->item as $item){
                                $datetime = date_create($item->pubDate);
                                $date = date_format($datetime, 'd M Y, H\hi');
                                echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
                                }
                                echo '</ul>';

                                echo "<h1 style='padding:0px 20px;'>Anssi Menaces / Incidents</h1>";
                                $url2 = "https://www.cert.ssi.gouv.fr/cti/feed/"; 
                                $rss = simplexml_load_file($url2);
                                echo '<ul>';

                                foreach ($rss->channel->item as $item){
                                $datetime = date_create($item->pubDate);
                                $date = date_format($datetime, 'd M Y, H\hi');
                                echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
                                }
                                echo '</ul>';
                                echo "<h1 style='padding:0px 20px;'>Anssi Alerte</h1>";
                                $url2 = "https://www.cert.ssi.gouv.fr/alerte/feed/"; 
                                $rss = simplexml_load_file($url2);
                                echo '<ul>';

                                foreach ($rss->channel->item as $item){
                                $datetime = date_create($item->pubDate);
                                $date = date_format($datetime, 'd M Y, H\hi');
                                echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
                                }
                                echo '</ul>';

                                echo "<h1 style='padding:0px 20px;'>Anssi Générale</h1>";
                                $url2 = "https://www.cert.ssi.gouv.fr/feed/"; 
                                $rss = simplexml_load_file($url2);
                                echo '<ul>';

                                foreach ($rss->channel->item as $item){
                                $datetime = date_create($item->pubDate);
                                $date = date_format($datetime, 'd M Y, H\hi');
                                echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
                                }
                                echo '</ul>';

                                echo "<h1 style='padding:0px 20px;'>NIST NVD</h1>";
                                $url2 = "https://www.nist.gov/news-events/cybersecurity/rss.xml"; 
                                $rss = simplexml_load_file($url2);
                                echo '<ul>';

                                foreach ($rss->channel->item as $item){
                                $datetime = date_create($item->pubDate);
                                $date = date_format($datetime, 'd M Y, H\hi');
                                echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
                                }
                                echo '</ul>';

                                echo "<h1 style='padding:0px 20px;'>MalwareBytes RSS</h1>";
                                $url2 = "https://blog.malwarebytes.com/feed/"; 
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
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
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