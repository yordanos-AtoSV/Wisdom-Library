<!DOCTYPE html>
<head>
<html lang="en">
<?php require __DIR__. '/../inc/header.php' ?>
<title>Librarian Login</title>
<?php require __DIR__. '/../inc/nav2.php' ?>

</head>

    <body>
       
       
      
        
        <div class="container">
            <h1>
                Login page
            </h1><br><br>
            <form  method="post" action ="../controller/lib.php">
                
                <label>Username/ID</label>
                <div class="input-field">
                <input type="text" id="pswd" name="pass"><br></div>
                <label>Password</label>
                <div class="input-field">
                <input type="password" id="Remail" name="email"><br>
                <div class = "input-field">
               <input type="submit" name="submit" value="Submit" class="btn btn-primary">
</div>
    
            </form>
           
        </div>
        </div>
        <?php require __DIR__. '/../inc/footer.php' ?>
<script type="text/javascript" src="loginRegister.js"></script>
    </body>
</html>
</body>
</html>