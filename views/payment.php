<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/checkout.css">
  <script src="https://kit.fontawesome.com/64664913ea.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <div class="contact-form">
      <div class="row mt-lg-5">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h2>Payment</h2>
          <p>Accepted Cards</p>
          <div class="icon00">
            <i class="fa fa-cc-visa" style="color:navy;"></i>
            <i class="fa fa-cc-amex" style="color:blue;"></i>
            <i class="fa fa-cc-mastercard" style="color:red;"></i>
            <i class="fa fa-cc-discover" style="color:orange;"></i>
            <i class="fa fa-cc-paypal" style="color:blue;"></i>
          </div>
          <a href="/login" class="pay"><img src="/assets/media/pay.png"></a>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
            <label for="cname">Name on Card</label>
                <input type="text" class="form-control" id="cname" name="cardname" placeholder="John More Doe">
          </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
            <label for="ccnum">Credit card number</label>
                <input type="text" class="form-control" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
          </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
            <label for="expmonth">Exp Month</label>
                <input type="text" class="form-control" id="expmonth" name="expmonth" placeholder="September">
          </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <label for="expyear">Exp Year</label>
                    <input type="text" class="form-control" id="expyear" name="expyear" placeholder="2018">
          </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <label for="cvv">CVV</label>
                    <input type="text" class="form-control" id="cvv" name="cvv" placeholder="352">
          </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
          <a href="#" class="btn00 cont-ship"> Continue to checkout</a>
          </div>
        </div>
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
</body>
</html>