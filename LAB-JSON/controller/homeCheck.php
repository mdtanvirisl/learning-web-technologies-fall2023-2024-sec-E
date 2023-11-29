<?php
include_once("../model/userModel.php");

$user = getAllUser();
// $students = [];
// for($i=0;$i<count($user);$i++){
//     $student = ['id'=> $user[$i]['id'], 'name'=> $user[$i]['name'], 'cgpa'=>$user[$i]['cgpa']];
//     $students = $student;
// }
echo json_encode($user);
// echo $students;
?>