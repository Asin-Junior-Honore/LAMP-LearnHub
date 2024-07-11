<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <h2 class="text-center">Signup</h2>
                    <form class="mt-4">
                        <div class="form-group">
                            <label for="signupFirstName">First Name</label>
                            <input type="text" class="form-control" id="signupFirstName" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label for="signupLastName">Last Name</label>
                            <input type="text" class="form-control" id="signupLastName" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <label for="signupEmail">Email address</label>
                            <input type="email" class="form-control" id="signupEmail" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="signupPassword">Password</label>
                            <input type="password" class="form-control" id="signupPassword" placeholder="Password">
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