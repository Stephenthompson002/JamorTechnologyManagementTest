<?php require_once('./config.php') ?>
<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<
    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/jqvmap/jqvmap.min.css">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/fullcalendar/main.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url ?>dist/css/adminlte.css">
    <link rel="stylesheet" href="<?php echo base_url ?>dist/css/custom.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.css">
     <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <style type="text/css">/* Chart.js */
      @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
    </style>

     <!-- jQuery -->
    <script src="<?php echo base_url ?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url ?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?php echo base_url ?>plugins/toastr/toastr.min.js"></script>
    <script>
        var _base_url_ = '<?php echo base_url ?>';
    </script>
    <script src="<?php echo base_url ?>dist/js/script.js"></script>

  </head>
  <?php if(isset($_GET['id'])){
    $qry = $conn->query("SELECT * FROM `employee_list` where id = '{$_GET['id']}'");
    if($qry->num_rows > 0){
        $res = $qry->fetch_array();
        foreach($res as $k => $v){
            if(!is_numeric($k))
            $$k = $v;
        }
    }
}?>
 <style>
	img#cimg{
		height: 15vh;
		width: 15vh;
		object-fit: cover;
		border-radius: 100% 100%;
	}
</style>

      <body class="d-flex h-100 w-100" data-bs-spy="scroll" data-bs-target="#navScroll">
      <div class="h-100 container-fluid">
      <div class="h-100 row d-flex align-items-stretch">
        
          <div class="col-12 col-md-7 col-lg-6 d-flex align-items-start flex-column px-vw-5">
          
            <header class="mb-auto py-vh-2 col-12">
              <a class="navbar-brand pe-4 fs-4" href="index.php">
  


			  <div class="container-fluid">
    <form id="employee-form" action="" method="post">
        <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>">
        <input type="hidden" name="generated_password" value="<?= isset($generated_password) ? $generated_password : '' ?>">
        <div class="row">
            <div class="form-group col-md-4">
                <input type="text" name="code" id="code" placeholder="2022-0001" autofocus required class="form-control form-control-sm form-control-border" value="<?= isset($code) ? $code :"" ?>">
                <small class="mx-2">Employee Code</small>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <input type="text" name="firstname" id="firstname" placeholder="John" autofocus required class="form-control form-control-sm form-control-border" value="<?= isset($firstname) ? $firstname :"" ?>">
                <small class="mx-2">Firstname</small>
            </div>
            <div class="form-group col-md-4">
                <input type="text" name="middlename" id="middlename" placeholder="(optional)" class="form-control form-control-sm form-control-border" value="<?= isset($middlename) ? $middlename :"" ?>">
                <small class="mx-2">Middlename</small>
            </div>
            <div class="form-group col-md-4">
                <input type="text" name="lastname" id="lastname" placeholder="Smith" required class="form-control form-control-sm form-control-border" value="<?= isset($lastname) ? $lastname :"" ?>">
                <small class="mx-2">Lastname</small>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <select name="gender" id="gender" class="form-control form-control-sm form-control-border" required>
                    <option <?= isset($gender) && $gender =='Male' ? 'selected' : "" ?>>Male</option>
                    <option <?= isset($gender) && $gender =='Female' ? 'selected' : "" ?>>Female</option>
                </select>
                <small class="mx-2">Gender</small>
            </div>
            <div class="form-group col-md-4">
                <input type="text" name="department" id="department" placeholder="IT Department" required class="form-control form-control-sm form-control-border"  value="<?= isset($department) ? $department :"" ?>">
                <small class="mx-2">Department</small>
            </div>
            <div class="form-group col-md-4">
                <input type="text" name="position" id="position" placeholder="Web Developer" required class="form-control form-control-sm form-control-border" value="<?= isset($position) ? $position :"" ?>">
                <small class="mx-2">Position</small>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-10">
                <input type="email" name="email" id="email" placeholder="jsmith@sample.com" required class="form-control form-control-sm form-control-border" value="<?= isset($email) ? $email :"" ?>">
                <small class="mx-2">Email</small>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-10">
                <div class="input-group input-group-sm">
                    <input type="password" name="password" id="password" class="form-control form-control-sm form-control-border" value="<?= isset($generated_password) && !empty($generated_password) ? $generated_password : '' ?>" readonly <?= !isset($id) ? 'required' : '' ?> >
                    <div class="input-group-append ">
                    <span class="input-group-text bg-transparent border-top-0 border-left-0 border-right-0 rounded-0"><a href="javascript:void(0)" id="pass_view" class="text-decoration-none text-muted"><i class="fas fa-eye-slash"></i></a></span>
                    </div>
                </div>
                <small class="mx-2">Password</small>
            </div>
            <div class="col-md-2">
                <button class="btn btn-sm btn-light border rounded-0" type="button" id="generate-btn">Generate</button>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="control-label">Avatar</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input rounded-circle" id="customFile" name="img" onchange="displayImg(this,$(this))">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <div class="form-group d-flex justify-content-center">
            <img src="<?php echo validate_image(isset($avatar) ? $avatar :'') ?>" alt="" id="cimg" class="img-fluid img-thumbnail">
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <select name="status" id="status" class="form-control form-control-sm form-control-border" required>
                    <option value ='1' <?= isset($status) && $status == 1 ? 'selected' : "" ?>>Active</option>
                    <option value ='0' <?= isset($status) && $status == 0 ? 'selected' : "" ?>>Inactive</option>
                </select>
                <small class="mx-2">Status</small>
            </div>
        </div>
    </form>
