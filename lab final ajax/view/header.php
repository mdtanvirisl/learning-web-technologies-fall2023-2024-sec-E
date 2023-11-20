<html>
<head>
    <title>header</title>
</head>
<body>
    <th align = "right">
        Logged in as <a href="profile.php"><?php echo $_SESSION['user']['username'];?></a>
        | <a href="../controller/logout.php">Logout</a>
    </th>
</body>
</html>