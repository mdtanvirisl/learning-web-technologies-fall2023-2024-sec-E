<html lang="en">

<head>
    <title>Registration</title>
</head>

<body>
    <table border = '1' width= 50%>
        <tr>
            <td width= 70%>
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
                <form method="post" action="" enctype="">
                    <fieldset>
                        <legend>REGISTRATION</legend>
                        Name: <input type="text" name="name" value="" /> <br>
                        <hr>
                        Email: <input type="email" name="email" value="" /> <br>
                        <hr>
                        User Name: <input type="text" name="username" value="" /> <br>
                        <hr>
                        Password: <input type="password" name="password" value="" /> <br>
                        <hr>
                        Confirm Password: <input type="password" name="confpassword" value="" /> <br>
                        <hr>
                        <legend>Gender:</legend>
                        <input type="radio" name="gender" value="" /> Male
                        <input type="radio" name="gender" value="" /> Female
                        <input type="radio" name="gender" value="" /> Other <br>
                        <hr>
                        <legend>Date Of Birth</legend>
                        <input type="date" name="dob" value="" /> <br>
                        <hr>
                        <input type="submit" name="submit" value="Submit" />
                        <input type="reset" name="reset" value="Reset" />
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