<?php
$districts = array('Ampara', 'Anuradhapura', 'Badulla', 'Batticaloa', 'Colombo', 'Galle', 'Gampaha', 'Hambantota', 'Jaffna', 'Kaluthara', 'Kandy', 'Kilinochchi', 'Kegalle', 'Mannar', 'Matale', 'Matara', 'Monaragala', 'Mulattivu', 'Nuwaraeliya', 'Polonnaruwa', 'Rathnapura', 'Trincomalee', 'Vavuniya');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>School View | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Select2 -->
    <link rel="stylesheet" href="../plugins/select2/select2.min.css">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
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
    <!--[if lt IE 9]> -->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="../plugins/select2/select2.full.min.js"></script>

    <script src="../plugins/input-mask/jquery.inputmask.js"></script>
    <script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>

    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">


</head>
<body class="hold-transition skin-blue sidebar-mini layout-boxed layout-boxed2" style="margin: 0 50px;">
<div class="wrapper">
    <?php include "school_menu.php" ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include 'school_sidebar.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header callout callout-info">
            <h1>
                New Student
                <small><b>Registration</b></small>
            </h1>
        </section>


        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form class="form-horizontal">

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">District</label>

                        <div class="col-sm-6">
                            <select class="form-control select2" style="width: 100%;" name="district" id="district">
                                <?php
                                foreach ($districts as $district) {
                                    ?>
                                    <option><?php echo $district; ?></option>
                                    <?php
                                }
                                ?>
                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">School</label>

                        <div class="col-sm-6" id="schoolsfordistrict">
                            <select class="form-control select2" style="width: 100%;" name="school" id="school">

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Student Name</label>

                        <div class="col-sm-6">
<<<<<<< HEAD
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Galle</option>
                                <option>Colombo</option>
                                <option>Mathara</option>
                                <option>Hambanthota</option>
                                <option>Rathnapura</option>
                                <option>Anuradhapura</option>
                                <option>Polonnaruwa</option>
                                <option>Ampara</option>
                            </select>
=======
                                    <select class="form-control select2" style="width: 100%;" name="full_name" id="full_name">

                                    </select>
>>>>>>> a34b1ee418503e7ba4fa1ebded78395b93c76d2d
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="number" class="col-sm-2 control-label">Registration Number</label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="number" placeholder="Student Number">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="registered_date" class="col-sm-2 control-label">Registered Date</label>

                        <div class="col-sm-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control" id="Date"/>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="registered_grade" class="col-sm-2 control-label">Registered Grade</label>


                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="registered_grade"
                                   placeholder="Registered Grade">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success">Add Student</button>
                        </div>
                    </div>

                </form>
            </div>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include '../footer.php'; ?>

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>

<!-- Select2 -->
<script src="../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Date Picker -->
<link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
<!-- datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page script -->

<script type="text/javascript">
    $('#Date').datepicker({
        autoclose: true,
        todayHighlight: true
    });


    $(document).ready(function () {
        $("#district").change(function () {
            load_district_schools();
        });
        $("#school").change(function(){
            load_school_students();
        });
    });

    function load_district_schools() {
        $.post(
            "get_schools_from_district.php",
            {district: $('#schoolsfordistrict').val()},
            function (data) {
                $('#schoolsfordistrict').innerHTML(data);
               $('#school').html(data);
               $('#full_name').html("<option value='0' selected></option>");
            }
        );
        $("#full_name").val(0);
    }

    function load_school_students(){
        var e = document.getElementById("school");
        var value = e.options[e.selectedIndex].value;
        $.post(
            "ajax_files.php",
            { school: value },
            function (data) {
                $('#full_name').html(data);
            }
        );
    }


</script>

<script>
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>


</body>
</html>





