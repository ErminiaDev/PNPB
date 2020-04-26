<?php

   if ((isset($_POST['typeOfContact'])) && $_POST['typeOfContact'] === 'contact')
   {
        if(isset($_POST['submit']))
        {
            $name = $_POST['fullName'];
            $mailFrom = $_POST['mail'];
            $subject = $_POST['typeOfContact'];
            $message = $_POST['message'];

            $mailTo = "contact@painnoir-painblanc.fr";
            $headers = "From: ".$mailFrom;
            $txt = "Vous avez reçu une demande de prise de contact de " . $name . ".\n\n" . $message;;

            $result = mail($mailTo, $subject, $txt, $headers);
            $result = $result ? 'true' : 'false'; 
            header("Location: contact.php?mailsend=".$result);
        };
   } elseif ((isset($_POST['typeOfContact'])) && $_POST['typeOfContact'] === 'reservation') {

        if(isset($_POST['submit']))
        {
            
            $name = $_POST['fullName'];
            $mailFrom = $_POST['mail'];
            $subject = $_POST['typeOfContact'];
            $message = $_POST['message'];
            $tel = $_POST['tel'];

            $mailTo = "contact@painnoir-painblanc.fr";
            $headers = "From: ".$mailFrom;
            $txt = "Vous avez reçu une demande de réservation de " . $name . ".\n\n" . "Numéro de téléphone: " . $tel . ".\n\n" . $message;;

            $result = mail($mailTo, $subject, $txt, $headers);
            $result = $result ? 'true' : 'false'; 
            header("Location: contact.php?mailsend=".$result);
        }       
    } else {
        print_r($_POST);
        var_dump(isset($_POST['contact']));
        echo "\n";
        var_dump(isset($_POST['reservation']));
        echo "\n";
        var_dump(isset($_POST['submit'])); 
    };
?>
