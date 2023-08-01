<!DOCTYPE html>

<head>
<html lang="en">
<?php require __DIR__. '/../inc/header.php' ?>
<title>User Login</title>
<?php require __DIR__. '/../inc/nav.php' ?>

</head>


    <body>
       
        
       
        <div class="container">
            <h1>
                Register or Login form
            </h1>
            <form method = "post" action = "../controller/logincon.php">
                <label>Email/Username</label>
                <div class="input-field">
                <input type="email" id="email" required name = "email"></div>
                <label>Password</label>
                <div class="input-field">
                <input type="password" id="password" required name = "pass"></div>
                <div class = "input-field">
               <input type="submit" name="submit" value="Submit" class="btn btn-primary">
</div>

            </form>
            <form method = "post" aciton = "sendLink.php">
            <div class = "input-field">
               <button type="submit" name="submit" value="Submit" class="btn btn-primary">Forgot password</button>
</div>
    
    </form>
            <h3>New Here</h3>
            <a href="Registration for user.php" id="register">Register</a>
        </div>
    
        <?php require __DIR__. '/../inc/footer.php' ?>

    </body>
</html>
</body>
</html>