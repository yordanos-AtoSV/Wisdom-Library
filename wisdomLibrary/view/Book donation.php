

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
       <style>
       header{
         background: url(img/man.jpg);
         background-size: cover;
         background-position: center;
         min-height: auto;
       }
      
       @media screen and (max-width: 670px){
         header{
           min-height: 500px;
         }
       }

       
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: red;
  opacity: 0.5; /* Firefox */
}


   
     </style>  
     <title>Book Donating</title>
</head>
<body>
    <header>
      
        <nav class="nav-wraper indigo">
            <a href="#" class="brand-logo">WISDOM LIBRARY</a>

            <div class="container">
                <a href="#" class="sidenav-trigger" data-target="mobile-links">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right" hide-on-med-and-down="">
                    <li><a href="report.html">GENERATE REPORT</a></li>
                    <li><a href="Event Registration.html">UPDATE EVENTS</a></li>
                    <li><a href="Book Update.html">UPDATE BOOKS</a></li>
                    <li><a href="index.html">HOME</a></li>
                     </ul>
                    
                <ul class="sidenav" id="mobile-links">
                  <li><a href="report.html">GENERATE REPORT</a></li>
                  <li><a href="Event Registration.html">UPDATE EVENTS</a></li>
                  <li><a href="Book Update.html">UPDATE BOOKS</a></li>
                  <li><a href="index.html">HOME</a></li>
                   </ul>
               </div></nav>
              
              </header>

    <div class="container">
        <h1>Book Donating form</h1>
        <form action="../controller/book donation.php" method="post">
            <div class="input-field">
            <!-- <label for="title">Title</label> -->
            <input type="text" name="title" id="Atitle" placeholder="Title" required></div>
            <div class="input-field">
            <!-- <label for="author">Author</label> -->
            <input type="text" name="author" id="Aauthor" placeholder="Author" required></div>
            <div class="input-field">
         
            <!-- <label for="edition">Edition</label> -->
            <input type="text" name="edition" id="edition" placeholder="Edition" ></div>
            <div class="input-field">
            <!-- <label for="title">Language</label> -->

              <input type="text" name="lang" id="lang" placeholder="Language" required></div>
            <div class="input-field">
            <!-- <label for="pubyr">Publication year</label> -->

              <input type="text" name="pubyr" id="pubyr" placeholder="publication year" required></div>
            <div class="input-field">
              
            <!-- <label for="quantity">Quantity</label> -->
            <input type="text" name="quan" id="qty" placeholder="quantitiy" required></div>

            <div class="input-field">
              
            <!-- <label for="cate">Category</label> -->
            <input type="text" name="cate" id="cate" placeholder="category" required></div>
            <label>
                <input name="group1" checked type="radio" name="status" id="Astatus" />
                <span>NEW</span>
              </label>
              <label>
                <input name="group1" type="radio" checked type="radio" name="status" id="Astatus"/>
                <span>OLD</span>
              </label><br><br>

              <input type="submit" name="submit" value="ADD" class="add"  >
              <input type="submit" name="reset" value="RESET">

              <!-- <a class="waves-effect waves-light btn-small">ADD</a>
              <a class="waves-effect waves-light btn-small">RESET</a> -->
            
        </form>
     </div><br><br>
     
     <footer class="page-footer">
        
        <div class="row">
            <div class="col s4"> <p>Mission: 
                This public library is to foster the love of reading, 
                and to develop critical thinking skill of the youths.
            </p></div>
  <div class="col s4"> <p>Vision: 
    Our vision is to get youths who are ethical
    users, critical thinkers, enthuisiastic readers.
    
</p></div>
<div class="col s4"> <p>Goal: 
    Our goal is is to promot 
    literacy and enjoyment of reading.

</p></div>

</div>
<div class="footer-copyright">
<div class="container">
© 2014 Copyright Text
<a class="grey-text text-lighten-4 right" href="#">More Links</a>
</div>
</div>
</footer>


<script type="text/javascript" src="addBook.js"></script>

<!-- <script>


var btn=document.querySelector(".add");


btn.addEventListener('click',function(e){

alert("added!");
   //e.preventDefault();


})

</script> -->
</body>
</html>





