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

    <!-- Font awesome -->
    <link rel="stylesheet" href="font-awesome/css/all.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Personal style sheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link rel="icon" href="LOGO/favicon_io/favicon-16x16.png">

    <title>Contact et Réservation</title>
</head>
<body>


<?php include ("header.php");
?>



<main>

    <section id="jumbo-image-4">
        <img class="d-block w-100 img-fluid" src="images/CONTACT/IMG1.jpg" alt="Second slide">
    </section>


    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="body col-11 col-md-9 mx-auto">
                    <div class="body__heading mx-auto text-center">
                        <div class="body__heading--title pt-3">
                            <h2>Contact</h2>
                        </div>
                    </div>
                    
                    <div class="row d-flex form-group align-items-center justify-content-center">
                        <div class="col-12 col-lg-10 p-5 mx-auto">
                            <p><i>Pour toute demande de renseignement, merci de renseigner les champs ci-dessous. Pour une réservation de pains et viennoiseries, merci de choisir le champ correspondant dans la case "Objet".</i></p>
                            <form class="pb-5" action="contactform.php" method="post">

                                <div class="d-block">
                                    <label for="firstcontact" class="mb-1 py-2">Prise de Contact</label>
                                    <input type="radio" id="firstContact" value="contact" name="typeOfContact" class="ml-2" href="#firstContact">
                                </div>
                                <div class="d-block">
                                    <label for="reservation" class="mb-1 py-2">Réservation</label>
                                    <input type="radio" id="reservation" value="reservation" name="typeOfContact" class=" ml-2" href="#reservation">
                                </div>
                                
                                <small id="reservationSpec" class="ml-2 mb-2 form-text text-danger">Comme nous travaillons sur des fermentations longues, pensez à faire votre réservation au moins <span>72h</span> à l'avance afin que nous puissions l'intégrer dans notre production. Au-delà de cette période, nous serons pas en mesure de vous garantir la disponibilité des produits que vous souhaitez.</small>

                                <label for="InputName" class="mb-1 py-2"><span class="cap">N</span>om complet</label>
                                <input type="text" name="fullName" class="ml-2 mb-2 form-control" id="InputName" placeholder="Entrez votre nom complet">

                                <label for="InputCompany" class="mb-1 py-2"><span class="cap">S</span>tructure</label>
                                <input type="text" name="companyName" class="ml-2 mb-2 form-control" id="InputCompany" placeholder="Entrez le nom de votre structure">

                                <label id="numberLabel" for="InputNumber" class="mb-1 py-2"><span class="cap">N</span>uméro de téléphone</label>
                                <input id="numberInput" type="tel" name="tel" class="ml-2 mb-2 form-control" id="InputNumber" placeholder="Entrez votre numéro de téléphone">

                                <label for="InputEmail" class="mb-1 py-2"><span class="cap">A</span>dresse email</label>
                                <input type="email" name="mail" class="ml-2 mb-2 form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Entrez votre email" >
                                <small id="emailHelp" class="ml-2 mb-2 form-text text-muted">Nous nous engageons à ne pas diffuser votre email.</small>                                

                                <label for="InputMessage" class="mt-2"><span class="cap">M</span>essage</label>
                                <textarea name="message" class="ml-2 form-control text-muted" cols="30" rows="6" placeholder="Message"></textarea>

                                <!-- <small id="reservationConf" class="ml-2 mb-2 form-text text-danger">Nous accusons toujours réception de vos demandes de réservation. Si vous n'avez pas de retour de notre part dans les 48h, merci d'envoyer directement votre demande à contact@painnoir-painblanc.fr ou de téléphoner au 06.10.80.98.21</small> -->

                                <label for="submit" class="mt-2"></label>
                                <input type="submit" name="submit" value="Envoyer un email!"class="ml-1 my-4 btn btn-submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include ("footer.php");
?>
