<!DOCTYPE html>
<html>
<head>
    <title>School Management</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; line-height: 1.6; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 18px; }
        .card { border: 1px solid #ddd; border-radius: 10px; padding: 16px; }
        a { display: inline-block; margin: 4px 0; }
    </style>
</head>
<body>

<h1>School Management</h1>
<p>School Management APIs</p>

<div class="grid">
    <div class="card">
        <h3>Student</h3>
        <a href="student/create.php">Create Student</a><br>
        <a href="student/read.php">Read Student</a><br>
        <a href="student/update.php">Update Student</a><br>
        <a href="student/delete.php">Delete Student</a>
    </div>

    <div class="card">
        <h3>Teacher</h3>
        <a href="teacher/create.php">Create Teacher</a><br>
        <a href="teacher/read.php">Read Teacher</a><br>
        <a href="teacher/update.php">Update Teacher</a><br>
        <a href="teacher/delete.php">Delete Teacher</a>
    </div>

    <div class="card">
        <h3>Course</h3>
        <a href="course/create.php">Create Course</a><br>
        <a href="course/read.php">Read Course</a><br>
        <a href="course/update.php">Update Course</a><br>
        <a href="course/delete.php">Delete Course</a>
    </div>

    <div class="card">
        <h3>Payment</h3>
        <a href="payment/create.php">Create Payment</a><br>
        <a href="payment/read.php">Read Payment</a><br>
        <a href="payment/update.php">Update Payment</a><br>
        <a href="payment/delete.php">Delete Payment</a>
    </div>

    <div class="card">
        <h3>Assignment</h3>
        <a href="assignment/addTeacher.php">Add Course to Teacher</a><br>
        <a href="assignment/removeTeacher.php">Remove Course from Teacher</a><br>
        <a href="assignment/addSemester.php">Add Course to Semester</a><br>
        <a href="assignment/removeSemester.php">Remove Course from Semester</a>
    </div>
</div>

</body>
</html>