<?php

    $database= new mysqli("awseb-e-iwkp3jgvss-stack-awsebrdsdatabase-ivxzfjyvh1cv.cbz9gbamyctk.eu-north-1.rds.amazonaws.com","ebroot","123456789","ebdb");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
