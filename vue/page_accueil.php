<?php
    session_start();
    require_once("../controleur/controleur.php");
    $unControleur = new Controleur();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Application Web PHP</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

<a href="page_accueil.php" class="logo d-flex align-items-center me-auto">
  <img src="../assets/img/logo.png" alt="">
  <h1 class="sitename">Truong Son Vu</h1>
</a>

<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="page_accueil.php#hero" class="active">Accueil</a></li>
    <li><a href="page_accueil.php#liste_eleve">Dashboard</a></li>
    <li><a href="page_accueil.php#gestion_eleve">Gestion</a></li>
    <li><a href="page_accueil.php#testimonials">Avis</a></li>
    <li><a href="page_accueil.php#contact">Contact</a></li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

<a class="btn-getstarted" href="../controleur/verif_deconnexion.php">Deconnexion</a>

</div>
  </header>

  <main class="main">

    <?php
          # Hero Section
          require_once("../vue/section_hero.php");
          # Clients Section
          require_once("../vue/section_clients.php");
          # Liste Eleve Section
          require_once("../controleur/func_liste_eleve.php");
          # Gestion Eleve Section 
          require_once("../controleur/func_insert_eleve.php");
          # Avis Section
          require_once("../vue/section_testimonials.php");
          # Contact Section
          require_once("../vue/section_contact.php");
    ?>
    
  </main>

  <footer id="footer" class="footer position-relative light-background">
    <?php
        # Footer Section
        require_once("../vue/footer.php");
    ?>
  </footer>
    


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>