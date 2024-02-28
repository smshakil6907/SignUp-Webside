<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <form method="post" action="../controller/login_action.php">
        <h1 style="color: #c2704e">Login</h1>
        <input type="text" name="emailorphone" placeholder="Email or Phone" value="<?php echo isset($_SESSION["emailorphone"]) ? $_SESSION["emailorphone"] : "";
                                                                                    unset($_SESSION["emailorphone"]); ?>">
        <div style="color: red;">
            <?php echo isset($_SESSION["emailorphoneErr"]) ? $_SESSION["emailorphoneErr"]:"";
            unset($_SESSION["emailorphoneErr"]); ?>
            <br>
        </div>
        
        <input type="text" name="password" placeholder="password"  value="<?php echo isset($_SESSION["password"]) ? $_SESSION["password"] : "";
                                                                                    unset($_SESSION["password"]); ?>">
        <div style="color: red;">
            <?php echo isset($_SESSION["passwordErr"]) ? $_SESSION["passwordErr"]:"";
            unset($_SESSION["passwordErr"]); ?>
            <br>  
        </div>  
        <input type="submit" value="Login" id="">
        <br><br>
        <a href="signup.php"> Dont have an account? </a>
    </form>

</body>

</html>