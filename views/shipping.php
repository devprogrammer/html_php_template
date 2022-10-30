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
          <div class="contact-form-left">
            <h2>Contact Information</h2>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12"></div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <p class="al_acc">Already have an account? Log in</p>	
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
          <input type="checkbox" id="email_checkbox" name="" value=""><span> Email me with news and offers</span>
        </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h2>Shipping Address</h2>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
          <select class="form-control" id="country" name="">
            <option value="volvo">Country/Region</option>
            <option value="saab">Japan</option>
            <option value="fiat">USA</option>
            <option value="audi">Australia</option>
          </select>
        </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
          <input type="text" class="form-control" id="l_name" name="" Placeholder="Last name">
        </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
          <input type="text" class="form-control" id="f_name" name="" Placeholder="First name">
        </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
          <input type="text" class="form-control" id="p_code" name="" Placeholder="Postal code">
        </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
          <select class="form-control" id="prefecture" name="">
            <option value="volvo">Prefecture</option>
            <option value="saab">Japan</option>
            <option value="fiat">USA</option>
            <option value="audi">Australia</option>
          </select>
        </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
          <input type="text" class="form-control" id="city" name="" Placeholder="City/ward/town/village">
        </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
          <input type="text" class="form-control" id="address" name="" Placeholder="Address">
        </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
          <input type="text" class="form-control" id="city" name="" Placeholder="Apartment, suite, etc. (optional)">	
        </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
          <input type="text" class="form-control" id="phone" name="" Placeholder="Phone">	
        </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
          <input type="checkbox" id="email_checkbox" name="" value=""><span> Text me with news and offers</span>
        </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <a href="#" class="btn00 cart_00"><i class="fa fa-arrow-left"></i> Return to cart</a>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <a href="/payment" class="btn00 cont-ship"> Continue to shipping</a>
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