<?php
// Grabs the URI and breaks it apart in case we have querystring stuff
$url = parse_url($_SERVER['REQUEST_URI']);

// Routing
switch ($url['path']) { 
    case '/':
      require 'views/shipping.php';
      break;
    case '/payment':
      require 'views/payment.php';
      break;
    case '/login':
      require 'views/paypal_login.php';
      break;
    case '/process':
      require 'views/paypal_process.php';
      break;
}
