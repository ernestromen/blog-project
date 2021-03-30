<?php

require_once 'app/helpers.php';
session_start();
$page_title = 'About Us';

?>

<?php include 'tpl/header.php' ?>
<main class="min-h750">
  <div class="container">
    <section id="main-about-content">
      <div class="row">
        <div class="col mt-5">
          <h1 class="display-3 text-primary">SOME WORK OF HER WORK</h1>
          <img src="images/girl2.jpg" alt="..." class="rounded-circle">
          <img src="images/background2.jpg" alt="..." class="rounded-circle">
          <img src="images/evaabout.jfif" alt="..." class="rounded-circle-50%">
        </div>
      </div>
    </section>
  </div>
</main>

<?php include 'tpl/footer.php' ?>