<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <legend>EMAIL</legend>
    <form >
        <fieldset>
            <input type="email" name="email" value="" /><br>
            <input type="submit" name="submit" value="submit" />
        </fieldset>
    </form>
    
    <?php
    $email = $_REQUEST['email'];

    if($email == ''){
        echo "invalid email address";
    }
    else{
        echo "$email";
    }

?>
</body>

</html>