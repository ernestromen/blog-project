<?php

require_once 'app/helpers.php';
session_start();

$page_title = 'Home Page';

?>

<?php include 'tpl/header.php' ?>
<div class="bg-image">
<main class="min-h750">

  <div class="container">
    <section id="main-top-content">
      <div class="row">
        <div class="col-12 text-center my-5">
          <h1 class="display-3 text-light"><b>
           make up and cosmetics blog</b>
          </h1>
         
          <p class="mt-3">
            <a href="signup.php" class="btn btn-outline-danger btn-lg">Join Us</a>
          </p>
        </div>
      </div>
    </section>
    <section id="main-center-content">
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              
        
              <h3 class="mb-0">SITES PURPOSE</h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">this is a site dedicated to a friend of mine for her cosmetics and make up bussiness</p>
              
            </div>
            <div class="col-auto d-none d-lg-block">
              <img width="200" height="250" src="images/background13.jpg" alt="Car Image 1">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              
              <h2 class="mb-0">POSTS</h2>
             
              <p class="mb-auto">the blog will include discussions about cosmetic products and make up techniques for proffesional make up artists</p>
             
            </div>
            <div class="col-auto d-none d-lg-block">
              <img width="200" height="250" src="images/background17.jpg">
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

</main>
</div>


<?php include 'tpl/footer.php' ?>
