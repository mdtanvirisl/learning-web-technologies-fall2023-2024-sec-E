<?php
    include('sessioncheck.php');
?>
<html lang="en">
<head>
    <title>Dashboard</title>
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
                <h1>Welcome Bob</h1>
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