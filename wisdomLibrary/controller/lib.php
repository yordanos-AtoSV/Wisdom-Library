<?php require __DIR__. '/../config/db.php' ?> 
<?php
 
if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $psw = $_POST['pass'];
    
    $s= "select * from admin where email='$email' and password = '$psw'";
    
    $qu= mysqli_query($con, $s);
    if(mysqli_num_rows($qu)>0){
        $f= mysqli_fetch_assoc($qu);
        $_SESSION['id']=$f['id'];
        header ('location:Dashboard for librarian.php');
    }
    else{
        echo 'username or password does not exist';
    }
}
   

?>
