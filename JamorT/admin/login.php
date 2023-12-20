<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html class="h-100" lang="en">
 <?php require_once('inc/header.php') ?>
 <body class="d-flex h-100 w-100" data-bs-spy="scroll" data-bs-target="#navScroll">
  <script>
    start_loader()
  </script>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="A growing collection of ready to use components for the CSS framework Bootstrap 5">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
  <meta name="author" content="Stephen Thompson">
  <meta name="generator" content="Eleventy v2.0.0">
  <meta name="HandheldFriendly" content="true">
  <title>Login</title>
  <link rel="stylesheet" href="css/theme.min.css">

   <style>
    /* inter-300 - latin */
@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local(''),
       url('./fonts/inter-v12-latin-300.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
       url('./fonts/inter-v12-latin-300.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
}

@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: local(''),
       url('./fonts/inter-v12-latin-500.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
       url('./fonts/inter-v12-latin-500.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
}
@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local(''),
       url('./fonts/inter-v12-latin-700.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
       url('./fonts/inter-v12-latin-700.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
}
</style>

</head>

  
      <body class="d-flex h-100 w-100" data-bs-spy="scroll" data-bs-target="#navScroll">
      <div class="h-100 container-fluid">
      <div class="h-100 row d-flex align-items-stretch">
        
          <div class="col-12 col-md-7 col-lg-6 d-flex align-items-start flex-column px-vw-5">
          
            <header class="mb-auto py-vh-2 col-12">
              <a class="navbar-brand pe-4 fs-4" href="index.php">
  


  <nav id="navScroll" class="navbar navbar-expand-lg navbar-light fixed-top" tabindex="0">
    <div class="container">
    
        <svg xmlns="http://www.w3.org/2000/svg"width="32" height="32" fill="currentColor" class="bi bi-layers-half"
          viewbox="0 0 16 16">
           <image href="img/Jamor_Technology_32x32.png" height="20" width="18" />
        </svg>
        <span class="ms-1 fw-bolder">Jamor Technology</span>
      </a>
      <div class="col=12" id="navbarSupportedContent">
       <a class="btn btn-dark btn-xl shadow me-1 rounded-0 my-1" href="<?php echo base_url ?>">Log In</a>
      </div>
    </div>
  </nav>
  
</a>
</header>
            <main class="mb-auto col-12">
              <h1>Administrator 
                <p>Login</h1>
      
              <form id="login-frm" action="" method="post">
            <div class="col-12 col-lg-10 col-xl-8">
            <div class="mb-3">
              <div class="input-group mb-3">
                <input type="text" class="form-control" autofocus name="username" placeholder="Username">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <a href="<?php echo base_url ?>">Go to Employee-Side</a>
                </div>
                <p>
                <!-- /.col -->
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
            </main>
          </div>
          
            <div class="col-12 col-md-5 col-lg-6 bg-cover" style="background-image: url('img/webp/Jamor_Technology_1383x1383.webp');"></div>
            </div>
            <footer>
          <div class="container text-center py-3 small">Made by <a href="https://github.com/JamorTechnologyDevelopers" class="link-fancy"
            target="_blank">Jamor Technology Developers</a> Distributed By <a href="https://github.com/Stephenthompson002">Stephen Thompson</a>
        </div>
        
        </footer>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>