<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once './includes/db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validate and sanitize input (basic validation for illustration)
    if (empty($first_name) || empty($last_name) || empty($email) || empty($password)) {
        $message = "All fields are required.";
    } else {
        try {
            $stmt_check = $conn->prepare("SELECT COUNT(*) AS count FROM users WHERE email = :email");
            $stmt_check->bindParam(':email', $email);
            $stmt_check->execute();
            $result = $stmt_check->fetch(PDO::FETCH_ASSOC);

            if ($result['count'] > 0) {
                $message = "Email already exists. Please choose a different email.";
            } else {
              
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $stmt_insert = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)");
                $stmt_insert->bindParam(':first_name', $first_name);
                $stmt_insert->bindParam(':last_name', $last_name);
                $stmt_insert->bindParam(':email', $email);
                $stmt_insert->bindParam(':password', $hashed_password);

                $stmt_insert->execute();


                header("Location:login.php");
                exit();
            }
        } catch (PDOException $e) {

            $message = "Error: " . $e->getMessage();

            error_log("Error in signup.php: " . $e->getMessage());
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="row w-100">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form p-4 shadow-lg">
                    <h2 class="text-center">Signup</h2>

                  
                    <?php if (!empty($message)) : ?>
                        <div class="alert alert-<?php echo strpos($message, 'already exists') !== false || strpos($message, 'required') !== false ? 'danger' : 'success'; ?>">
                            <?php echo $message; ?>
                        </div>
                    <?php endif; ?>

                    <form class="mt-4" method="POST" action="signup.php">
                        <div class="form-group">
                            <label for="signupFirstName">First Name</label>
                            <input type="text" class="form-control" id="signupFirstName" name="first_name" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                            <label for="signupLastName">Last Name</label>
                            <input type="text" class="form-control" id="signupLastName" name="last_name" placeholder="Last Name" required>
                        </div>
                        <div class="form-group">
                            <label for="signupEmail">Email address</label>
                            <input type="email" class="form-control" id="signupEmail" name="email" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="signupPassword">Password</label>
                            <input type="password" class="form-control" id="signupPassword" name="password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Signup</button>
                    </form>
                    <p class="text-center mt-3">Already have an account? <a href="login.php">Login</a></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>