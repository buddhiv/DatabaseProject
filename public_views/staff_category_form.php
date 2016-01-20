<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Children of persons belonging to the staff in an institution directly involved in school
            education</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="application_controller.php">
        <div class="box-body">
            <h5>(a)</h5>

            <div class="form-group">
                <label class="col-sm-8 control-label pull-left" for="posts" style="text-align: left;">
                    Post held as a permanent employee in the relevant institutions and period of service
                </label>

                <div class="col-sm-4">
                    <input type="text" class="form-control" id="posts"/>
                </div>
            </div>
        </div>
        <div class="box-body">
            <h5>(b)</h5>

            <div class="form-group">
                <label class="col-sm-8 control-label pull-left" for="distance" style="text-align: left;">
                    Distance from place of residence to place of work
                </label>

                <div class="col-sm-4">
                    <input type="text" class="form-control" id="distance"/>
                </div>
            </div>
        </div>
        <div class="box-body">
            <h5>(c)</h5>

            <div class="form-group">
                <label class="col-sm-8 control-label pull-left" for="permanentdifficultservice"
                       style="text-align: left;">
                    If serving presently in a difficult school, period of difficult school service
                </label>

                <div class="col-sm-4">
                    <input type="text" class="form-control" id="permanentdifficultservice"/>
                </div>
            </div>
        </div>
        <div class="box-body">
            <h5>(d)</h5>

            <div class="form-group">
                <label class="col-sm-8 control-label pull-left" for="earlierdifficultservice" style="text-align: left;">
                    If served earlier in a difficult school such period of service
                </label>

                <div class="col-sm-4">
                    <input type="text" class="form-control" id="earlierdifficultservice"/>
                </div>
            </div>
        </div>
        <div class="box-body">
            <h5>(e)</h5>

            <label>Un-utilized leave</label>

            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>Year</th>
                                <th>Leaves</th>
                            </tr>
                            <?php
                            for ($year = date("Y"); $year >= (date("Y") - 4); $year--) {
                                ?>
                                <tr>
                                    <td><?php echo $year; ?></td>
                                    <td><input type="text" name="<?php echo 'leaves' . $year ?>"/></td>
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
        <div class="box-body">
            <h5>(e)</h5>

            <div class="form-group">
                <label class="col-sm-8 control-label pull-left" for="schoolname" style="text-align: left;">
                    Name of the school if serving in a school and period of service
                </label>

                <div class="col-sm-4">
                    <input type="text" class="form-control" id="schoolname"/>
                </div>
            </div>
        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-primary pull-right" id="staff_next">Next</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>