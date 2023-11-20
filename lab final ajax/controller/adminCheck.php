<?php
    include_once('../model/employeeModel.php');

    if (isset($_GET['uname'])) {
        $username = $_GET['uname'];

        $user = getUser($username);

        echo $user['StaffName']."+".$user['CompanyName'] ."+". $user['StaffNumber']."+".$user['StaffUserName'];

    } else {
        echo "Error! username not found.";
    }
?>