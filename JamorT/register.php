<?php require_once('./config.php') ?>
<!DOCTYPE html>
<html class="h-100" lang="en">
 <?php require_once('inc/header.php') ?>
<body class="hold-transition ">
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
  <?php if($_settings->chk_flashdata('success')): ?>
      <script>
        alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
      </script>
      <?php endif;?> 

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
       <a href="login.php" class="btn btn-dark btn-xl shadow me-1 rounded-0 my-1">Log In</a>
      </div>
    </div>
  </nav>
  
</a>       

  </header>
  <br>
  <br>
  <p>
            <main class="mb-auto col-12">
              <h1>Intern Sign Up</h1>
              <br>
              <div class="mb-3 form-check py-3">
              <label class="form-check-label" for="exampleCheck1">
              Kindly Fill the form.
              <p> Login Details wil be sent to your mail when you are verified by the <strong>Administrator</strong>. 
              <br>Thank You.</label>
              </div> 

            <div class="card-body rounded-0 text-dark">
            <form method="post" action="//submit.form" onSubmit="return validateForm();">
<div style="max-width: 400px;">
</div>
<div style="display: flex; padding-bottom: 18px;max-width : 450px;">
<div style=" margin-left: 0; margin-right: 1%; width: 49%;">First name<span style="color: red;"> *</span><br/>
<input type="text" id="data_5" name="data_5" style="max-width: 100%;" class="form-control"/>
</div>
<div style=" margin-left: 1%; margin-right: 0; width: 49%;">Last name<span style="color: red;"> *</span><br/>
<input type="text" id="data_6" name="data_6" style="max-width: 100%;" class="form-control"/>
</div>
</div><div style="padding-bottom: 18px;">Gender<span style="color: red;"> *</span><br/>
<select id="data_7" name="data_7" style="max-width : 450px;" class="form-control"><option>Male</option>
<option>Female</option>
</select>
</div>
<div style="padding-bottom: 18px;">Department<span style="color: red;"> *</span><br/>
<input type="text" id="data_8" name="data_8" style="max-width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Position<span style="color: red;"> *</span><br/>
<input type="text" id="data_9" name="data_9" style="max-width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Email<span style="color: red;"> *</span><br/>
<input type="text" id="data_11" name="data_11" style="max-width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Mobile Number<span style="color: red;"> *</span><br/>
<input type="number" id="data_12" name="data_12" style="max-width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;"><input name="skip_Submit" value="Submit" type="submit"/></div>
<div>
<script src="https://www.100forms.com/js/FORMKEY:U4J3R572JGR9" type="text/javascript"></script>
</div>
</form>
  </div>
  </div>


<script type="text/javascript">
function validateForm() {
if (isEmpty(document.getElementById('data_5').value.trim())) {
alert('First name is required!');
return false;
}
if (isEmpty(document.getElementById('data_6').value.trim())) {
alert('Last name is required!');
return false;
}
if (isEmpty(document.getElementById('data_8').value.trim())) {
alert('Department is required!');
return false;
}
if (isEmpty(document.getElementById('data_9').value.trim())) {
alert('Position is required!');
return false;
}
if (isEmpty(document.getElementById('data_11').value.trim())) {
alert('Email is required!');
return false;
}
if (!validateEmail(document.getElementById('data_11').value.trim())) {
alert('Email must be a valid email address!');
return false;
}
if (isEmpty(document.getElementById('data_12').value.trim())) {
alert('Mobile Number is required!');
return false;
}
return true;
}
function isEmpty(str) { return (str.length === 0 || !str.trim()); }
function validateEmail(email) {
var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
return isEmpty(email) || re.test(email);
}
</script>
        
     
     
    
          
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
    $(function(){
        end_loader();
        $('#registration-frm').submit(function(e){
            e.preventDefault();
            var _this = $(this)
            $('.pop-msg').remove()
            var el = $('<div>')
                el.addClass("pop-msg alert")
                el.hide()
            if($('#password').val() != $('#cpass').val()){
                el.addClass('alert-danger')
                el.text("Password does not match")
                $('#password').focus()
                $('#password, #cpass').addClass('is-invalid');
                $('#registration-frm').append(el)
                el.show('slow')
                return false;
            }
            $('#password, #cpass').removeClass('is-invalid');

            start_loader();
            $.ajax({
                url:_base_url_+"classes/Users.php?f=save_client",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error');
					end_loader();
				},
                success:function(resp){
                    if(resp == '1'){
                        location.href=_base_url_;
                    }else{
                        el.addClass("alert-danger")
                        el.text("An error occurred while registering the account.")
                        _this.prepend(el)
                    }
                    el.show('slow')
                    $('html,body').animate({scrollTop:0},'fast')
                    end_loader();
                }
            })
        })
    })
</script>
</body>
</html>