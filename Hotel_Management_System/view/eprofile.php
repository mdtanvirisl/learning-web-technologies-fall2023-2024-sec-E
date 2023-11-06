<?php
    include('../controller/sessioncheck.php');
    include('../model/userModel.php');

    $user = getUser();
?>

<html lang="en">
<head>
    <title>Edit Profile</title>
</head>
<body>
    <table border = "1" width=100%>
        <tr>
            <th>
                <img src="../image/hotel_management.jpg" alt="" width="100" height="100">
            </th>
            <th align = "right">
                Logged in as <a href="">Bob</a>
                | <a href="../controller/logout.php">Logout</a>
            </th>
        </tr>
        <tr>
            <td>
                <?php include('../controller/account.php'); ?>
            </td>
            <td width=80%>
                <fieldset>
                    <legend>Profile</legend>
                    Name: <input type="text" name="" value="<?=$user['GuestName']?>" /> <hr>
                    Email:<input type="email" name="" value="" /> <hr>
                    Gender: 
                            <br><input type="radio" name="gender" value="" /> Male
                            <input type="radio" name="gender" value="" /> Female
                            <input type="radio" name="gender" value="" /> Other <hr>
                    Date of Birth:<input type="date" name="" value="" /> <hr>
                    <hr>
                    <input type="submit" name="" value="Submit" />
                </fieldset>
            </td>
        </tr>
        <tr>
            <td colspan = "2" align = "center">
                <h6>Copyright @ 2017</h6>
            </td>
        </tr>
    </table>


</body>
</html>