
 <?php
    include "db.php";
    
    

  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="assets/style.css" rel="stylesheet" >
    <link rel="stylesheet" href="assets/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/js/script.js" />
  </head>
  <body>
 <section class="header">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="nav_logo">
            <img src="assets/image/logo.png">
            
          </div>
           
         
        </div>

        <div class="col-6 index_nav">
           <nav class="navbar navbar-expand-lg navbar-expand-sm justify-content-end right_menu">
  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              
              
              
              
            </ul>
           
          </div>
        </nav>
        </div>
      </div>
    </div>
  </section>
  
  

<section class="information pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-3 col-sm-12">
       
      
        
      </div>
        <?php

                        $sql = "SELECT * FROM blog";
                        $allPosts = mysqli_query($db, $sql);
                       
                        while ($row = mysqli_fetch_assoc($allPosts)) {
                        
                        
                        $post_id          =  $row['post_id'];
                        $title            =  $row['title'];
                        $paragraph      =  $row['paragraph'];
                        $image            =  $row['image'];
                        
                        
                        

                             

                        ?>
      <div class="col-md-4 col-lg-3 col-sm-12">
        <div class="card" >
  <img class="card-img-top" src="assets/image/<?php echo $image; ?>">
  <div class="card-body">
    <h5 class="card-text"><?php echo $title; ?></h5>
    <p><?php echo substr($paragraph, 0, 100) ; ?></p>
    <a href="singleblog.php?view=<?php echo $row['post_id']."=". trim(str_replace(" ", "_", strtolower($row['title']))); ?>" class="button">Click Here</a>
  </div>
</div>
        
      </div>
       
      <?php }
  ?>
      
    </div>

    
  </div>
  
</section>

<!-- information section end -->

   
    <!-- footer section html part end here -->
    <section class="bottom_footer text-center pt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>@ 2022 All Right Reserved </p>
          </div>
         
        </div>
        
      </div>
      
    </section>
     
    
    </script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>