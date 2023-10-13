<style>
    /**
* Template Name: Lumia
* Updated: Jul 27 2023 with Bootstrap v5.3.1
* Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: "Open Sans", sans-serif;
  color: #444444;
}

a {
  color: #3498db;
  text-decoration: none;
}

a:hover {
  color: #5faee3;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Raleway", sans-serif;
}

/*--------------------------------------------------------------


/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  height: 70px;
  transition: all 0.5s;
  z-index: 997;
  transition: all 0.5s;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

#header .logo h1 {
  font-size: 28px;
  margin: 0;
  font-weight: 600;
  letter-spacing: 1px;
  text-transform: uppercase;
  color: #384046;
}

#header .logo h1 a,
#header .logo h1 a:hover {
  color: #384046;
  text-decoration: none;
}

#header .logo img {
  max-height: 40px;
}

/*--------------------------------------------------------------
# Header Social Links
--------------------------------------------------------------*/
.header-social-links {
  margin: 0 0 0 30px;
}

.header-social-links a {
  color: #9ba6af;
  padding-left: 8px;
  display: inline-block;
  line-height: 0px;
  transition: 0.3s;
}

.header-social-links a i {
  line-height: 0;
}

.header-social-links a:hover {
  color: #3498db;
}

@media (max-width: 768px) {
  .header-social-links {
    margin: 0 15px 0 0;
  }
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar a,
.navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  font-family: "Poppins", sans-serif;
  font-size: 16px;
  font-weight: 500;
  color: #4f5a62;
  white-space: nowrap;
  transition: 0.3s;
}

.navbar a i,
.navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
  color: #3498db;
}



/*--------------------------------------------------------------
# produit
--------------------------------------------------------------*/
.produit {
  padding: 60px 0;
}

.produit #produit-flters {
  padding: 0;
  margin: 0 0 35px 0;
  list-style: none;
  text-align: center;
}

.produit #produit-flters li {
  cursor: pointer;
  margin: 0 15px 15px 0;
  display: inline-block;
  padding: 10px 20px;
  font-size: 12px;
  line-height: 20px;
  color: #444444;
  border-radius: 4px;
  text-transform: uppercase;
  background: #fff;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
}

.produit #produit-flters li:hover,
.produit #produit-flters li.filter-active {
  background: #3498db;
  color: #fff;
}

.produit #produit-flters li:last-child {
  margin-right: 0;
}

.produit .produit-wrap {
  box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
  transition: 0.3s;
}

.produit .produit-wrap:hover {
  box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.16);
}

.produit .produit-item {
  position: relative;
  height: 360px;
  overflow: hidden;
}

.produit .produit-item figure {
  background: #000;
  overflow: hidden;
  height: 240px;
  position: relative;
  border-radius: 4px 4px 0 0;
  margin: 0;
}

.produit .produit-item figure:hover img {
  opacity: 0.4;
  transition: 0.4s;
}

.produit .produit-item figure .link-preview,
.produit .produit-item figure .link-details {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  line-height: 0;
  text-align: center;
  width: 36px;
  height: 36px;
  background: #fff;
  border-radius: 50%;
  transition: all 0.2s linear;
  overflow: hidden;
  font-size: 20px;
}

.produit .produit-item figure .link-preview i,
.produit .produit-item figure .link-details i {
  color: #384046;
  line-height: 0;
}

.produit .produit-item figure .link-preview:hover,
.produit .produit-item figure .link-details:hover {
  background: #3498db;
}

.produit .produit-item figure .link-preview:hover i,
.produit .produit-item figure .link-details:hover i {
  color: #fff;
}

.produit .produit-item figure .link-preview {
  left: calc(50% - 38px);
  top: calc(50% - 18px);
}

.produit .produit-item figure .link-details {
  right: calc(50% - 38px);
  top: calc(50% - 18px);
}

.produit .produit-item figure:hover .link-preview {
  opacity: 1;
  left: calc(50% - 44px);
}

.produit .produit-item figure:hover .link-details {
  opacity: 1;
  right: calc(50% - 44px);
}

.produit .produit-item .produit-info {
  background: #fff;
  text-align: center;
  padding: 30px;
  height: 90px;
  border-radius: 0 0 3px 3px;
}

.produit .produit-item .produit-info h4 {
  font-size: 18px;
  line-height: 1px;
  font-weight: 700;
  margin-bottom: 18px;
  padding-bottom: 0;
}

