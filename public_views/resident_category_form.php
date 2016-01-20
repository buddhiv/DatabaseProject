
<?php    $ownerships = array('APPLICANT','FATHER','MOTHER','REGISTERED_LEASE_BOND','UNREGISTERED_LEASE_BOND');?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Children of residents in close proximity to the school</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" action="application_controller.php" method="post">
        <div class="box-body">
            <h5>(a)</h5>

            <div class="form-group">
                <label class="col-sm-8 control-label pull-left" for="noofyears_spouse" style="text-align: left;">
                    Number of years that include the applicant and spouse/legal guardian in the electorial register
                </label>

                <div class="col-sm-4">
                    <input type="text" class="form-control" id="noofyears_spouse" name="noofyears_spouse"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-8 control-label pull-left" for="noofyears_applicant" style="text-align: left;">
                    Number of years that include either the name of the applicant or the name of the spouse in the
                    electoral register
                </label>

                <div class="col-sm-4">
                    <input type="text" class="form-control" id="noofyears_applicant" name="noofyears_applicant"/>
                </div>
            </div>
            <h5>
                (This is applicable for a period of recent 5 years, prior to the year the application is submitted)
            </h5>
        </div>
        <div class="box-body">
            <h5>(b)</h5>

            <div class="form-group">
                <label class="col-sm-8 control-label pull-left" for="owner_ship" style="text-align: left;">
                    Ownership of the place of residence
                </label>

                <div class="col-sm-4">
                    <select class="form-control select2" name="owner_ship">
                        <option></option>
                        <?php
                        foreach ($ownerships as $ownership) {
                            ?>
                            <option><?php echo $ownership; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <h5>
                (This deed - in the name of applicant/spouse or applicant's parents/registered lease bond/government
                official quaters documents/un-registered lease bond/any legal documents to prove ownership)
            </h5>
        </div>

        <div class="box-body">
            <h5>(c)</h5>

            <div class="form-group">
                <label class="col-sm-8 control-label pull-left" for="close_school" style="text-align: left;">
                    Number of schools located closer to the residence where the child could be admitted than the school
                    applied for
                </label>

                <div class="col-sm-4">
                    <input type="text" class="form-control" id="close_school" name="close_school"/>
                </div>
            </div>

            <h5>It is compulsory to fill in item 06 by the applicant</h5>
        </div>


        <div class="box-footer">
            <button type="submit" class="btn btn-primary pull-right" id="resident_next" name="resident_next">Next</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>