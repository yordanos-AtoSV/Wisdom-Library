  <?php require __DIR__. '/../config/db.php' ?> 
 <?php

if(isset($_POST['submit'])){
   
  $fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
  $email = $_POST['email'];
  $age = $_POST['birthdate'];
  $psw = $_POST['pass'];
 $image = $_POST['profile_image'];
  $target = "upload/"; 
$target = $target . basename( $_FILES['profile_image']['name']); 

//This gets all the other information from the form 
$pic = ($_FILES['profile_image']['name']); 

//Writes the photo to the server 
if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $target)) { 
    //Tells you if its all ok 
    echo "The file ". basename( $_FILES['profile_image']['name']). " has been uploaded, and your information has been added to the directory"; 
} else { 
    //Gives an error if its not 
    echo "Sorry, there was a problem uploading your file.";
} 

    $i = "INSERT INTO user(firstName, middleName, lastName, email, DoB, password, image_url)  VALUES(' $fname','$mname','$lname', '$email','$age', '$psw', '$target')";
	
		if(mysqli_query($con, $i)){
		echo "inserted successfully..!";
       header ('Location:../view/User Login.php');
	}
}

?>