<?php

require_once 'app/helpers.php';
require_once 'app/db_config.php';

session_start();


if (isset($_SESSION['user_id'])) {

  header('location: ./');
  exit;
}

$page_title = 'Sign in page';
$errors = [
  'email' => '',
  'password' => '',
  'submit' => '',
];


// If Client click on submit button
if (isset($_POST['submit'])) {


  if (isset($_SESSION['csrf_token']) && isset($_POST['csrf_token']) && $_SESSION['csrf_token'] == $_POST['csrf_token']) {

    // Collect client data to variables 
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    if (!$email) {

      $errors['email'] = '* A valid email is required';
    } elseif (!$password) {
      $errors['password'] = '* Please enter your password';
    } else {

      $link = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PWD, MYSQL_DB);


      $email = mysqli_real_escape_string($link, $email);
      $password = mysqli_real_escape_string($link, $password);
      $sql = "SELECT u.*,up.profile_image FROM users u 
      JOIN users_profile up ON u.id = up.user_id 
      WHERE email = '$email' LIMIT 1";
   
      $result = mysqli_query($link, $sql);
      
      if ($result && mysqli_num_rows($result) == 1) {

        $user = mysqli_fetch_assoc($result);
        

        if (password_verify($password, $user['password'])) {

          $_SESSION['user_ip'] = $_SERVER['REMOTE_ADDR'];
          $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
          $_SESSION['user_id'] = $user['id'];
          $_SESSION['user_name'] = $user['name'];
          $_SESSION['user_image'] = $user['profile_image'];
          header('location: ./');
          exit;
        } else {

          $errors['submit'] = '* Wrong email or password';
        }
      } else {
        $errors['submit'] = '* Wrong email or password';
      }
    }
  }

  $token = csrf();
} else {

  $token = csrf();
}

?>

<?php include 'tpl/header.php' ?>
<main class="min-h750">
  <div class="container">
    <section id="main-top-content">
      <div class="row">
        <div class="col mt-5">
          <h1 class="display-3 text-danger">Sign in with your account</h1>
        </div>
      </div>
    </section>
    <section id="signin-form-content">
      <div class="row">
        <div class="col-lg-6 mt-3">
          <form action="" method="POST" autocomplete="off" novalidate="novalidate">
            <input type="hidden" name="csrf_token" value="<?= $token; ?>">
            <div class="form-group">
              <label for="email">* Email:</label>
              <input value="<?= old('email'); ?>" type="email" name="email" id="email" class="form-control">
              <span class="text-danger"><?= $errors['email']; ?></span>
            </div>
            <div class="form-group">
              <label for="password">* Password:</label>
              <input type="password" name="password" id="password" class="form-control">
              <span class="text-danger"><?= $errors['password']; ?></span>
            </div>
            <input type="submit" name="submit" value="Signin" class="btn btn-danger">
            <span class="text-danger"><?= $errors['submit']; ?></span>
          </form>
        </div>
      </div>
    </section>
  </div>
</main>
<?php include 'tpl/footer.php' ?>