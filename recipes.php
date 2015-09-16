
<html>
    <div class="body1">
 <?php 
  include 'views/header.php';
 ?>

    <!-- Recipes start -->
    <div class="container">
      <div class="panel panel-default panal-info">
        <div class="panel-body">
          <div class="col-md-10 col-md-offset-1">
          <h1><i class="fa fa-cutlery" style="color:#FF5500;font-size:70px;">&nbsp;Recipes</i></h1>
          <h5 class="h3color">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;here you'll found all recipes i ever made feel free to do any of them</h5>
          <p class="arpink" dir="rtl" lang="ar">
          <!-- arabic start here -->
          وهنا هتلاقوا كل الوصفات اللى أنا عملتها وبالطريقه والمكونات والصور وبالهنا والشفا
          <!-- arabic end here -->
          </p>
            
            <br>
          </div>
        </div>
      </div>
    </div>
    <!-- Recipes end  -->

    <!-- test  -->
    <div class="container">
      <div class="panel panel-default panal-info">
        <div class="panel-body">
          <div class="col-md-10 col-md-offset-1">
          
          <div>
            <?php
            error_reporting( E_ALL ); ini_set( 'display_errors', 1 );

            foreach ( array( '001','002','003' ) as 'recipes/$i.php' )


              include 'recipes/001.php';
              include 'recipes/002.php';
              include 'recipes/003.php';

             ?>
          </div>
          
          </div>
        </div>
      </div>
    </div>
    <!-- test end  -->
    


   <?php 
  include 'views/footer.php';
   ?>
   </div>
</html>