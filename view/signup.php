<?php
session_start();  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <form method="post" action="../controller/signup_action.php">
        <h1>Sign Up</h1>
        <input type="text" name="firstname" placeholder="First name" value="<?php echo isset($_SESSION["firstname"]) ? $_SESSION["firstname"] : "";
                                                                                    unset($_SESSION["firstname"]); ?>">
         <div style="color: red;">
            <?php echo isset($_SESSION["firstnameErr"]) ? $_SESSION["firstnameErr"]:"";
            unset($_SESSION["firstnameErr"]); ?>
            <br>
        </div>                                                                            
        <input type="text" name="surname" placeholder="Sur name" value="<?php echo isset($_SESSION["surname"]) ? $_SESSION["surname"] : "";
                                                                                    unset($_SESSION["surname"]); ?>"> 
          <div style="color: red;">
            <?php echo isset($_SESSION["surnameErr"]) ? $_SESSION["surnameErr"]:"";
            unset($_SESSION["surnameErr"]); ?>
            <br>
        </div>
        <input type="text" name="mobileoremail" placeholder=" Mobile number or email"  value="<?php echo isset($_SESSION["mobileoremail"]) ? $_SESSION["mobileoremail"] : "";
                                                                                unset($_SESSION["mobileoremail"]); ?>">
            <div style="color: red;">
                <?php echo isset($_SESSION["mobileoremailErr"]) ? $_SESSION["mobileoremailErr"]: "";
                unset($_SESSION["mobileoremailErr"]);?>
                <br>
            </div>                                                                                     
        <input type="text" name="password" placeholder="Password"  value="<?php echo isset($_SESSION["password"]) ? $_SESSION["password"] : "";
                                                                                    unset($_SESSION["password"]); ?>">
         <div style="color: red;">
            <?php echo isset($_SESSION["passwordErr"]) ? $_SESSION["passwordErr"]:"";
            unset($_SESSION["passwordErr"]); ?>
            <br>
         </div>       
        <b>Date of birth: </b>
        <input type="date" name="dob" value="<?php echo isset($_SESSION["dob"]) ? $_SESSION["dob"] : "";
                                                                                    unset($_SESSION["dob"]); ?>">
        <div style="color: red;">
            <?php echo isset($_SESSION["dobErr"]) ? $_SESSION["dobErr"]:"";
            unset($_SESSION["dobErr"]); ?>
            <br>
         </div>                                                                                   
        <b>Gender:</b>
        <input type="radio" id="male" name="gender"  value="male" <?php echo (isset($_SESSION['gender']) && $_SESSION['gender'] === 'male') ? 'checked' : ''?>>       
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" <?php echo (isset($_SESSION['gender']) && $_SESSION['gender'] === 'female') ? 'checked' : '' ?>>
        <label for="male">Female</label>
        <input type="radio" id="others" name="gender" value="others" <?php echo (isset($_SESSION['gender']) && $_SESSION['gender'] === 'others') ? 'checked' : '' ?>>
        <label for="male">Others</label>
        <div style="color: red;">
                <?php
                echo isset($_SESSION["genderErr"]) ? $_SESSION["genderErr"] . "<br>": "";
                unset($_SESSION["genderErr"]);
                unset($_SESSION["gender"]); ?>

                <div id="genderErr"></div>
            </div>
        <input type="submit" value="Sign Up" id="" class="button1">
        <br><br>
        <a href="login.php">Alrady have an account?</a>
    </form>


</body>

</html>