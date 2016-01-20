<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Children of persons belonging to the staff in an institution directly involved in school
            education</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="application_controller.php">
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-3 control-label pull-left" for="posts" style="text-align: left;">
                    Select District
                </label>

                <div class="col-sm-9">
                    <select class="form-control select2" id="district" onchange="load_district_schools(this.value)">
                        <option></option>
                        <?php
                        foreach ($districts as $district) {
                            ?>
                            <option><?php echo $district ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-3 control-label pull-left" for="distance" style="text-align: left;">
                    Select School
                </label>

                <div class="col-sm-9">
                    <select id="schoolsfordistrict" class="select2 form-control"
                            onchange="load_school_teachers(this.value)">

                    </select>
                </div>
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-3 control-label pull-left" for="teachers" style="text-align: left;">
                    Select Teacher
                </label>

                <div class="col-sm-9">
                    <select class="form-control select2" id="teachers">

                    </select>
                </div>
            </div>
        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-primary pull-right" id="staff_next">Next</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>