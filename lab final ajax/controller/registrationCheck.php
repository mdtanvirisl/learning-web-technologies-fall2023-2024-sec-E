<?php

include_once("../model/employeeModel.php");
include_once("../model/registrationFunction.php");

$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
$cname = isset($_REQUEST['cname']) ? $_REQUEST['cname'] : "";
$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : "";
$number = isset($_REQUEST['number']) ? $_REQUEST['number'] : "";
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "";
$confirmPassword = isset($_REQUEST['confirmPassword']) ? $_REQUEST['confirmPassword'] : "";


$nameError = $cnameError = $usernameError = $numberError = $passwordError = $confirmPasswordError = "";

$error = "";

if (isset($_POST["submit"])) {

    if (!$name) {
        $nameError = "Please enter your name";
    }
    if (!$cname) {
        $cnameError = "Please enter company name";
    }
    if (!$username) {
        $usernameError = "Please enter a username";
    }
    
    if (!$number) {
        $numberError = "Please enter your number";
    }
    
    if (!$password) {
        $passwordError = "Please enter password";
    }
    if ($password && strlen($password) < 6) {
        $passwordError = "Password must be at least 6 characters";
    }
    if (!$confirmPassword) {
        $confirmPasswordError = "Please enter confirmPassword";
    }
    if ($confirmPassword != $password) {
        $confirmPasswordError = "passwords did not match";
    }
    if ($name && $cname && $username && $number && $password && $password == $confirmPassword) {
        $flag = true;
        if (!nameCheck($name)) {
            $nameError = "Please enter your name at least two words";
            $flag = false;
        }
        if (!usernameChaeck($username)) {
            $usernameError = "username must contains num & alpha ";
            $flag = false;
        }
        if (!numberCheck($number)) {
            $numberError = "number must start with 0 & 1 & must be 11 digits";
            $flag = false;
        }

        if($flag){
            $employee = ['name'=>$name, 'cname'=>$cname, 'username'=>$username, 'number'=>$number, 'password'=>$password];
            $error = register($employee);
        }
    }
}
