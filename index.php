
<?php include ("header.php");?>
    

<main id="accueil">

    <!------------------------- CAROUSEL --------------------------------------------------------------->

    <section id="showcase">
    <!-- data-ride is used to mark a carousel as animated starting on page load -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- indicators are the little dots at the bottom of the slide which indicates how many slides there are and where they are at -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
        <!-- carousel-image classes will be used to put the background image -->
        <div class="carousel-item carousel-image carousel-image-1 active">
        </div>
        <div class="carousel-item carousel-image carousel-image-2">
        </div>
        <div class="carousel-item carousel-image carousel-image-3">
        </div>
        </div>
        <!-- carousel previous arrow -->
        <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon"></span>
        </a>
        <!-- carousel next arrow -->
        <a href="#myCarousel" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    </section>

    <!------------------------------- INTRO ------------------------------------------------------------>

    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="body col-9 mx-auto">
                    <div class="body__heading mx-auto text-center">
                        <div class="body__heading--title pt-3">
                            <h2>La boulangerie</h2>
                        </div>
                    </div>
                    <div class="intro px-5">
                        <p class="py-5 mb-0 text-justify">
                            La boulangerie <span>Pain noir - Pain blanc</span> fabrique des pains et des viennoiseries au levain avec des farines issues de l'agriculture paysanne
                            et biologique. La vente est proposée à Schiltigheim dans la boutique du fournil, mais aussi sur les marchés de l'Eurométropole ainsi qu'en
                            dépôt dans les magasins d'alimentation biologique autour de Strasbourg. Un service de vente en entreprises et en collectivités est également
                            prévu.
                        </p>
                        <div class="row  px-2 intro__img">
                            <div class="col-4 px-1">
                                <img src="https://images.unsplash.com/photo-1550599112-0c21a831f6b9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="img-fluid" alt="">
                            </div>
                            <div class="col-4 px-1">
                                <img src="images/cropped/img-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-4 px-1">
                                 <img src="https://images.unsplash.com/photo-1545283425-f5cb1ca33cd6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="img-fluid" alt="">
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
