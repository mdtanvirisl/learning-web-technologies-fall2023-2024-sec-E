<?php
    include('sessioncheck.php');
?>

<html lang="en">
<head>
    <title>Profile</title>
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
                    <h3>Name    :Bob</h3>
                    <hr>
                    <h3>Email   :bob@aiub.com</h3>
                    <hr>
                    <h3>Gender  :Male</h3>
                    <hr>
                    <h3>Date of Birth:19/09/1998</h3>
                    <hr>
                    <a href="eprofile.php">Edit Profile</a>
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