<?php

function adminLogin(){
    session_start();
    if(!(isset($_SESSION["adminLogin"]) && $_SESSION["adminLogin"]==true)){
        echo "<script>
            window.location.href='index.php'
        </script>";
        exit();
    }
}

function redirect($url){
    echo "<script>
        window.location.href='$url'
    </script>";
    exit();
}

function alert($type, $msg){
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
    echo <<<alert
        <div class="alert $bs_class alert-dismissible fade show" style="position: fixed; top: 25px; right: 25px;" role="alert">
            <strong class="me-3">$msg</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    alert;
    }

?>