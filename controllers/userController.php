<?php

include ('../models/user.php ');

if (!empty($_POST["registro"])){ 
    if (empty($_POST["getName"]) || empty($_POST["getLastname"]) || empty($_POST["getNumdoc"])
     || empty($_POST["getMaindoc"]) || empty($_POST["getCel"]) || empty($_POST["getEmail"])) {
        echo 'Uno de los campos esta vacio';
        
    } else {
        # code...
    }
}
