<?php
    include('../controller/sessioncheck.php');
?>

<html lang="en">
<head>
    <title>Profile</title>
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
                <table width=100%>
                    <tr>
                        <td width=70%>
                            <fieldset>
                                <legend>Profile</legend>
                                <p>Name    :Bob</p>
                                <hr>
                                <p>Email   :bob@aiub.com</p>
                                <hr>
                                <p>Phone Number   :01772462549</p>
                                <hr>
                                <p>Gender  :Male</p>
                                <hr>
                                <p>Date of Birth:19/09/1998</p>
                                <hr>
                                <a href="eprofile.php">Edit Profile</a>
                            </fieldset>
                        </td>
                        <!-- profile picture show and upload a new picture -->
                        <td>
                            <fieldset>
                                <legend>Picture</legend>
                                <img src="../image/img-logo.png" alt="" width = 30% height = 30%> <br>
                                <input type="file" name="myfile" value="">
                                <hr>
                                <input type="submit" name="" value="upload" />
                            </fieldset>
                        </td>
                    </tr>
                </table>
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