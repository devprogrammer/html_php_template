<?php
// Grabs the URI and breaks it apart in case we have querystring stuff
$url = parse_url($_SERVER['REQUEST_URI']);

// Routing
switch ($url['path']) {
    case '/':
        require 'views/home.php';
        break;
    case '/complete';
        require 'views/complete.php';
        break;
    case '/online/creditcards/registration':
        require 'views/credit-card-registration.php';
        break;
    case '/phone-verification':
        require 'views/verify-phone.php';
        break;
    case '/signup-success':
        require 'views/signup-success.php';
        break;    
}
