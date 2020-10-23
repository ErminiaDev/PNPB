<footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="d-none d-md-block col-md-6 py-5 text-right">
                    <img src="LOGO/ecriture-blanc.png" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="text-left pl-4">
                        <img src="LOGO/pnpb-titre.png" alt="Pain noir - Pain blanc" class="img-fluid pb-3">
                        <p class="footer__address">17 rue de Lauterbourg - <span class="footer__address--city">Schiltigheim</span></p>
                        <p class="footer__phone">06.10.80.98.21</p>
                        <p class="footer__link--social">
                            <!-- <i class="fab fa-instagram pr-2"></i> -->
                            <a target="_blank" href="https://www.facebook.com/Pain-Noir-Pain-Blanc-103733297855177/"><i class="fab fa-facebook-square pl-2"></i></a>
                        </p>
                        <p class="footer__link pt-2 mb-1"><a href="mentionslegales.php">Mentions légales</a></p>
                        <p class="footer__link"><a href="credits.php">Crédits</a></p>
                        <p class="footer__developer pt-3 m-0">logo et graphisme par&nbsp;&nbsp;<a href="https://helenethiennot.wixsite.com/helenethiennot" target="_blank"><b>Hélène Thiennot&nbsp;</b></a></p>
                        <p class="footer__developer pt-3 m-0">site créé par&nbsp;&nbsp;<a href="https://erminiadev.com" target="_blank"><span class="footer__developer--name">Erminia Dev&nbsp;</span></a>&copy; <span class="footer__developer--year"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    
    <!-- Live reload plugin .js -->
    <script type="text/javascript" src="http://localhost:35729/livereload.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascript/accordion.js"></script>
    <script type="text/javascript" src="javascript/gallery.js"></script>
    <script type="text/javascript" src="javascript/contact.js"></script>
    <script type="text/javascript" src="javascript/backtotop.js"></script>
    <script>
    // Get the current year for the copyright
    $('.footer__developer--year').text(new Date().getFullYear());

    $(function () {
       $('[data-toggle="tooltip"]').tooltip()
    })

    $(function () {
      $('[data-toggle="popover"]').popover()
    })
    </script>
</body>
</html>