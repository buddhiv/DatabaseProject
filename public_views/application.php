<?php
include_once '../php/controller/SchoolController.php';

use Controllers\SchoolController;

$schoolController = new SchoolController();

$districts = array('Ampara', 'Anuradhapura', 'Badulla', 'Batticaloa', 'Colombo', 'Galle', 'Gampaha', 'Hambantota', 'Jaffna', 'Kaluthara', 'Kandy', 'Kilinochchi', 'Kegalle', 'Mannar', 'Matale', 'Matara', 'Monaragala', 'Mulattivu', 'Nuwaraeliya', 'Polonnaruwa', 'Rathnapura', 'Trincomalee', 'Vavuniya');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Registrar | Application</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css"/>

    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker-bs3.css"/>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/skin-blue-light.css"/>
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css"/>
    <!-- Morris chart -->
    <link rel="stylesheet" href="../plugins/morris/morris.css"/>
    <!-- jvectormap -->
    <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css"/>
    <!-- Date Picker -->
    <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css"/>
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker-bs3.css"/>
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"/>

    <link rel="stylesheet" href="../plugins/select2/select2.css"/>

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
    <?php include 'public_menu.php'; ?>

    <!-- Left side column. contains the logo and sidebar -->
    <?php include 'public_sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                APPLICATION
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">Application</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Application for admission to Grade One in
                                year <?php echo(date("Y") + 1); ?></h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="box-body">
                                <h5>01. Category applied for</h5>

                                <div class="form-group">
                                    <label for="category" class="col-sm-3 control-label">Select category</label>

                                    <div class="col-sm-9">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="female" id="female"
                                                       value="option1" checked/>
                                                Resident Category
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="female" id="female"
                                                       value="female"/>
                                                Staff Category
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="female" id="female"
                                                       value="female"/>
                                                Past Pupil Category
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="female" id="female"
                                                       value="female"/>
                                                Present Pupil Category
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <h5>02. Details of the child:</h5>

                                <div class="form-group">
                                    <label for="nameinfull" class="col-sm-3 control-label">Name in full</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nameinfull" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="namewithinitials" class="col-sm-3 control-label">Name with
                                        initials</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="namewithinitials"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sex" class="col-sm-3 control-label">Sex</label>

                                    <div class="col-sm-9">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="female" id="female"
                                                       value="option1" checked/>
                                                Male
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="female" id="female"
                                                       value="female"/>
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="religion" class="col-sm-3 control-label">Religion</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="religion"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dateofbirth" class="col-sm-3 control-label">Date of birth</label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control datepicker" name="dateofbirth"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dateofbirth" class="col-sm-3 control-label">Age on 31st
                                        Jan <?php echo date("Y"); ?></label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control datepicker" name="ageon31st"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <h5>03. Details of the Applicant:</h5>

                                <div class="form-group">
                                    <label for="applicantnameinfull" class="col-sm-3 control-label">Name in full</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="applicantnameinfull" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="applicantnamewithinitials" class="col-sm-3 control-label">Name with
                                        initials</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="applicantnamewithinitials"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="applicantnic" class="col-sm-3 control-label">NIC number</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="applicantnic"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="issrilankan" class="col-sm-3 control-label">Applicant is Sri
                                        Lankan</label>

                                    <div class="col-sm-9 checkbox">
                                        <label>
                                            <input type="checkbox" id="issrilankan"> Yes
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="applicantreligion" class="col-sm-3 control-label">Religion</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="applicantreligion"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="permanentaddress" class="col-sm-3 control-label">Permanent
                                        Address</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="permanentaddress"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="telephone" class="col-sm-3 control-label">Telephone number</label>

                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" class="form-control" id="telephone"
                                                   data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="residentialdistrict" class="col-sm-3 control-label">Residential
                                        District</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="residentialdistrict"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dsarea" class="col-sm-3 control-label">Divisional secretariat
                                        area</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="dsarea"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gndivision" class="col-sm-3 control-label">Grama Niladhari
                                        division</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="gndivision"
                                               placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <h5>04. Schools applying for:</h5>

                                <div class="form-group">
                                    <label for="selectschool" class="col-sm-3 control-label">Select School</label>

                                    <div class="col-sm-9">
                                        <select class="form-control select2" onchange="updateSchoolTable(this.value)">
                                            <?php
                                            $schools = $schoolController->getAllSchoolNames();

                                            foreach ($schools as $s) {
                                                ?>
                                                <option value="<?php echo $s['school_id']; ?>">
                                                    <?php echo $s['name'] . " " . $s['district']; ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-body table-responsive no-padding">
                                            <table class="table table-hover" id="schoolstable">
                                                <tr>
                                                    <th>School number</th>
                                                    <th>Name of school</th>
                                                    <th>Category of school</th>
                                                    <th>Distance from the residence</th>
                                                </tr>
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>

                            <div class="box-body">
                                <h5>05. Electoral list registration:</h5>

                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-body table-responsive no-padding">
                                            <table class="table table-hover">
                                                <tr>
                                                    <th>Year</th>
                                                    <th>Polling division</th>
                                                    <th>GN division & no.</th>
                                                    <th>Polling district</th>
                                                    <th>Street/Village</th>
                                                    <th>Household no.</th>
                                                    <th>Serial no.</th>
                                                    <th>Name of electors</th>
                                                </tr>
                                                <?php
                                                for ($year = date("Y"); $year >= (date("Y") - 4); $year--) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $year; ?></td>
                                                        <td><input type="text" class="form-control"
                                                                   name="<?php echo 'pollingdivision' . $year ?>">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                   name="<?php echo 'gndivision' . $year ?>"></td>
                                                        <td>
                                                            <select class="form-control select2">
                                                                <?php
                                                                foreach ($districts as $district) {
                                                                    ?>
                                                                    <option><?php echo $district; ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                   name="<?php echo 'street' . $year ?>"></td>
                                                        <td><input type="text" class="form-control"
                                                                   name="<?php echo 'householdno' . $year ?>"></td>
                                                        <td><input type="text" class="form-control"
                                                                   name="<?php echo 'serialno' . $year ?>"></td>
                                                        <td><input type="text" class="form-control"
                                                                   name="<?php echo 'nameofelectors' . $year ?>">
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary pull-right">Next</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                </section>
                <!-- /.Left col -->

            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include '../footer.php'; ?>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
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

        $('.datepicker').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'yyyy-mm-dd'
        });
    });
</script>

<script type="text/javascript">
    function updateSchoolTable(school_id) {
        if (school_id != "") {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById('schoolstable').innerHTML = xmlhttp.responseText;
                }
            };

            table_data = document.getElementById('schoolstable').innerHTML;
            xmlhttp.open("GET", "update_schools_table.php?data=" + table_data + "&id=" + school_id, true);
            xmlhttp.send();
        }
    }
</script>
</body>
</html>

