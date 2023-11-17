<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" >
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title(); ?>Tasty Food</title>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css'; ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/swiper-bundle.min.css'; ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/aos.css'; ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/all.min.css'; ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>

<body>
    <header >
      <div class="menu d-flex justify-content-center align-items-center">
        <p class="navbar-brand"> Tasty <span>.</span></p>
      </div>
       <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark p-lg-2"> 

            <div class="container">
              <!-- <a class="navbar-brand" href="#">Tasty <span>.</span></a> -->
            <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainmenu"
            >
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center center align-items-center text-center" style="position: absolut;" id="mainmenu">
                 <ul class="navbar-nav header">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">reservation</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">about</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        contact
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                     </ul>
                 </ul>
            </div>
            </div>
          </div>
         </nav> 
      </header> 
