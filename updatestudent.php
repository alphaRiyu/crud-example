<?php include('header.php') ?>
<?php include('menu.php') ?>

<?php
require 'config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM students WHERE studID = '$id'";
    $result = $connect->query($query);
    $data = mysqli_fetch_assoc($result);
}
?>

<h1 class="update-student-title">Update Student</h1>

<form action="action.php" method="POST" class="submit-form">
    <input type="hidden" name="id" value="<?= $data['studID'] ?>">
    <input type="text" name="firstName" id="firstName" placeholder="First name" value="<?= $data['studFName'] ?>" require>
    <input type="text" name="middleName" id="middleName" placeholder="Middle name" value="<?= $data['studMName'] ?>" require>
    <input type="text" name="lastName" id="lastName" placeholder="Last name" value="<?= $data['studLName'] ?>" require>
    <input type="submit" name="updateStudent" value="Update record" id="saveRecord">
</form>

<?php include('footer.php') ?>