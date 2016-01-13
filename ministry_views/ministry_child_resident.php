
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registrar | Application</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/skin-blue-light.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini layout-boxed" style="margin: 0 50px;">
<div class="wrapper">

    <!--    Menu-->
    <?php include 'ministry_menu.php'; ?>

    <!-- Left side column. contains the logo and sidebar -->
    <?php include 'ministry_sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Child Information
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">Child Details</li>
            </ol>
        </section>

        <form class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="full_name" class="col-sm-2 control-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" contenteditable="false" class="form-control" id="full_name" value="Kodagoda Munasinghege Supun Arunoda Munasinghe" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label for="date_of_birth" class="col-sm-2 control-label">Date of Birth</label>
                    <div class="col-sm-10">
                        <input type="text" contenteditable="false" class="form-control" id="date_of_birth" value="01/06/1992" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label for="religion" class="col-sm-2 control-label">Religion</label>
                    <div class="col-sm-10">
                        <input type="text" contenteditable="false" class="form-control" id="religion" value="Buddhism" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sex" class="col-sm-2 control-label">Sex</label>
                    <div class="col-sm-10">
                        <input type="text" contenteditable="false" class="form-control" id="sex" value="Male" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" contenteditable="false" class="form-control" id="address" value="No:35,Citrus Junction,Narawala,Poddala" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="medium" class="col-sm-2 control-label">Medium</label>
                    <div class="col-sm-10">
                        <input type="text" contenteditable="false" class="form-control" id="medium" value="Sinhala" readonly>
                    </div>
                </div>

            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
            </div><!-- /.box-footer -->
        </form>
        <!-- /.content -->
    </div>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Marking Scheme for Resident Category
                <small></small>
            </h1>

        </section>

        <form class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="full_name" class="col-sm-2 control-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" contenteditable="false" class="form-control" id="full_name" value="Kodagoda Munasinghege Supun Arunoda Munasinghe" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label for="date_of_birth" class="col-sm-2 control-label">Date of Birth</label>
                    <div class="col-sm-10">
                        <input type="text" contenteditable="false" class="form-control" id="date_of_birth" value="01/06/1992" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label for="religion" class="col-sm-2 control-label">Religion</label>
                    <div class="col-sm-10">
                        <input type="text" contenteditable="false" class="form-control" id="religion" value="Buddhism" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sex" class="col-sm-2 control-label">Sex</label>
                    <div class="col-sm-10">
                        <input type="text" contenteditable="false" class="form-control" id="sex" value="Male" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" contenteditable="false" class="form-control" id="address" value="No:35,Citrus Junction,Narawala,Poddala" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="medium" class="col-sm-2 control-label">Medium</label>
                    <div class="col-sm-10">
                        <input type="text" contenteditable="false" class="form-control" id="medium" value="Sinhala" readonly>
                    </div>
                </div>

            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
            </div><!-- /.box-footer -->
        </form>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include '../footer.php'; ?>

</div>
<!-- ./wrapper -->

<script>
    $(function () {
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        $("[data-mask]").inputmask();
    });
</script>

<!-- jQuery 2.1.4 -->
<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