.produit .produit-item .produit-info h4 a {
  color: #333;
}

.produit .produit-item .produit-info h4 a:hover {
  color: #3498db;
}

.produit .produit-item .produit-info p {
  padding: 0;
  margin: 0;
  color: #b8b8b8;
  font-weight: 500;
  font-size: 14px;
  text-transform: uppercase;
}

/*--------------------------------------------------------------
# produit Details
--------------------------------------------------------------*/
.produit-details {
  padding-top: 0;
}

.produit-details .produit-details-slider img {
  width: 100%;
}

.produit-details .produit-details-slider .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.produit-details .produit-details-slider .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #3498db;
}

.produit-details .produit-details-slider .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #3498db;
}

.produit-details .produit-info {
  padding: 30px;
  box-shadow: 0px 0 30px rgba(56, 64, 70, 0.08);
}

.produit-details .produit-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #eee;
}

.produit-details .produit-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.produit-details .produit-info ul li+li {
  margin-top: 10px;
}

.produit-details .produit-description {
  padding-top: 30px;
}

.produit-details .produit-description h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}

.produit-details .produit-description p {
  padding: 0;
}
/*--------------------------------------------------------------

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  color: #444444;
  font-size: 14px;
  background: #f7fbfe;
}

#footer .footer-top {
  padding: 60px 0 30px 0;
  background: #fff;
}

#footer .footer-top .footer-contact {
  margin-bottom: 30px;
}

#footer .footer-top .footer-contact h4 {
  font-size: 22px;
  margin: 0 0 30px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-weight: 700;
}

#footer .footer-top .footer-contact p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Raleway", sans-serif;
  color: #777777;
}

#footer .footer-top h4 {
  font-size: 16px;
  font-weight: bold;
  color: #444444;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #3498db;
  font-size: 18px;
  line-height: 1;
}

#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #777777;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
  text-decoration: none;
  color: #3498db;
}

#footer .footer-newsletter {
  font-size: 15px;
}

#footer .footer-newsletter h4 {
  font-size: 16px;
  font-weight: bold;
  color: #444444;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-newsletter form {
  margin-top: 30px;
  background: #fff;
  padding: 6px 10px;
  position: relative;
  border-radius: 4px;
  text-align: left;
  border: 1px solid #b6daf2;
}

#footer .footer-newsletter form input[type=email] {
  border: 0;
  padding: 4px 8px;
  width: calc(100% - 100px);
}

#footer .footer-newsletter form input[type=submit] {
  position: absolute;
  top: 0;
  right: -2px;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px 2px 20px;
  background: #3498db;
  color: #fff;
  transition: 0.3s;
  border-radius: 0 4px 4px 0;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

#footer .footer-newsletter form input[type=submit]:hover {
  background: #57aae1;
}

#footer .credits {
  padding-top: 5px;
  font-size: 13px;
  color: #444444;
}

#footer .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #3498db;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .social-links a:hover {
  background: #5faee3;
  color: #fff;
  text-decoration: none;
}
/* General styles for the card */
.produit-wrap {
  border: 4px solid #ccc;
  padding: 10px;
  background-color: #fff;
  text-align: center;
}

.produit-wrap figure {
  margin-bottom: 10px;
}

.produit-wrap img {
  width: auto;
  max-height: auto; /* Adjust the max-height as needed */
}

.produit-wrap p {
  margin: 0;
}

/* Button styles */
.add-to-cart-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #f47a7a;
  color: #fff;
  text-decoration: none;
  border-radius: auto;
  transition: background-color 0.3s ease;
}

.add-to-cart-button:hover {
  background-color: aquamarine;
}

  .centered {
    animation: slideIn 2s ease;
}

@keyframes slideIn {
    0% {
        transform: translateY(-100%);
    }
    100% {
        transform: translateY(0);
    }
}

