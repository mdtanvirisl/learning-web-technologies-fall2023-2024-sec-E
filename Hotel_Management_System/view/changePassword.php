<?php
    include('../controller/sessioncheck.php');
?>

<html lang="en">
<head>
    <title>Password Change</title>
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
                <form method="post" action="" enctype="">
                    <fieldset>
                        <legend>PASSWORD CHANGE</legend>
                        Current Password: <input type="password" name="currpassword" value="" /> <br><br>
                        New Password: <input type="password" name="newpassword" value="" /> <br><br>
                        Retype New Password: <input type="password" name="retypepassword" value="" /> <br>
                        <hr>
                        <input type="submit" name="submit" value="Submit" />
                    </fieldset>
                </form>
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