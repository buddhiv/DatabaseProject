<?php $districts = array('Ampara', 'Anuradhapura', 'Badulla', 'Batticaloa', 'Colombo', 'Galle', 'Gampaha', 'Hambantota', 'Jaffna', 'Kaluthara', 'Kandy', 'Kilinochchi', 'Kegalle', 'Mannar', 'Matale', 'Matara', 'Monaragala', 'Mulattivu', 'Nuwaraeliya', 'Polonnaruwa', 'Rathnapura', 'Trincomalee', 'Vavuniya'); ?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Children of persons belonging to the staff in an institution directly involved in school
            education</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="application_controller.php">


        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">District</label>

            <div class="col-sm-6">
                <select class="form-control select2" style="width: 100%;"
                        onchange="load_district_schools(this.value)" name="district" id="district">
                    <option></option>
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

            <div class="col-sm-6">
                <select class="form-control select2" style="width: 100%;" name="schoolsfordistrict"
                        id="schoolsfordistrict" onchange="load_school_students(this.value)">

                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Teacher Name</label>

            <div class="col-sm-6">
                <select class="form-control select2" style="width: 100%;" name="teachersforschool"
                        id="teachersforschool">

                </select>
            </div>
        </div>



        <div class="box-footer">
            <button type="submit" class="btn btn-primary pull-right" name="staff_next" id="staff_next">Next</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>


<script type="text/javascript">

    function load_school_teachers(school_id) {
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
                    string = xmlhttp.responseText;
                    document.getElementById('teachersforschool').innerHTML = string;
                }
            };

            xmlhttp.open("GET", "get_teachers_from_school.php?school_id=" + school_id, true);
            xmlhttp.send();
        }
    }

</script>