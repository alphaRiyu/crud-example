<?php include('header.php') ?>
<?php include('menu.php') ?>

<h1 class="students-title">Students Management</h1>

<?php
require 'config.php';
$query = "SELECT * FROM students";
$result = $connect->query($query)
?>

<div class="user-action">
    <div class="search-student">
        <input type="text" name="search" id="search" placeholder="Search ID">
    </div>
    <div class="add-student">
        <a href="addstudent.php">+ Add student</a>
    </div>
</div>

<table class="student-table">
    <tbody>
        <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Action</th>
        </tr>
        <?php while ($data = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $data['studID'] ?></td>
                <td class="left-align"><?= $data['studFName'] ?></td>
                <td class="left-align"><?= $data['studMName'] ?></td>
                <td class="left-align"><?= $data['studLName'] ?></td>
                <td class="action">
                    <a href="updatestudent.php?id=<?= $data['studID'] ?>">Edit</a>
                    <a href="action.php?deleteid=<?= $data['studID'] ?>" onclick="return confirm('Are you sure you want to delete student record?');">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php include('footer.php') ?>