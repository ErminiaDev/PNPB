<?php
var_dump(isset($_POST['contact']));
var_dump(isset($_POST['reservation']));
var_dump(isset($_POST['submit']));

   if (isset($_POST['contact']))
   {
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $mailFrom = $_POST['mail'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $mailTo = "contact@erminiadev.com";
            $headers = "From: ".$mailFrom;
            $txt = "Vous avez reçu une demande de prise de contact de " . $name . ".\n\n" . $message;;

            $result = mail($mailTo, $subject, $txt, $headers);
            $result = $result ? 'true' : 'false'; 
            header("Location: contact.php?mailsend=".$result);
        };
   } elseif (isset($_POST['reservation'])) {

        if(isset($_POST['submit']))
        {
            
            $name = $_POST['name'];
            $mailFrom = $_POST['mail'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $tel = $_POST['telephone'];

            $mailTo = "melmexus@gmail.com";
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
