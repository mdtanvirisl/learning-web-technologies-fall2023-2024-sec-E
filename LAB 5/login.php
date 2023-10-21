<html lang="en">

<head>
    <title>LOGIN</title>
</head>

<body>
    <table border = "1" width= 50%>
        <tr>
            <td width=70%>
                <img src="xcompany.jpg" alt="" width="100" height="100">
            </td>
            <td>
                <a href="home.php">Home</a>
                | <a href="login.php">login</a>
                | <a href="registration.php">Registration</a>
            </td>
        </tr>
        <tr>
            <td colspan = "2">
                <form method="post" action="logincheck.php" enctype="">
                    <fieldset>
                        <legend>LOGIN</legend>
                        User Name: <input type="text" name="username" value="" /> <br>
                        Password: <input type="password" name="password" value="" /> <br>
                        <hr>
                        <input type="checkbox" name="remember_me" id="checkbox">
                        <label for="checkbox"> Remember Me</label><br>
                        <input type="submit" name="submit" value="Submit" />
                        <a href="forgetPassword.php">Forget Password?</a>
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