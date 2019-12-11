<?php

function get_row($query){
    global $db;
    $result = mysqli_query($db,$query);
    return mysqli_fetch_assoc($result);
}

function set_user_session($user_id){
    $_SESSION['user_id'] = $user_id;
}

function destroy_user_session(){
    unset($_SESSION['user_id']);
    session_destroy();
}

function getUser(){
    if($_SESSION['user_id']){
        return get_row("SELECT * FROM member WHERE id = {$_SESSION['user_id']}");
    }
}

function loggedin(){
    return $_SESSION['user_id'];
}

?>