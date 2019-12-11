<?php
    //connect to Database
    $db = mysqli_connect('localhost','root','','fixform');
    if($db){
        echo "";
    }else{
        die("Connection Failed: ". mysqli_connect_error());
    }
?>