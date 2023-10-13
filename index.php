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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<style>
/* Button styles */
.login-btn {
    display: inline-block;
    padding: 10px 20px;
    margin-left: 15px;
    text-decoration: none;
    font-size: 16px;

    text-transform: uppercase;
    cursor: pointer;
    transition: background-color 0.3s;
}

/* Optional: Button styles for smaller screens */
@media (max-width: 767px) {
    .login-btn {
        padding: 4px 5px;
        font-size: 5px;
    }
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

/* Animation styles */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Applying the fadeInUp animation to the cards */
.wow.fadeInUp {
  animation-name: fadeInUp;
}

</style>

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
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="produit.php">Produit</a></li>
            <li><a class="nav-link scrollto" href="#produit">About</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <!-- New list item for the login button -->
            <li><a class="nav-link scrollto login-btn" href="login.php">Login</a></li>
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

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
      <h1>Welcome to <span>flower shop</span></h1>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    

  <!-- ======= produit Section ======= -->
<section id="produit" class="produit">
  <div class="container">

    <div class="section-title">
      <h2>Produit</h2>
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


  <!-- Card boquet de fleurs de mariage -->
<div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/mari1.jfif" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('boquet de fleurs de mariage', 50, 'assets/img/mari1.jfif')">
      <a href="assets/img/mari1.jfif" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=boquet de fleur de%20mariage&flower_price=50&flower_image=assets/img/mari1.jfif" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">boquet de fleurs de mariage </p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>

  <!-- Card boquet de fleurs de mariage -->
  <div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/mari2.jfif" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('boquet de fleurs de mariage', 50, 'assets/img/mari2.jfif')">
      <a href="assets/img/mari2.jfif" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=boquet de fleur de%20mariage&flower_price=50&flower_image=assets/img/mari2.jfif" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">boquet de fleurs de mariage </p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>


  <!-- Card boquet de fleurs de mariage -->
  <div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/mari3.jfif" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('boquet de fleurs de mariageRoses Rouge', 50, 'assets/img/mari3.jfif')">
      <a href="assets/img/mari3.jfif" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=boquet de fleur de%20mariage&flower_price=50&flower_image=assets/img/mari3.jfif" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">boquet de fleurs de mariage </p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>

  <!-- Card boquet de fleur -->
 <div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/boqu1.jfif" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('boquet de fleur', 50, 'assets/img/boqu1.jfif')">
      <a href="assets/img/boqu1.jfif" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=boquet%20de fleur&flower_price=50&flower_image=assets/img/boqu1.jfif" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">boquet de fleur </p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>

 <!-- Card boquet de fleur -->
 <div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/boqu2.jfif" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('boquet de fleur', 50, 'assets/img/boqu2.jfif')">
      <a href="assets/img/boqu2.jfif" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=boquet%20de fleur&flower_price=50&flower_image=assets/img/boqu2.jfif" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">boquet de fleur </p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>

  <!-- Card boquet de fleur -->
  <div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/boqu3.jfif" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('boquet de fleur', 50, 'assets/img/boqu3.jfif')">
      <a href="assets/img/boqu3.jfif" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=boquet%20de fleur&flower_price=50&flower_image=assets/img/boqu3.jfif" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">boquet de fleur </p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>

  <!-- Card flower box  -->
  <div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/flower1.jfif" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('flower box', 50, 'assets/img/flower1.jfif')">
      <a href="assets/img/flower1.jfif" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=flower%20box&flower_price=50&flower_image=assets/img/flower1.jfif" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">flower box </p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>

   <!-- Card flower box  -->
   <div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/flower2.jfif" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('flower box', 50, 'assets/img/flower2.jfif')">
      <a href="assets/img/flower2.jfif" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=flower%20box&flower_price=50&flower_image=assets/img/flower2.jfif" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">flower box </p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>
 
   <!-- Card flower box  -->
   <div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/flower3.jfif" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('flower box', 50, 'assets/img/flower3.jfif')">
      <a href="assets/img/flower3.jfif" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=flower%20box&flower_price=50&flower_image=assets/img/flower3.jfif" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">flower box </p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>

  <!-- Card gift box  -->
   <div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/gift3.jpg" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('gift box', 50, 'assets/img/gift3.jpg')">
      <a href="assets/img/gift3.jpg" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=gift%20box&flower_price=50&flower_image=assets/img/gift3.jpg" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">gift box </p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>

  <!-- Card gift box  -->
  <div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/gift1.jfif" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('gift box', 50, 'assets/img/gift1.jfif')">
      <a href="assets/img/gift1.jfif" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=gift%20box&flower_price=50&flower_image=assets/img/gift1.jfif" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">gift box </p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>


 
  <!-- Card gift box  -->
  <div class="col-lg-4 col-md-6 produit-item filter-Add-to-Cart wow fadeInUp">
  <div class="produit-wrap card">
    <figure>
      <img src="assets/img/gift2.jpg" class="img-fluid" alt="Roses Rouge" onclick="showProductDetails('gift box', 50, 'assets/img/gift2.jpg')">
      <a href="assets/img/gift2.jpg" data-gallery="produitGallery" class="link-preview produit-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
    </figure>

    <!-- Replace 1 with the appropriate flower ID -->
    <div style="padding: 3px;">
      <center><a href="page-commande.php?flower_name=gift%20box&flower_price=50&flower_image=assets/img/gift2.jpg" class="add-to-cart-button">Add to Cart</a></center>
    </div>

    <!-- Insert the name of the flower -->
    <center>
      <p id="flower_name">gift box </p>
      <p class="price">Price: $50</p>
    </center>
  </div>
</div>


    </div>
  </div>
</section>

    </section><!-- End produit Section -->
    <!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Contact</h2>
    </div>

    <div class="row mt-5 justify-content-center">

      <div class="col-lg-10">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-4 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>rue taher ben fraj<br>Hammamet 8050</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>benfrajwassim249@gmail.com<br>contact@example.com</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+216 50 610 207<br>+1 5589 22475 14</p>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="row mt-5 justify-content-center">
      <div class="col-lg-10">
        <form action="process_contact_form.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section>
<!-- End Contact Section -->

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
            <input type="email" name="email" required>
            <input type="submit" value="Subscribe">
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