<!DOCTYPE html>
<head>
<html lang="en">
<?php require __DIR__. '/../inc/header.php' ?>
<title>Registration</title>
<?php require __DIR__. '/../inc/nav.php' ?>

</head>
<body>
 
   
    <div class="container">
        <h1>
            Registration form
        </h1>
        <form method="POST" action = "../controller/reg.php" enctype = "multipart/form-data">
          <label>First Name</label>
                <div class="input-field">
                <input  type="text" id="fname" name="fname"></div>
            
                <label for="middle_name">Middle Name</label>
            <div class="input-field">
        <input type="text" id="mname" name="mname"></div>
        
        <label for="last_name">Last Name</label>
          <div class="input-field">
          <input type="text" id="lname" name="lname"></div>
         
          <label class="active" for="last_name">Email/Username</label>
              <div class="input-field">
              <input type="text" id="Remail" name="email"></div>
              <label>Date of Birth</label>
              <div class="input-field">
                
                <input type="date" id="age" name="birthdate"><br><br></div>
                     
                           <label for="psd">Password</label>
                          <div class="input-field">
                          <input type="password" id="Rpass" name="pass" class="validate"></div>
                          
            <label for="copswd">Confirm password</label>
            <div class="input-field" >
              <input type="password" id="Rpassc"></div>
          
              <label>
                <input name="group1" type="radio" value="m" checked />
                <span>Male</span>
              </label>
              <label>
                <input name="group1" type="radio" value = "f" checked />
                <span>Female</span>
              </label><br><br>
              <div class="input-field">
              <label>Upload Your Image
                <input type="file" name="profile_image" />
            </label></div><br><br>
            <div class = "input-field">
               <input type="submit" name="submit" value="Submit" class="btn btn-primary">
</div>
    
  </form>
       
    </div><br><br>
    
    <?php require __DIR__. '/../inc/footer.php' ?>
</body>
</html>