<?php
include_once("../controller/registrationCheck.php");

?>
<html>

<head>
    <title>Registration</title>
</head>

<body>
    <table border = '1' width= 100%>
        <tr>
            <td align = "center">
                <a href="login.php">login</a>
                | <a href="registration.php">Registration</a>
            </td>
        </tr>
        <tr>
            <td colspan = "2">
                <center>
                    <form action="" method="POST" enctype="">


                        <h3>REGISTRATION</h3>
                        <hr>
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><label for="name">Name</label> </td>
                                <td> : <input type="text" name="name" value="<?php echo $name ?>"/> <span><?= $nameError ?></span> </td>
                            </tr>
                            <tr>
                                <td><label for="cname">Company Name</label> </td>
                                <td> : <input type="text" name="cname" value="<?php echo $cname ?>"/> <span><?= $cnameError ?></span> </td>
                            </tr>
                            <tr>
                                <td><label for="username">Username</label> </td>
                                <td> : <input type="text" name="username" value="<?php echo $username ?>"/> <span><?= $usernameError ?></span> </td>
                            </tr>
                            
                            <tr>
                                <td><label for="number">Number</label> </td>
                                <td> : <input type="text" name="number" value="<?php echo $number ?>"/> <span><?= $numberError ?></span> </td>
                            </tr>
                            <tr>
                                <td><label for="password">Password</label> </td>
                                <td> : <input type="password" name="password" value="<?php echo $password ?>"/> <span><?= $passwordError ?></span> </td>
                            </tr>
                            <tr>
                                <td><label for="confirmPassword">Confirm Password</label> </td>
                                <td> : <input type="password" name="confirmPassword" value="<?php echo $confirmPassword ?>"/> <span><?= $confirmPasswordError ?></span> </td>
                            </tr>
                        </table>
                        <div>
                            <p><?= $error ?></p>
                            <br>
                            <input type="submit" value="Sign Up" name="submit" />
                        </div>
                    </form>
                </center>
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