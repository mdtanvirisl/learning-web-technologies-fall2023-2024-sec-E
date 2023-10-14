<?php

    $currpassword = $_REQUEST['currpassword'];
    $newpassword = $_REQUEST['newpassword'];
    $retypepassword = $_REQUEST['retypepassword'];

    if($currpassword == "" || $newpassword == "" || $retypepassword == ""){
        echo "null value";
    }else if($currpassword !== $newpassword && $newpassword == $retypepassword){
        echo "Password changed successfully";
    }else{
        echo "invalid password! or can not use previous password again.";
    }

?>