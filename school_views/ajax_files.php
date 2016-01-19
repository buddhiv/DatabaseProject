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
    <option></option>
    <?php
    while ($rows = mysqli_fetch_assoc($result)) {
        ?>
        <option value="<?php echo $rows['school_id']; ?>"><?php echo $rows['name']; ?></option>
    <?php
    }?>


<?php
} else if (isset($_POST['school'])) {
    if ($_POST['school'] != "") {
        $link = getConnection();
        $sql = "SELECT s.student_id, s.name_in_full FROM student s NATURAL JOIN student_school ss WHERE ss.leaving_date IS NOT NULL AND school_id = " . $_POST['school'];
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
    }
    ?>

               <option selected></option>
                <?php
                while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                    <option
                        value="<?php echo $rows['student_id']; ?>"><?php echo $rows['name_in_full']; ?></option>
                <?php
                }?>

<?php
}
?>
?>