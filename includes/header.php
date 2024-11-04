<?php
session_start();

// Check if user is logged in
$is_logged_in = isset($_SESSION['user_id']);
$user_name = $is_logged_in ? $_SESSION['user_name'] : '';
?>
<!-- header.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home |🧑‍💻</title>
    <!-- Bootstrap 4.5 CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h2>LearnHub</h2>
                <!-- <img src="path/to/logo.png" width="30" height="30" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/courses.php">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/contact.php">Contact</a>
                    </li>
                </ul>

                <div class="ml-lg-auto">
                    <ul class="navbar-nav align-items-center">
                        <?php if ($is_logged_in) : ?>
                            <li class="nav-item">
                                <h3 class="mr-3 mb-0">👋 Hi, <?php echo $user_name; ?></h3>
                            </li>
                            <li class="nav-item">
                                <a href="logout.php" class="btn btn-primary">Logout</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item login">
                                <a class="nav-link" href="views/login.php">Login</a>
                            </li>
                            <li class="nav-item signupbtn">
                                <a class="nav-link" href="views/signup.php">Sign Up</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <!-- Bootstrap 4.5 JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>