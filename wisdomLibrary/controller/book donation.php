<?php 

if(isset($_POST["submit"])){
  // echo "<h4>added successfully</h4>";
  require __DIR__. '/../config/db.php';

 

  $status=$_POST["group1"];
  $userid=9;


 $title=$_POST["title"];
	if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',   $title)){
    $oute=<<<EOD
         
                <h4>title must be a made up of alphabets only</h4>
      
      EOD;
      echo $oute;
			
		}

    $author=$_POST["author"];
    	if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',   $author)){
          $oute=<<<EOD
         
                <h4>author must be a made up of alphabets only</h4>
      
      EOD;
      echo $oute;
		
		}

	 $quan=$_POST["quan"];
    if (!preg_match('/^\d+$/', $quan)) {
            $oute=<<<EOD
         
                <h4>quantitiy expressed interms of number only</h4>
      
      EOD;
      echo $oute;
  
		}
   
 $pubyr=$_POST["pubyr"];
    if (!preg_match('/^\d+$/', $pubyr)) {
           $oute=<<<EOD
         
                <h4>publication year expressed interms of number only</h4>
      
      EOD;
      echo $oute;
     
		}
  
  $edition=$_POST["edition"];
    if (!preg_match('/^\d+$/', $edition)) {
       $oute=<<<EOD
         
                <h4>edition expressed interms of number only</h4>
      
      EOD;
      echo $oute;
      
		}
   
  $lang=$_POST["lang"];

    if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',   $lang)){
        $oute=<<<EOD
         
                <h4>lanugage must be a made up of alphabets only</h4>
      
      EOD;
      echo $oute;
		
		}
   

      $cate=$_POST["cate"];
   

    if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',   $cate)){
         $oute=<<<EOD
         
                <h4>category must be a made up of alphabets only</h4>
      
      EOD;
      echo $oute;
	
		}

 


$sql="INSERT INTO `donated books`( `UsersId`, `Title`, `Author`, `Edition`, `Languge`, `PublicationYear`, `Quantitiy`,`Category`) 
VALUES ('$userid','$title','$author','$edition','$lang','$pubyr','$quan','$cate')";

try{
  if(mysqli_query($con,$sql)){
    //echo "<h4>added successfully</h4>";
  
  }
  else {echo "Error";}

}catch(Exception $e){
   echo "error";
echo $e;

 }
 
 
}

header("location:../view/book donation.php");
 

 