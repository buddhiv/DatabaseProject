<?php

include "../php/mysql_connector.php";


if (isset($_POST['district'])) {
    if ($_POST['district'] != "") {
        $link = getConnection();
        $sql = "SELECT * FROM school WHERE district = '" . $_POST['district'] . "'";
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
    }
    ?>

    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">School</label>

        <div class="col-sm-6">
            <select class="form-control select2" style="width: 100%;">
                <option></option>
                <?php
                while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                    <option
                        value="<?php echo $rows['name']; ?>  ID=<?php echo $rows['school_id']; ?>"><?php echo $rows['name']; ?></option>
                <?php
                }?>

            </select>
        </div>
    </div>

<?php
}else if (isset($_POST['school'])) {
    if ($_POST['school'] != "") {
        $link = getConnection();
        $sql = "SELECT * FROM student WHERE district = '" . $_POST['district'] . "'";
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
    }
    ?>

    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">School</label>

        <div class="col-sm-6">
            <select class="form-control select2" style="width: 100%;">
                <option></option>
                <?php
                while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                    <option
                        value="<?php echo $rows['school_id']; ?>  ID=<?php echo $rows['school_id']; ?>"><?php echo $rows['name']; ?></option>
                <?php
                }?>

            </select>
        </div>
    </div>

<?php
}
?>