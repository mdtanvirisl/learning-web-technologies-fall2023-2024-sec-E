<?php

    require_once('db.php');
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from login where UserName='{$username}' and Password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        $user = mysqli_fetch_array($result);
        
        if($count == 1){
            session_start();
            $_SESSION['user'] = ['username' => $user['UserName'], 'password' => $user['Password'], 'UserType' => $user['UserType']];
            return true;
        }else{
            return false;
        }
    }

    function addAuth($auth){
        $con = getConnection();
        $sql = "insert into login (UserName, Password) values('{$auth['username']}', '{$auth['password']}')";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    
    function updateProfile($user){
        $name = $user["name"];
        $email = $user["email"];
        $number = $user["number"];
        $username = $user["username"];
        $con = getConnection();
        $sql = "update staffinfo set StaffName='{$name}', StaffEmail='{$email}', StaffNumber= '{$number}', where StaffUserName = '{$username}'";
        $result = mysqli_query($con, $sql);
        
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    

    function getUser($username){
        $con = getConnection();
        $sql = "select * from staffinfo where StaffUserName = '{$username}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }
    
?>