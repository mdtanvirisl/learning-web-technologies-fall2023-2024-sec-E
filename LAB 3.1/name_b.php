
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <legend>NAME</legend>
    <form method="get">
        <input type="text" name="name" value="" /><br>
        <hr>
        <input type="submit" name="submit" value="submit" />
    </form>

    <?php
    $name = $_REQUEST['name'];

    if($name == ''){
        echo "invalid name";
    }
    else{
        echo "$name";
    }

?>
</body>
</html>