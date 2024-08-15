<?php require 'includes/functions.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="icon/fav.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <title><?php echo $title_name ?></title>

</head>

<body>
    <div id="navbarAbove">
        <div class="container text-end">
            <span class="styled-link"><i class="fa fa-phone" aria-hidden="true"></i> |
                <a href="tel:<?php echo $tel_no ?>"><?php echo $tel_no ?></a></span>
            <span class="styled-link" style="margin-top: 15px; margin-left: 10px">
                <a href="mailto:info@getmycertificationdone.com">
                    <span><i class="fa fa-envelope"></i> | </span>info@getmycertificationdone.com</a></span>
        </div>
    </div>
    <nav id="navbarBelow" class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="https://getmycertificationdone.com/"><img src="img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-stream"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="https://getmycertificationdone.com/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="terms-conditions">Terms &amp; Conditions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us">Contact Us</a>
                    </li>
                </ul>
            </div
           
                <a href="https://api.whatsapp.com/send?phone=++15594609608&amp;text=Hi%20getmycertificationsdone.com," class="navbar-right-button ms-auto ms-lg-0" target="_blank"><i class="fa-brands fa-whatsapp"></i> Whatsapp Now</a>

        </div>
    </nav>