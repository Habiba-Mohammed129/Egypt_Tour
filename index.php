<?php
  $pagetitle='Home';
  include('./inc/head.php');
  include('./inc/nav.php');
?>
  <!-- header -->
<header class="bg-dark py-5">
  <div class="container   text-center text-uppercase ">
    <h1 class="text-warning display-4 text-secondary fw-bold ">Discover Egypt</h1>
  </div>
</header>
<!--end header -->
<!-- stsrt carsoul -->
<main class="container mb-4">
  <div class="mt-4">
    <div id="carouselExample" class="carousel slide">
      <!-- imges -->
      <div class="carousel-inner"> 
        <?php for($i=1;$i<=10 ;$i++):?>
        <div class="carousel-item <?php if($i==1) echo'active'?>"> <!--the frist img only "active"?is show in first-->
          <img src="./images/slide-<?= $i?>.jpg" class="d-block w-100" alt="...">
        </div>
         <?php endfor?>
      </div>     <!-- end inner--> 
      <!-- imges -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</main>
 <!-- end carsoul -->
<section>
  <h2 class="text-center mb-3">Feture Cities</h2>
  <div class="container">
    <div class="row">
        <?php foreach($cities as $city){?>
      <div class="col-md-3">
        <div class="card1 mb-4">
          <img src="images/<?php echo $city['img']; ?>" alt="<?php echo $city['title']; ?>" class="card-img-top" style="height: 200px; object-fit: cover;">          <div class="card_boday text-center">
            <h5 class="card-title"><?php echo $city['title']; ?></h5>
            <a href="<?php echo $city['card_dir'] ?>" class="btn btn-outline-info w-100">Learn More</a>
          </div> <!----end card body-->
        </div> <!----card1-->
      </div> 
      <?php } ?>
    </div> <!----row-->
  </div>

<?php
  include('./inc/footer.php');

?>