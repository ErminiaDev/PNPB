<?php include ("header.php");
?>



<main>

    <section class="jumbo-image"></section>


    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="body col-9 mx-auto">
                    <div class="body__heading mx-auto text-center">
                        <div class="body__heading--title pt-3">
                            <h2>Contact</h2>
                        </div>
                    </div>
                    
                    <div class="row d-flex form-group align-items-center justify-content-center">
                        <div class="col-lg-10 p-5 mx-auto">
                            <p><i>Pour toute demande de renseignement, merci de renseigner les champs ci-dessous. Pour une réservation de pains et viennoiseries, merci de choisir le champ correspondant dans la case "Objet".</i></p>
                            <form class="pb-5" action="contactform.php" method="post">

                                <!-- DROPDOWN BUTTON SOLUTION -->

                                <div class="dropdown pb-3 py-2 text-black">
                                    <label for="dropdownMenu1" class="mb-1 py-2 d-block"><span class="cap">O</span>bjet</label>
                                    <button class="ml-2 btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       -- spécifier l'objet --
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <button type="button" id="firstContact" name="contact" class="dropdown-item py-2" href="#firstContact">Prise de contact</button>
                                        <button type="button" id="reservation" name="reservation" class="dropdown-item py-2" href="#reservation">Réservation</button>
                                    </div>
                                </div>

                                <!-- RADIO BUTTON SOLUTION                 -->

                                <!-- <label for="firstcontact" class="mb-1 py-2">Prise de Contact</label>
                                <input type="radio" id="firstContact" value="contact" name="typeOfContact" class="dropdown-item py-2" href="#firstContact">
                                <label for="reservation" class="mb-1 py-2">Réservation</label>
                                <input type="radio" id="reservation" value="reservation" name="typeOfContact" class="dropdown-item py-2" href="#reservation"> -->

                                <!-- DROPDOWN <a> SOLUTION -->

                                <!-- <div class="pb-2 dropdown py-2">
                                    <label for="dropdownMenu1" class="mb-1 py-2 d-block"><span class="cap">O</span>bjet</label>
                                    <select class="ml-2 btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" required oninvalid="this.setCustomValidity('Ce champ est obligatoire')">
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1"><i class="fas fa-sort-down"></i>
                                            <option value ="" name="Objet" disabled selected class="dropdown-item my-2" type="button">-- spécifier l'objet --</option>
                                            <option id="firstContact" value ="prisedecontact" name="contact" class="dropdown-item py-2" type="button">Prise de contact</option>
                                            <option id="reservation" value ="reservation" name="reservation" class="dropdown-item py-2" type="button">Réservation</option>
                                        </div>$message = "contact is selected";
        echo "<script type='text/javascript'>alert('$message');</script>";

                                    </select>
                                </div> -->
                                <small id="reservationSpec" class="ml-2 mb-2 form-text text-danger">Comme nous travaillons sur des fermentations longues, pensez à faire votre réservation au moins <span>48h</span> à l'avance afin que nous puissions l'intégrer dans notre production. Au-delà de cette période, nous serons pas en mesure de vous garantir la disponibilité des produits que vous souhaitez.</small>

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

                                <label for="submit" class="mt-2"></label>
                                <input type="submit" name="submit" value="Envoyer un email!"class="ml-1 my-4 btn btn-warning">
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
