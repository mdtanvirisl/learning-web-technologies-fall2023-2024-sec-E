<?php 
 
 include("../controller/logincheck.php");
 
?>

<html lang="en">

<head>
    <title>LOGIN</title>
</head>

<body>
    <table border = "1" width= 100%>
        <tr>
            <td align = "center">
                <a href="login.php">login</a>
                | <a href="registration.php">Registration</a>
            </td>
        </tr>
        <tr>
            <td colspan = "2">
                <form method="post" action="" enctype="">
                    <fieldset>
                        <legend>LOGIN</legend>
                        User Name: <input type="text" name="username" value="" /> <br>
                        Password: <input type="password" name="password" value="" /> <br>
                        <p><?= $error ?></p>
                        <hr>
                        <input type="submit" name="submit" value="Submit" />
                        <a href="">Forget Password?</a>
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan = "2" align = "center">
                <h6>Copyright @ 2023</h6>
            </td>
        </tr>
    </table>
    
</body>

</html>