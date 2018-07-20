<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>D-Uñas y Pies</title>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/app.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">
  <link href="css/lightboxgallery-min.css" rel="stylesheet" media="screen">
  <link href="css/owl.carousel.min.css" rel="stylesheet" media="screen">
  <link href="css/owl.theme.default.min.css" rel="stylesheet" media="screen">

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Menú -->
    @include('partials.menu')
    <a href="#nosotros" class="scroll-down btn btn-theme size-10px">Deslice &nbsp;<i class="fa fa-chevron-down"></i></a>
    <!-- Banner -->
    @include('partials.banner')

    <!-- Page Content -->
    <div class="">

      @section('content')
      @show

    </div>
    <!-- /.container -->

    <!-- Footer -->
    @include('partials.footer')
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Bootstrap core JavaScript -->
    <!-- js -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/mb.bgndGallery.js"></script>
    <script src="js/mb.bgndGallery.effects.js"></script>
    <script src="js/jquery.simple-text-rotator.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/grid.js"></script>
    <script src="js/stellar.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="js/contactform.js"></script>
    
    <!-- Template Custom Javascript File -->
    <script src="js/custom.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/lightboxgallery-min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript">
      jQuery(function($) {
        $(document).on('click', '.lightboxgallery-gallery-item', function(event) {
          event.preventDefault();
          $(this).lightboxgallery({
            showCounter: true,
            showTitle: true,
            showDescription: true
          });
        });
      });
      jQuery(document).ready(function($) {
        $('.custom1').owlCarousel({
          animateIn: 'rollIn',
          items: 1,
          margin: 30,
          stagePadding: 30,
          smartSpeed: 350,
          loop:true,
          autoplay:true,
          autoplayTimeout:7000,
          autoplayHoverPause:true,
        });
      });
    </script>
  </body>

  </html>
