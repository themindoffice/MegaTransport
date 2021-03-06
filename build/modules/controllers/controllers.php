<?php

function controllers_contact() {

    $secret 	= '6LecGIwUAAAAAM76nOf4qNTkZ2fdKFNugmUc7WU9';
    $response 	= $_POST['token'];

    parse_str($_POST["data"], $_POST);

    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response);
    $responseData 	= json_decode($verifyResponse);

    if($responseData->success != true){
        echo json_encode(array("status" => "fail", "message" => "Bewijs dat u geen robot bent."));
        exit();
    }

    $array[] = array($_POST["naam"], "varchar", true, "Naam is niet ingevuld");
    $array[] = array($_POST["email"], "email", true, "E-mailadres is niet ingevuld");
    $array[] = array($_POST["bericht"], "varchar", true, "Bericht is niet ingevuld");

    validation_valid($array);

    $mail = fc_email_data(1, $_POST,'nl');

    fc_email_sent("support@themindoffice.nl",$mail[0],$mail[1],$_POST["emailadres"],$_POST["naam"]);

    echo json_encode(array("status" => "success","clear" => "all", "message" => "Bedankt voor uw bericht. Wij nemen zo snel mogelijk contact met u op."));
    exit();
}

?>