</div>
<div class="card-footer">
			<div class="col-md-12">
				<div class="row">
					<button class="btn btn-sm btn-primary mr-2" form="employee-form">Save</button>
					</div>
			</div>
		</div>
</div>
<script>
  $(document).ready(function(){
     window.viewer_modal = function($src = ''){
      start_loader()
      var t = $src.split('.')
      t = t[1]
      if(t =='mp4'){
        var view = $("<video src='"+$src+"' controls autoplay></video>")
      }else{
        var view = $("<img src='"+$src+"' />")
      }
      $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
      $('#viewer_modal .modal-content').append(view)
      $('#viewer_modal').modal({
              show:true,
              backdrop:'static',
              keyboard:false,
              focus:true
            })
            end_loader()  

  }
    window.uni_modal = function($title = '' , $url='',$size=""){
        start_loader()
        $.ajax({
            url:$url,
            error:err=>{
                console.log()
                alert("An error occured")
            },
            success:function(resp){
                if(resp){
                    $('#uni_modal .modal-title').html($title)
                    $('#uni_modal .modal-body').html(resp)
                    if($size != ''){
                        $('#uni_modal .modal-dialog').addClass($size+'  modal-dialog-centered')
                    }else{
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                    }
                    $('#uni_modal').modal({
                      show:true,
                      backdrop:'static',
                      keyboard:false,
                      focus:true
                    })
                    end_loader()
                }
            }
        })
    }
    window._conf = function($msg='',$func='',$params = []){
       $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
       $('#confirm_modal .modal-body').html($msg)
       $('#confirm_modal').modal('show')
    }
  })
</script>
<footer class="main-footer text-sm">
        <strong>Copyright © <?php echo date('Y') ?>. 
        <!-- <a href=""></a> -->
        </strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b><?php echo $_settings->info('short_name') ?> (by: <a href="mailto:Stephen Thompson@gmail.com" target="blank">Stephen Thompson</a> )</b> v1.0
        </div>
      </footer>
    </div>
    <!-- ./wrapper -->
<div id="libraries">
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url ?>plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url ?>plugins/sparklines/sparkline.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url ?>plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url ?>plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url ?>plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url ?>plugins/fullcalendar/main.js"></script>
    <!-- overlayScrollbars -->
    <!-- <script src="<?php echo base_url ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="<?php echo base_url ?>dist/js/adminlte.js"></script>
  </div>   
    <div class="daterangepicker ltr show-ranges opensright">
      <div class="ranges">
        <ul>
          <li data-range-key="Today">Today</li>
          <li data-range-key="Yesterday">Yesterday</li>
          <li data-range-key="Last 7 Days">Last 7 Days</li>
          <li data-range-key="Last 30 Days">Last 30 Days</li>
          <li data-range-key="This Month">This Month</li>
          <li data-range-key="Last Month">Last Month</li>
          <li data-range-key="Custom Range">Custom Range</li>
        </ul>
      </div>
      <div class="drp-calendar left">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-calendar right">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
    </div>
    <div class="jqvmap-label" style="display: none; left: 1093.83px; top: 394.361px;">Idaho</div>
<script>
    function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }else{
	        	$('#cimg').attr('src', "<?php echo validate_image(isset($avatar) ? $avatar :'') ?>");
        }
	}
    function generate_pass(){
        var randomstring = Math.random().toString(36).slice(-8);
        $('input[name="generated_password"]').val(randomstring)
        $('#password').val(randomstring)
        $('#uni_modal #employee-form #password').attr('type','text')
        $('#pass_view').html('<i class="fa fa-eye"></i>')
    }
    $(function(){
        $('#generate-btn').click(function(){
            generate_pass()
        })
        $('#pass_view').click(function(){
            var type = $('#uni_modal #employee-form #password').attr('type')
            if(type == 'password'){
                $('#uni_modal #employee-form #password').attr('type','text')
                $(this).html('<i class="fa fa-eye"></i>')
            }else{
                $('#uni_modal #employee-form #password').attr('type','password')
                $(this).html('<i class="fa fa-eye-slash"></i>')
            }
        })
        $('#uni_modal #employee-form').submit(function(e){
            e.preventDefault();
            var _this = $(this)
            $('.pop-msg').remove()
            var el = $('<div>')
                el.addClass("pop-msg alert")
                el.hide()
            start_loader();
            $.ajax({
                url:_base_url_+"classes/Users.php?f=save_employee",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error');
					end_loader();
				},
                success:function(resp){
                    if(resp.status == 'success'){
                        location.reload();
                    }else if(!!resp.msg){
                        el.addClass("alert-danger")
                        el.text(resp.msg)
                        _this.prepend(el)
                    }else{
                        el.addClass("alert-danger")
                        el.text("An error occurred due to unknown reason.")
                        _this.prepend(el)
                    }
                    el.show('slow')
                    $('html,body,.modal').animate({scrollTop:0},'fast')
                    end_loader();
                }
            })
        })
    })
</script>
</body>
</html>