<?php

    $title = $_POST["emailTitle"];
    $contact = $_POST["emailContact"];
    $message = $_POST["emailText"]." ".$contact;

    mail("contact@kubaczerepski.pl",$title,$message);
?>