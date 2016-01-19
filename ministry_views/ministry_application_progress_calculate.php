
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
                Application Progress
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">Application Progress</li>
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

                            <div class="box-body">


                                <div class="col-xs-12">

                                    <div class="box">
                                        <div class="box-body table-responsive no-padding">
                                            <table class="table table-hover">
                                                <tr>
                                                    <th>#</th>
                                                    <th>School Name</th>
                                                    <th>District</th>
                                                    <th>Applications Count</th>
                                                </tr>

                                                <?php
                                                include '../php/mysql_connector.php';
                                                include '../php/controller/MethodSchController.php';
                                                include '../php/controller/ChildController.php';
                                                include '../php/controller/MethodController.php';
                                                include '../php/controller/MarkController.php';
                                                include '../php/controller/ResidentController.php';
                                                include '../php/controller/PastPupilController.php';
                                                include '../php/controller/PresentPupilController.php';
                                                include '../php/controller/StaffController.php';
                                                include '../php/model/Resident.php';
                                                include '../php/model/Staff.php';
                                                include '../php/model/PastPupil.php';
                                                include '../php/model/PresentPupil.php';
                                                include '../php/model/Selection.php';

                                                $id=$_POST["calculate_school_id"];
                                                $all_schools=getAllSchools();


                                                foreach($all_schools as $main_result){
                                                $methods=getMethod($main_result['school_id']);
                                                $select=new Selection($main_result['capacity']);
                                                foreach ($methods as $result_2) {
                                                    if (strcmp($result_2['method_name'], "RESIDENT") == 0) {
                                                        $res_detail = getAllResidenMethodInforChild($result_2['method_id']);
                                                        foreach ($res_detail as $result_3) {
                                                            $resi = new \Model\Resident($result_3['resident_id'], $result_2['method_id'], $result_3['num_of_years_spent'], $result_3['ownership'], $result_3['num_of_closes_schools'], $result_3['confirm'], null);
                                                            if ($resi->getConfirm() == 1) {

                                                                $resi_marks = $resi->getFullMarks();
                                                                $count_sel=$select->getCount("RESIDENT");
                                                                insertMarksForChild("RESIDENT", $resi_marks, $result_2['child_id']);




                                                            }

                                                        }
                                                        $resi_select=getResidentSelection($main_result['school_id']);
                                                        foreach($resi_select as $selec_resi){
                                                            if($count_sel>0){
                                                                updateMarksForChild("QUALIFIED",$result_2['child_id']);
                                                            }else{
                                                                updateMarksForChild("NOT QUALIFIED",$result_2['child_id']);
                                                            }
                                                            $count_sel-=1;
                                                        }


                                                    } elseif (strcmp($result_2['method_name'], "PAST STUDENT") == 0) {

                                                        $past_student_detail = getAllPastPupilMethodInforChild($result_2['method_id']);
                                                        foreach ($past_student_detail as $result_4) {

                                                            $resi = new \Model\PastPupil($result_4['num_of_years_studied'], $result_4['count_non_acadamic'], $result_4['ordinary_level'], $result_4['advanced_level'], $result_4['confirm'], null);
                                                            if ($resi->getConfirm() == 1) {
                                                                $resi_marks = $resi->getFullMarks();
                                                                insertMarksForChild("PAST STUDENT", $resi_marks, $result_2['child_id']);

                                                            }

                                                        }
                                                    } elseif (strcmp($result_2['method_name'], "PRESENT STUDENT") == 0) {

                                                        $present_student_detail = getAllPresentPupilMethodInforChild($result_2['method_id']);
                                                        foreach ($present_student_detail as $result_5) {
                                                            $resi = new \Model\PresentPupil($result_5['num_of_years_studied'], $result_5['count_achievement'], $result_5['confirm'], null);
                                                            if ($resi->getConfirm() == 1) {
                                                                $resi_marks = $resi->getFullMarks();
                                                                insertMarksForChild("PRESENT STUDENT", $resi_marks, $result_2['child_id']);
                                                            }


                                                        }


                                                    } elseif (strcmp($result_2['method_name'], "STAFF") == 0) {

                                                        $teacher_schools = getAllSchoolTeacherWork($result_2['method_id']);
                                                        $perman_work_yeas = 0;
                                                        $staff = new \Model\Staff(null, null, null, null, null, null, null, null, null, null);
                                                        foreach ($teacher_schools as $result_6) {


                                                            $cur_dista = getDistanceForCurrentPlace($result_6['school_id']);//output 1
                                                            foreach ($cur_dista as $result_7) {
                                                                $staff->setDistancePermananentAddress($result_7['distance_from_permanent_residence']);
                                                                $staff->setCurrentSchool($result_7['school_id']);

                                                                //check only rural for current school
                                                                $rural_stat = getCurrentSchoolStatWithYears($result_7['school_id']);

                                                                foreach ($rural_stat as $result_10) {
                                                                    $staff->setCurrentSchoolStat($result_10['is_rural']);
                                                                    $staff->setPeriodWorkRural($result_10['working_years_rural']);

                                                                }
                                                            }
                                                            $rural_work_past = getPastSchoolStatWithYears($result_6['school_id']);
                                                            foreach ($rural_work_past as $result_11) {
                                                                $staff->setPeriodWorkRuralPast($result_11['working_years_rural_past']);
                                                            }

                                                            $child_school = getChildSchool($result_6['teacher_id']);//output 1
                                                            foreach ($child_school as $result_8) {
                                                                $staff->setChildSchool($result_8['school_id']);
                                                            }

                                                            $staff->setConfirm($result_6['confirm']);
                                                        }
                                                        $perman_work_yeas = getPermanentWorkingYears($result_2['method_id']);

                                                        foreach ($perman_work_yeas as $years) {

                                                            $staff->setCompleteSeviceYearsSchoolEdu($years['working_years']);

                                                        }

                                                        if ($staff->getConfirm() == 1) {
                                                            $staff_marks = $staff->getFullMarks();
                                                            insertMarksForChild("STAFF", $staff_marks, $result_2['child_id']);
                                                        }

                                                    }

                                                }
                                                }
                                                $schools = getAllSchools();

                                                foreach ($schools as $result) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $result['school_id'] ?></td>
                                                        <td><?php echo $result['name'] ?></td>
                                                        <td><?php echo $result['district'] ?></td>
                                                        <?php
                                                        $child_count=getChildrenCount($result['school_id']);
                                                        foreach($child_count as $row) {
                                                            ?>
                                                            <td><?php echo $row['count_child'] ?></td>
                                                            <?php
                                                        }
                                                        ?>
                                                        <form method="POST" action="ministry_school_view.php">
                                                            <td><button value="School"  class="btn btn-block btn-primary btn-sm" name="view_school">View</button></td>
                                                            <input name="school_id" type="hidden" value="<?php echo $result['school_id']; ?>" />
                                                        </form>

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

