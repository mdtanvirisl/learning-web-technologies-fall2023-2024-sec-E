<?php

    require_once('db.php');
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from login where UserName='{$username}' and Password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return true;
        }else{
            return false;
        }
    }

    function addguest($user){
        $con = getConnection();
        $sql = "insert into guestinfo (GuestName, GuestEmail, GuestNumber, GuestUserName, UserType) values('{$user[0]}', '{$user[1]}', '{$user[2]}', '{$user[3]}', '{$user[4]}')";
        $result = mysqli_query($con, $sql);

    }

    function adduser($user){
        $con = getConnection();
        $sql = "insert into login (UserName, UserType, Password) values('{$user[3]}', '{$user[4]}', '{$user[5]}')";
        $result = mysqli_query($con, $sql);

    }

    function getAllUser(){
        $con = getConnection();
        $sql = "select * from guestinfo";
        $result = mysqli_query($con, $sql);
        $users = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        
        return $users;
    }

    function deleteguest(){

    }

    function updateProfile($user){
        $username = $user["username"];
        $email = $user["email"];
        $id = $user["id"];
        $con = getConnection();
        $sql = "update users set username='$username', email='$email' where id = '$id'";
        mysqli_query($con, $sql);
        return true;
    }

    function getUser($id){
        $con = getConnection();
        $sql = "select * from guestinfo where id = '$id'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        
        return $user;
    }


?>