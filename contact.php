<?php
include("index.php");

if(isset($_POST['submit'])){
    $fname = $_POST['firstname'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message= $_POST['message'];
    
    $mailTo = "jack_li97@yahoo.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$fname.".\n\n".$subject;
    
    mail($mailTo,$subject, $txt, $headers);
    headers("Location: index.php?mailsend");
}

