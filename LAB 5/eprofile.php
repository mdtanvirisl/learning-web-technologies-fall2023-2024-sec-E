<?php
    include('sessioncheck.php');
?>

<html lang="en">
<head>
    <title>Edit Profile</title>
</head>
<body>
    <table border = "1" width=50%>
        <tr>
            <th>
                <img src="xcompany.jpg" alt="" width="100" height="100">
            </th>
            <th>
                Logged in as <a href="">Bob</a>
                | <a href="logout.php">Logout</a>
            </th>
        </tr>
        <tr>
            <td>
                <?php include('account.php'); ?>
            </td>
            <td width=70%>
                <fieldset>
                    <legend>Profile</legend>
                    Name: <input type="text" name="" value="" /> <br>
                    Email:<input type="email" name="" value="" /> <br>
                    Gender: 
                            <input type="radio" name="gender" value="" /> Male
                            <input type="radio" name="gender" value="" /> Female
                            <input type="radio" name="gender" value="" /> Other <br>
                    Date of Birth:<input type="date" name="" value="" /> <br>
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