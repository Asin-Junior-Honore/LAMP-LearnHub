<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require_once '../includes/db.php';

$course_name = $course_description = $course_image = $course_price = $course_duration = $category1 = $category2 = "";
$error_message = "";
$success_message = $_SESSION['success_message'] ?? '';

unset($_SESSION['success_message']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form data
    $course_name = htmlspecialchars(trim($_POST['course_name']));
    $course_description = htmlspecialchars(trim($_POST['course_description']));
    $course_image = htmlspecialchars(trim($_POST['course_image']));
    $course_price = floatval($_POST['course_price']);
    $course_duration = htmlspecialchars(trim($_POST['course_duration']));
    $category1 = htmlspecialchars(trim($_POST['category1']));
    $category2 = htmlspecialchars(trim($_POST['category2']));


    $creator_id = $_SESSION['user_id'];
    if (empty($course_name) || empty($course_description) || empty($course_image) || $course_price <= 0 || empty($course_duration) || empty($category1)) {
        $error_message = "All fields are required.";
    } else {
        try {
            $stmt = $conn->prepare("INSERT INTO courses (course_name, course_description, course_image, course_price, course_duration, category1, category2, creator_id)
            VALUES (:course_name, :course_description, :course_image, :course_price, :course_duration, :category1, :category2, :creator_id)");
            $stmt->bindParam(':course_name', $course_name);
            $stmt->bindParam(':course_description', $course_description);
            $stmt->bindParam(':course_image', $course_image);
            $stmt->bindParam(':course_price', $course_price);
            $stmt->bindParam(':course_duration', $course_duration);
            $stmt->bindParam(':category1', $category1);
            $stmt->bindParam(':category2', $category2);
            $stmt->bindParam(':creator_id', $creator_id);
            $stmt->execute();

            // Set success message in session
            $_SESSION['success_message'] = "Course created successfully.";

            // Redirect back to create course page
            header("Location:create_course.php");
            exit();
        } catch (PDOException $e) {
            $error_message = "Error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center mb-4">Create Course</h2>
                <?php if (!empty($error_message)) : ?>
                    <div class="alert alert-danger"><?php echo $error_message; ?></div>
                <?php endif; ?>
                <?php if (!empty($success_message)) : ?>
                    <div class="alert alert-success"><?php echo $success_message; ?></div>
                <?php endif; ?>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group">
                        <label for="course_name">Course Name</label>
                        <input type="text" class="form-control" id="course_name" name="course_name" value="<?php echo $course_name; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="course_description">Course Description</label>
                        <textarea class="form-control" id="course_description" name="course_description" rows="5" required><?php echo $course_description; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="course_image">Course Image URL</label>
                        <input type="text" class="form-control" id="course_image" name="course_image" value="<?php echo $course_image; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="course_price">Course Price ($)</label>
                        <input type="number" class="form-control" id="course_price" name="course_price" value="<?php echo $course_price; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="course_duration">Course Duration</label>
                        <input type="text" class="form-control" id="course_duration" name="course_duration" value="<?php echo $course_duration; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="category1">Category 1</label>
                        <input type="text" class="form-control" id="category1" name="category1" value="<?php echo $category1; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="category2">Category 2 (Optional)</label>
                        <input type="text" class="form-control" id="category2" name="category2" value="<?php echo $category2; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Create Course</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>