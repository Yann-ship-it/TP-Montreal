<?php
    if($_POST) {
        if($_POST['name']!='') {
        echo "<br/><br/>Bonjour " . $_POST['name'] . " " . $_POST['nom'] . "!<br/>";
        echo "Je peux vous appeler " . $_POST['secondName'] . "<br/><br/>";
        
        if(isset($_POST['association'])) {
        echo "C'est une bonne idée de commencer à apprendre à programmer en PHP !<br/><br/>";
        }
        else {
        if($_POST['association']=='H') {
        $mot = "débutant";
        }
        else {
        $mot = "débutante";
        }
        echo "Comme vous n'êtes pas " . $mot . " vous pouvez passer directement au mini-projet !<br/><br/>";
        }
        }
        }
?>