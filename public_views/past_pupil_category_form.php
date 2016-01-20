<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Children of past pupils</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal">
        <div class="box-body">
            <h5>Select a Past Pupil</h5>

            <div class="form-group">
                <label class="col-sm-3 control-label pull-left" for="posts" style="text-align: left;">
                    Select District
                </label>

                <div class="col-sm-9">
                    <select class="form-control select2" id="district" name="district"
                            onchange="load_district_schools(this.value)">
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
                    <select id="schoolsfordistrict" class="select2 form-control" name="school"
                            onchange="load_school_pastpupils(this.value)">

                    </select>
                </div>
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-3 control-label pull-left" for="pastpupils" style="text-align: left;">
                    Past Pupils
                </label>

                <div class="col-sm-9">
                    <select class="form-control select2" id="pastpupils" name="name">

                    </select>
                </div>
            </div>
        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-primary pull-right">Next</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>