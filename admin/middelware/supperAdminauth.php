<?php
    if($_SESSION ['auth_rold'] !='2'){
        $_SESSION ['message'] = "! ليس لديك الصلاحية  الكاملة";
        header("Location:index.php");
        exit(0);
    }

?>