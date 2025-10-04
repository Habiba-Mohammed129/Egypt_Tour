<?php
  $pagetitle='Portsaid';
  include('./inc/nav.php');
  include('./inc/head.php');
?>
 <!-- header -->
<header class="bg-dark py-5">
  <div class="container   text-center">
    <h1 class="text-warning display-4 text-secondary fw-bold ">travel in Egypt</h1>
  </div>
</header>
<!--end header -->
<section class="container mt-5">
  <div class="container mt-5">
      <div class="row mt-5">
          <div class="col-md-6">
               <img src="images/portsaid.jpg" alt="" class=" ms-3 img-fluid" >
          </div> <!-------col 1 -->
          <div class="col-md-6 mt-5">
              <h5 class="fw-bold  display-5"> portsaid</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint itaque officia atque quibusdam consequuntur aliquid rerum, fugit harum ipsam assumenda iure culpa fugiat quod sapiente asperiores eaque aspernatur temporibus odio.</p>
               <a href="index.php" url="index.php" class="btn btn-warning w-25">back to home</a>
          </div> <!----col2-->
      </div> <!----row-->
  </div> <!-------container-->
</section>
<?php
include('./inc/footer.php');
?>