<?php

require_once 'app/helpers.php';
session_start();
$page_title = 'Blog Page';

$link = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PWD, MYSQL_DB);

mysqli_query($link, "SET NAMES utf8");
$sql = "SELECT u.name,up.profile_image,p.*,DATE_FORMAT(p.date,'%d/%m/%Y %H:%i:%s') pdate FROM posts p 
        JOIN users u ON u.id = p.user_id 
        JOIN users_profile up ON u.id = up.user_id 
        ORDER BY p.date DESC";
       
        

$result = mysqli_query($link, $sql);

?>

<?php include 'tpl/header.php' ?>
<main class="min-h750">
  <div class="container">
    <section id="main-about-content">
      <div class="row">
        <div class="col mt-5">
          <h1 class="display-3 text-dark"> Blog Page</h1>
          <?php if (user_auth()) : ?>
         
            <a class="btn btn-primary" href="add_post.php"><i class="fas fa-plus-circle"></i> Add New Post</a>
          <?php else : ?>
            <a href="signup.php" class="text-dark">Create account and add posts</a>
          <?php endif; ?>
        </div>
      </div>
      <?php if ($result && mysqli_num_rows($result) > 0) : ?>
        <div class="row">
          <div class="col-12 mt-5">
            <h3>Recent Posts -</h3>
          </div>
          <?php while ($post = mysqli_fetch_assoc($result)) : ?>
            <div class="col-12 mt-5">
              <div class="card">
                <div class="card-header">
                  <img width="30" src="images/<?= $post['profile_image']; ?>" class="rounded-circle mr-3">
                  <span><?= htmlentities($post['name']); ?></span>
                  <span class="float-right"><?= $post['pdate']; ?></span>
                </div>
                <div class="card-body">
                  <h4><?= htmlentities($post['title']); ?></h4>
                  <p><?= str_replace("\n", '<br>', htmlentities($post['article'])); ?></p>
                  <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $post['user_id']) : ?>
                    <div class="float-right">
                      <div class="dropdown">
                        <a class="text-dark dropdown-toggle-no-arrow dropdown-toggle text-decoration-none " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-h"></i>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="edit_post.php?pid=<?= $post['id']; ?>">
                            <i class="fas fa-edit"></i>
                            Edit
                          </a>
                          <a class="delete-post-btn dropdown-item" href="delete_post.php?pid=<?= $post['id']; ?>">
                            <i class="fas fa-eraser"></i>
                            Delete
                          </a>
                        </div>
                      </div>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </section>
  </div>
</main>
<?php include 'tpl/footer.php' ?>