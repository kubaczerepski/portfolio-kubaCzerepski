<?php

    $title = $_POST["emailTitle"];
    $contact = $_POST["emailContact"];
    $message = $_POST["emailText"];

    mail("kubaczerepski@gmail.com",$title,$message);
?>