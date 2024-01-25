<?php
include "../Php/config.php";
$sql = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC LIMIT 1");
$row = $sql->fetch_assoc();

$eduname = json_decode($row["eduname"], true);
$edulocation = json_decode($row["edulocation"], true);
$edufield = json_decode($row["edufield"], true);
$edusd = json_decode($row["edusd"], true);
$edued = json_decode($row["edued"], true);

$exp = json_decode($row["exp"], true);
$companyname = json_decode($row["companyname"], true);
$expsd = json_decode($row["expsd"], true);
$exped = json_decode($row["exped"], true);

$project = json_decode($row["project"], true);
$projectdesc = json_decode($row["projectdesc"], true);

$skill = json_decode($row["skill"], true);
$skillrangearray = json_decode($row["skillrange"], true);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SmartFolio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">Smartfolio</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#service" class="nav-item nav-link">Service</a>
                    <a href="#experience" class="nav-item nav-link">Experience</a>
                    <a href="#portfolio" class="nav-item nav-link">Portfolio</a>


                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Hero Start -->
    <div class="hero" id="home">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <p>I'm</p>
                            <h1><?php echo $row['name']; ?></h1>
                            <h2></h2>
                            <div class="typed-text"><?php echo $row['headline']; ?></div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="../myers_stalin.svg" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="../img/project-3.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-header text-left">
                            <p>Learn About Me</p>

                        </div>
                        <div class="about-text">
                            <p>
                                <?php echo $row['aboutdesc']; ?>
                            </p>
                        </div>
                        <div class="skills">
                            <?php for ($i = 0; $i < count($skill); $i++) {  ?>
                                <div class="skill-name">
                                    <p><?php echo $skill[$i]; ?></p>
                                    <p><?php echo $skillrangearray[$i]; ?>%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skillrangearray[$i]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            <?php } ?>
                        </div>
                        <a class="btn" href="">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="service" id="service">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">

                <h2>Projects</h2>
            </div>
            <div class="row">

            <?php for ($i = 0; $i < count($project); $i++) {  ?>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <div class="service-text">
                            <h3><?php echo $project[$i]; ?></h3>
                            <p>
                            <?php echo $projectdesc[$i]; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Experience Start -->
    <div class="experience" id="experience">
        <div class="container">
            <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>My Resume</p>
                <h2>Working Experience</h2>
            </header>
            <div class="timeline">
            <?php for ($i = 0; $i < count($exp); $i++) {  ?>
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date"><?php echo $expsd[$i]; ?>- <?php echo $exped[$i]; ?></div>
                        <h2><?php echo $exp[$i]; ?></h2>
                        <h4><?php echo $companyname[$i]; ?></h4>
                        
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
   
    <!-- Footer Start -->
    <div class="footer wow fadeIn" data-wow-delay="0.3s">
        <div class="container-fluid">
            <div class="container">
                <div class="footer-info">
                    <h2><?php echo $row['name']; ?></h2>
                    <h3><?php echo $row['address']; ?></h3>
                    <div class="footer-menu">
                        <p><?php echo $row['phone']; ?></p>
                        <p><?php echo $row['email']; ?></p>
                    </div>
                    <div class="footer-social">
                       
                        <a href=""><i class="fab fa-github"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">Smartfolio</a>, All Right Reserved | Designed By <a href="#">HTML Codex</a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to top button -->
    <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>