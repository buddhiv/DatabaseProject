<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
/**
 * Created by PhpStorm.
 * User: Buddhi
 * Date: 1/6/2016
 * Time: 9:49 AM
 */
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../images/school_badge/<?php echo $_SESSION['school_id']?>.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $_SESSION['school_name']?></p>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="school_index.php">
                    <i class="fa fa-home"></i> <span>Home Page</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-plus"></i>
                    <span>Add Student</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="add_student.php"><i class="fa fa-circle-o"></i>Add New Student</a></li>
                    <li><a href="add_transferred_student.php"><i class="fa fa-circle-o"></i>Add Transferred Student</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-plus"></i>
                    <span>Add Teacher</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="add_teacher.php"><i class="fa fa-circle-o"></i>Add New Teacher</a></li>
                    <li><a href="add_transferred_teacher.php"><i class="fa fa-circle-o"></i>Add Transferred Teacher</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil-square-o"></i>
                    <span>Add Records</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="leaving_record.php"><i class="fa fa-circle-o"></i>Add Leaving Record</a></li>
                    <li><a href="add_acadamic_achievement.php"><i class="fa fa-circle-o"></i>Add Acadamic Achievements</a>
                    </li>
                    <li><a href="add_non_acadamic_achievement.php"><i class="fa fa-circle-o"></i>Add Non Acadamic
                            Achievements</a></li>
                </ul>
            </li>

            <li>
                <a href="view_applications.php">
                    <i class="fa fa-folder"></i> <span>View Applications</span>
                    <small class="label pull-right bg-green">new</small>
                </a>
            </li>


    </section>
    <!-- /.sidebar -->
</aside>