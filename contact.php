<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact |🧑‍💻</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/css/about.css">
    <link rel="stylesheet" href="./assets/css/contact.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <section class=" py-5 px-0 d-flex  justify-content-center align-items-end contact-1">
        <div class="about-box">
            <h1>Contact Us</h1>
            <p>Information about the company.</p>
        </div>
    </section>


    <section class="section-9-about container-xl contact-form d-flex justify-content-between align-items-start">
        <aside class="contact-details">
            <h2>Get In Touch</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tincidunt velit. Donec bibendum turpis vitae maximus.</p>
            <div class="contact-info">
                <div class="d-flex align-items-center flex-column">
                    <span class="contact-icon mr-3">icon</span>
                    <div>
                        <h4>Address</h4>
                        <small>732 Despard St, Atlanta, Georgia 30060</small>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-column">
                    <span class="contact-icon mr-3">icon</span>
                    <div>
                        <h4>Email</h4>
                        <small>732 Despard St, Atlanta, Georgia 30060</small>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-column">
                    <span class="contact-icon mr-3">icon</span>
                    <div>
                        <h4>Phone</h4>
                        <small>732 Despard St, Atlanta, Georgia 30060</small>
                    </div>
                </div>
            </div>
        </aside>

        <form action="" class="contact-form w-50">
            <div class="form-group d-flex">
                <input type="text" class="form-control mr-2" placeholder="First Name">
                <input type="text" class="form-control" placeholder="Last Name">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
                <textarea class="form-control" rows="6" placeholder="Message"></textarea>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary btn-lg w-100">Send Message</button>
            </div>
        </form>
    </section>

    <div class="container-xl">
        <secttion class="section-9 learn-withus">
            <div class="text-center p-5">
                <h2>Ready to start learning? Contact us!
                </h2>
                <p class="my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tincidunt <br /> velit.
                    Donec
                    bibendum
                    turpis.</p>
                <div class="ml-auto text-center">
                    <ul class="navbar-nav justify-content-center flex-row align-items-center">
                        <li class="nav-item signupbtn">
                            <a class="nav-link text-secondary" href="#">Sign Up</a>
                        </li>
                        <li class="nav-item signupbtn ml-5">
                            <a class="nav-link text-secondary" href="#">Sign Up</a>
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