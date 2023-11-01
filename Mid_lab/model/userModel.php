<?php

require_once('db.php');

function login($id, $password)
{
    $con = getConnection();
    $sql = "select * from users where id='{$id}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    if ($count == 1) {
        session_start();
        $_SESSION['userId'] = $row['id'];

        $_SESSION['flag'] = "true";
        return $row;
    } else {
        return false;
    }
}

function register($id, $name, $type, $password)
{


    $con = getConnection();
    $sql = "select * from users where id='{$id}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        print_r("User already exists");
    } else {
        $sql2 = "insert into users (id,name,userType,password) values ('{$id}','{$name}','{$type}','{$password}')";
        $result = mysqli_query($con, $sql2);
        return $result;
    }
}

function getUser($id)
{
    $con = getConnection();
    $sql = "select * from users where id='{$id}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    if ($count == 1) {
        return $row;
    } else {
        return false;
    }
}

function getAllUser()
{
    $con = getConnection();
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($users, $row);
    }

    return $users;
}
?>