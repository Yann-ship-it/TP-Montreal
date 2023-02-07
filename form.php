<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
</head>

<body>

    <?php
    if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: contact@montreal.com' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('yy.iris85@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if ($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>

</body>

</html>

<!-- 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
    
</head>

<body>
// <?php

// phpinfo();


//     if(isset($_POST["message"])) {
//         $message = "Ce message vous à été envoyé via le site Montreal
//         Nom : " . $_POST["name"] . "
//         Nom de famille : " . $_POST["secondName"] . "
//         Message : " . $_POST["Message"];

//     $retour = mail('yy.iris85@gmail.com', $_POST['objet'],
//     $message, "From:contact@montreal.fr");
//     if ($retour)
//         echo '<p>Votre message a bien été envoyé.</p>';
//     }
//     ?>
</body>
</html> -->