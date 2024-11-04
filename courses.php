<?php
// Include your database connection file here
require_once './includes/db.php';

// Initialize variables
$courses = [];

// Fetch courses from the database
try {
    $stmt = $conn->prepare("SELECT * FROM courses");
    $stmt->execute();
    $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
<!-- header.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses |🧑‍💻</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/css/about.css">
    <link rel="stylesheet" href="./assets/css/courses.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <section class=" py-5 px-0 d-flex  justify-content-center align-items-end course-1">
        <div class="about-box">
            <h1>Our Courses</h1>
            <p>Courses to help you grow.</p>
        </div>
    </section>



    <section class="section-7 container-xl text-center">
        <div>
            <h2>Explore Our Courses</h2>
            <p>Discover a range of courses designed to boost your skills and knowledge. Whether you're looking to enhance your career, learn something new, or deepen your expertise, our courses provide the tools to help you succeed.</p>
        </div>
        <div class="courses">
            <aside>
                <div class="courseimgdiv">
                    <img src="https://askproject.net/studdy/wp-content/uploads/sites/43/2021/12/process-of-writing-calligraphy-writer-TFPYERL-800x533.jpg" alt="">
                </div>
                <span class="">
                    <li class="list-inline-item">
                        <a class="btn btn-primary" href="#">Copy</a>
                        <a class="btn btn-primary" href="#">Writing</a>
                    </li>
                    <p><b>$25/ </b> course</p>
                </span>
                <h2>Let's learn about copywriting</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tincidunt velit. Donec bibendum
                    turpis vitae maximus.</p>
            </aside>
            <aside>
                <div class="courseimgdiv">
                    <img src="https://askproject.net/studdy/wp-content/uploads/sites/43/2021/12/girl-playing-singer-5GNLZJU-800x533.jpg" alt="">
                </div>
                <span class="">
                    <li class="list-inline-item">
                        <a class="btn btn-primary" href="#">Graphics</a>
                        <a class="btn btn-primary" href="#">Design</a>
                    </li>
                    <p><b>$25/ </b> course</p>
                </span>
                <h2>Learn how to write a song</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tincidunt velit. Donec bibendum
                    turpis vitae maximus.</p>
            </aside>
            <?php if (!empty($courses)) : ?>
                <?php foreach ($courses as $course) : ?>
                    <aside>
                        <div class="courseimgdiv">
                            <img src="<?php echo htmlspecialchars($course['course_image']); ?>" alt="<?php echo htmlspecialchars($course['course_name']); ?>">
                        </div>
                        <span class="">
                            <li class="list-inline-item">
                                <a class="btn btn-primary" href="#"><?php echo htmlspecialchars($course['category1']); ?></a>
                                <?php if (!empty($course['category2'])) : ?>
                                    <a class="btn btn-primary" href="#"><?php echo htmlspecialchars($course['category2']); ?></a>
                                <?php endif; ?>
                            </li>
                            <p><b>$<?php echo htmlspecialchars($course['course_price']); ?> /</b> course</p>
                        </span>
                        <h2><?php echo htmlspecialchars($course['course_name']); ?></h2>
                        <p><?php echo htmlspecialchars($course['course_description']); ?></p>
                    </aside>
                <?php endforeach; ?>
            <?php else : ?>
                <p>No courses available.</p>
            <?php endif; ?>

        </div>
    </section>



    <div class="container-xl">
        <secttion class="section-9 learn-withus">
            <div class="text-center p-5">
                <h2>Ready to start learning? Contact us!
                </h2>
                <p class="my-5">Are you excited to embark on your learning journey? Our team at LearnHub is here to support you every step of the way. Whether you have questions about our courses, need assistance with enrollment, or want to explore personalized learning options, we’re just a message away. </p>
                <div class="ml-auto text-center">
                    <ul class="navbar-nav justify-content-center flex-row align-items-center">
                        <li class="nav-item signupbtn">
                            <a class="nav-link" href="#">Sign Up</a>
                        </li>
                        <li class="nav-item signupbtn ml-5">
                            <a class="nav-link" href="#">Sign Up</a>
                        </li>
                    </ul>
                </div>

            </div>

        </secttion>
    </div>

    <?php include 'includes/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>