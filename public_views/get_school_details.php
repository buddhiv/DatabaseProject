<?php
/**
 * Created by PhpStorm.
 * User: Buddhi
 * Date: 1/21/2016
 * Time: 12:36 AM
 */
include_once "../php/Connection.php";
include_once '../php/controller/schoolController.php';

$schoolController = new \Controllers\SchoolController();


if (isset($_GET['school_id'])) {
    if ($_GET['school_id'] != "") {
        $sd = $schoolController->getSchoolById($_GET['school_id']);
        $schooldetails = mysqli_fetch_assoc($sd);

        echo '<div class="form-group">
                                        <label class="col-sm-3" style="text-align: right">Address</label>

                                        <div class="col-sm-9">
                                            <label>' . $schooldetails['address'] . '</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3" style="text-align: right">Divisional Secretary
                                            Area</label>

                                        <div class=" col-sm-9">
                                            <label>' . $schooldetails['divisional_sec_area'] . '</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3" style="text-align: right">Telephone</label>

                                        <div class=" col-sm-9">
                                            <label>' . $schooldetails['telephone'] . '</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3" style="text-align: right">Category</label>

                                        <div class=" col-sm-9">
                                            <label>' . $schooldetails['category'] . '</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3" style="text-align: right">Capacity for Grade One</label>

                                        <div class=" col-sm-9">
                                            <label>' . $schooldetails['capacity'] . '</label>
                                        </div>
                                    </div>';
    }
}