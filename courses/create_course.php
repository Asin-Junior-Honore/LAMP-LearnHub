<!-- create_course.php -->

<?php include '../includes/header.php'; ?>

<h1>Create Course</h1>

<form action="" method="POST">
    <input type="text" name="title" placeholder="Course Title" required>
    <textarea name="description" placeholder="Course Description"></textarea>
    <button type="submit" name="create_course">Create Course</button>
</form>

<?php include '../includes/footer.php'; ?>
