<?php include('header.php') ?>
<?php include('menu.php') ?>

<h1 class="add-student-title">Add New Student</h1>

<form action="action.php" method="POST" class="submit-form">
    <input type="text" name="firstName" id="firstName" placeholder="First name">
    <input type="text" name="middleName" id="middleName" placeholder="Middle name">
    <input type="text" name="lastName" id="lastName" placeholder="Last name">
    <input type="submit" name="saveStudent" value="Save record" id="saveRecord">
</form>

<?php include('footer.php') ?>