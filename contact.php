<?php include ("header.php");?>
    

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
                            <form class="pb-5" action="contactform.php" method="post">
                                <label for="InputName" class="text-lg-right mb-1 py-2">Nom complet</label>
                                <input type="text" name="name" class="form-control" id="InputName" placeholder="Entrez votre nom complet" required oninvalid="this.setCustomValidity('Ce champ est obligatoire')">
                                
                                <label for="InputEmail" class="mb-2 text-lg-right py-2">Adresse email</label>
                                <input type="email" name="mail" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Entrez votre email" required oninvalid="this.setCustomValidity('Ce champ est obligatoire')">
                                <small id="emailHelp" class="form-text text-muted">Nous nous engageons à ne pas diffuser votre email.</small>
                                
                                <label for="InputSubject" class="text-lg-right mb-1 py-2">Objet</label>
                                <input type="text" name="subject" class="form-control" id="InputSubject"  placeholder="Objet" required oninvalid="this.setCustomValidity('Ce champ est obligatoire')">
                                <div class="dropdown py-2">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Objet
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button name="prisedecontact" class="dropdown-item" type="button">Prise de contact</button>
                                        <button name="reservation" class="dropdown-item" type="button">Réservation</button>
                                    </div>
                                </div>
                                <label for="InputMessage" class="text-lg-right mt-2">Message</label>
                                <textarea name="message" class="form-control text-muted" cols="30" rows="6" required oninvalid="this.setCustomValidity('Ce champ est obligatoire')">Message</textarea>
                                <label for="submit" class="text-lg-right mt-2"></label>
                                <button type="submit" name="submit" class="btn btn-warning btn-lg mx-auto">Envoyer un email!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include ("footer.php");?>
