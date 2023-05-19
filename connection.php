<?php

    $database= new mysqli("awseb-e-iwkp3jgvss-stack-awsebrdsdatabase-lmorl9inlrdx.cbz9gbamyctk.eu-north-1.rds.amazonaws.com","root","123456789","ebdb");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