.roses-rouge {
    background-color: #f1f1f1;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>flower shop</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.php">flower shop</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li> <a class="nav-link" href="boquetdemariage.php">Boquet de Fleurs de Mariage</a></li>
          <li> <a class="nav-link" href="roses_rouge.php">Roses Rouge</a></li>
          <li><a class="nav-link" href="boquets.php">Bouquets</a></li>
          <li><a class="nav-link" href="flowerbox.php">flower box</a></li>
          <li><a class="nav-link" href="gift.php">Gift Box</a></li>
        </ul>
    
      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
    

    </div>
  </section><!-- End Hero -->

  <main id="main">

    

   <!-- ======= produit Section ======= -->
<section id="produit" class="produit">
  <div class="container">

    <div class="section-title">
      <br>
      <center>
      <div class="centered">
        <h2 class="roses-rouge">roses rouge</h2>
        </center>
    </div>

    <div class="row produit-container">

<!-- Card roses rouge -->
<div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/rosee.jpg" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('Roses Rouge', 50, 'assets/img/rosee.jpg')">
      <a href="assets/img/rosee.jpg" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=Roses%20Rouge&flower_price=50&flower_image=assets/img/rosee.jpg" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">Roses Rouge</p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>




<!-- Card roses rouge -->
<div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/rose2.jfif" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('Roses Rouge', 50, 'assets/img/rose2.jfif')">
      <a href="assets/img/rose2.jfif" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=Roses%20Rouge&flower_price=50&flower_image=assets/img/rose2.jfif" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">Roses Rouge</p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>


<!-- Card roses rouge -->
<div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/rose3.jpg" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('Roses Rouge', 50, 'assets/img/rose3.jpg')">
      <a href="assets/img/rose3.jpg" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=Roses%20Rouge&flower_price=50&flower_image=assets/img/rose3.jpg" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">Roses Rouge</p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>
<!-- Card roses rouge -->
<div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/rosee.jpg" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('Roses Rouge', 50, 'assets/img/rosee.jpg')">
      <a href="assets/img/rosee.jpg" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=Roses%20Rouge&flower_price=50&flower_image=assets/img/rosee.jpg" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">Roses Rouge</p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>




<!-- Card roses rouge -->
<div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/rose2.jfif" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('Roses Rouge', 50, 'assets/img/rose2.jfif')">
      <a href="assets/img/rose2.jfif" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=Roses%20Rouge&flower_price=50&flower_image=assets/img/rose2.jfif" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">Roses Rouge</p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>


<!-- Card roses rouge -->
<div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/rose3.jpg" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('Roses Rouge', 50, 'assets/img/rose3.jpg')">
      <a href="assets/img/rose3.jpg" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=Roses%20Rouge&flower_price=50&flower_image=assets/img/rose3.jpg" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">Roses Rouge</p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>
<!-- Card roses rouge -->
<div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/rosee.jpg" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('Roses Rouge', 50, 'assets/img/rosee.jpg')">
      <a href="assets/img/rosee.jpg" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=Roses%20Rouge&flower_price=50&flower_image=assets/img/rosee.jpg" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">Roses Rouge</p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>




<!-- Card roses rouge -->
<div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/rose2.jfif" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('Roses Rouge', 50, 'assets/img/rose2.jfif')">
      <a href="assets/img/rose2.jfif" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=Roses%20Rouge&flower_price=50&flower_image=assets/img/rose2.jfif" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">Roses Rouge</p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>


<!-- Card roses rouge -->
<div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/rose3.jpg" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('Roses Rouge', 50, 'assets/img/rose3.jpg')">
      <a href="assets/img/rose3.jpg" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=Roses%20Rouge&flower_price=50&flower_image=assets/img/rose3.jpg" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">Roses Rouge</p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>
<!-- Card roses rouge -->
<div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/rosee.jpg" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('Roses Rouge', 50, 'assets/img/rosee.jpg')">
      <a href="assets/img/rosee.jpg" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=Roses%20Rouge&flower_price=50&flower_image=assets/img/rosee.jpg" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">Roses Rouge</p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>




<!-- Card roses rouge -->
<div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/rose2.jfif" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('Roses Rouge', 50, 'assets/img/rose2.jfif')">
      <a href="assets/img/rose2.jfif" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=Roses%20Rouge&flower_price=50&flower_image=assets/img/rose2.jfif" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">Roses Rouge</p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>


<!-- Card roses rouge -->
<div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/rose3.jpg" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('Roses Rouge', 50, 'assets/img/rose3.jpg')">
      <a href="assets/img/rose3.jpg" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=Roses%20Rouge&flower_price=50&flower_image=assets/img/rose3.jpg" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">Roses Rouge</p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>
    </div>
  </div>
</section>
<!-- End produit Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>flower shop</h3>
            <p>
              rue taher ben fraj <br>
              Hammamet 8050<br>
              tunisie <br><br>
              <strong>Phone:</strong> +216 50 610 207<br>
              <strong>Email:</strong> benfrajwassim249@gmail.com<br>
            </p>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>flower shop </span></strong>. All Rights Reserved
        </div>
      
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>