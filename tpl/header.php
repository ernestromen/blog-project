<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="stylesheet" href="css/style.css">
  <title> MAKEUP SITE | <?= $page_title; ?></title>
  <style>

</style>
</head>

<body style="background-image:url(images/background15.jpg);background-repeat: no-repeat; background-size:200%;
">
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
      <div class="container">
        <a class="navbar-brand text-white" href="./"><i class="fas fa-paint-brush"></i>COSMETICS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link text-white" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="blog.php">Blog</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <?php if (!user_auth()) : ?>
              <li class="nav-item">
                <a class="nav-link text-white" href="signin.php">Signin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="signup.php">Signup</a>
              </li>
            <?php else : ?>
              <li class="nav-item">
                <a class="nav-link text-white" href="profile.php">
                  <img width="30" height="30" class="rounded-circle mr-3" src="images/<?= $_SESSION['user_image']; ?>">
                  <?= htmlentities($_SESSION['user_name']); ?>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="logout.php">Logout</a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</body>