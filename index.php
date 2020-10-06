<!doctype html>
<html lang="en">
<head>

    <!-- description, title, tags, keywords -->
    <meta name="description" content="">
    <meta name="keywords" content="boulangerie bio Strasbourg, pain au levain, pain bio Schiltigheim, pain au levain Schiltigheim, pain bio Strasbourg, pain au levain Strasbourg, pain bio Illkirch Graffenstaden, pain au levain Illkirch Graffenstaden">
    <meta name="title" content="Pain Noir - Pain Blanc - Boulangerie bio au levain">
        
    <!-- thumbnail image -->
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="100%" />
    <meta property="og:image:height" content="100%" />
    <meta property="og:type" content="website" /> 
    <meta property="og:url" content="https://painnoir-painblanc.fr/index.php" />
    <meta property="og:title" content="" /> 
    <meta property="og:description" content="" /> 

    <!-- language tags -->
    <link rel="alternate" hreflang="fr" href="index.php" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="font-awesome/css/all.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="CSS/bootstrap.css">

    <!-- Personal style sheet -->
    <link rel="stylesheet" href="CSS/style.css">

    <!-- Favicon -->
    <link rel="icon" href="LOGO/favicon_io/favicon-16x16.png">

    <title>Boulangerie Bio au levain</title>
</head>
<body>


<?php include ("header.php");?>
    

<main id="accueil">

    <!------------------------- CAROUSEL --------------------------------------------------------------->

    <section id="showcase">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="images/ACCUEIL/IMG1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="images/ACCUEIL/IMG2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="images/ACCUEIL/IMG3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </section>

    <!------------------------------- INTRO ------------------------------------------------------------>

    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="body col-11 col-md-9 mx-auto">
                    <div class="body__heading mx-auto text-center">
                        <div class="body__heading--title pt-3">
                            <h2>La boulangerie</h2>
                        </div>
                    </div>
                    <div class="intro px-4 px-md-5">
                        <p class="py-5 mb-0 text-justify">
                            La boulangerie <span>Pain noir - Pain blanc</span> fabrique des pains et des viennoiseries au levain avec des farines issues de l'agriculture paysanne
                            et biologique. La vente est proposée à Schiltigheim dans la boutique du fournil, mais aussi sur les marchés de l'Eurométropole ainsi qu'en
                            dépôt dans les magasins d'alimentation biologique autour de Strasbourg. Un service de vente en entreprises et en collectivités est également
                            prévu.
                        </p>
                        <div class="row  px-2 intro__img">
                            <div class="col-12 col-md-4 px-1 py-2 py-md-0">
                                <img src="images/ACCUEIL/IMG4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-12 col-md-4 px-1 py-2 py-md-0">
                                <img src="images/ACCUEIL/IMG5.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-12 col-md-4 px-1 py-2 py-md-0">
                                 <img src="images/ACCUEIL/IMG6.jpg" class="img-fluid" alt="">
                             </div>
                        </div>
                        <p class="py-5 text-justify">
                            La boulangerie <span>Pain noir - Pain blanc</span> est une société par actions simplifiée (SAS) qui a pour objectif d'évoluer vers un fonctionnement coopératif. 
                            Cela signifie que nous travaillons à dépasser les spécialisations pour arriver à l'organisation du travail la plus horizontale possible en termes 
                            de décisions, de production, de vente et de gestion.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</main>


<?php include ("footer.php");?>
