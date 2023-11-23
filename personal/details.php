<?php include('./include/db.php'); 
$query = "SELECT * FROM basic_setup,personal_setup,aboutus_setup";
$runquery = mysqli_query($db,$query);
if(!$db){
    header("location:index-2.html");
}
$data = mysqli_fetch_array($runquery);
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?=$data['title']?></title>
    <meta content="<?=$data['description']?>" name="description">
    <meta content="<?=$data['keyword']?>" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/<?=$data['icon']?>" rel="icon">
    <link href="assets/img/<?=$data['icon']?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

  
    <style>
        #hero {
            background: url(assets/img/<?=$data['homewallpaper']?>);
        }

    </style>
</head>

<body>
  
    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="assets/img/<?=$data['profilepic']?>" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="#"><?=$data['name']?></a></h1>
                <div class="social-links mt-3 text-center">
                    <?php 
        if($data['twitter']!=""){
            ?>
                    <a href="<?=$data['twitter']?>" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <?php
        }    
        if($data['facebook']!=""){
            ?>
                    <a href="<?=$data['facebook']?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <?php
        }
      if($data['instagram']!=""){
            ?>
                    <a href="<?=$data['instagram']?>" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <?php
        }
       if($data['skype']!=""){
            ?>
                    <a href="<?=$data['instagram']?>" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <?php
        }
      if($data['linkedin']!=""){
            ?>
                    <a href="<?=$data['linkedin']?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    <?php
        }
      if($data['github']!=""){
            ?>
                    <a href="<?=$data['instagram']?>" class="github"><i class="bx bxl-github"></i></a>
                    <?php
        } 
        ?>
                </div>
            </div>

            <nav class="nav-menu">
                <ul>
                    <li class=""><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
                    <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                    <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                    <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
                    <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>

                </ul>
            </nav><!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

        </div>
    </header><!-- End Header -->

    

    <?php


// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $projectId = mysqli_real_escape_string($db, $_GET['id']);

    // Fetch details from the database based on the project ID
    $query = "SELECT * FROM portfolio WHERE id = '$projectId'";
    $runquery = mysqli_query($db, $query);

    // Check if a matching project is found
    if ($data = mysqli_fetch_array($runquery)) {
        // Display the details
        $projectName = $data['projectname'];
        $projectLink = $data['projectlink'];
        $projectDetails = $data['details'];
        $projectPic = $data['projectpic'];
        ?>
        
        <section id="portfolio" class="portfolio section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Portfolio</h2>
        </div>
        
        <div class="col-lg-5 d-flex align-items-stretch">

        <h1><?= $projectName ?></h1>
    <p><strong>Project Link:</strong> <a href="<?= $projectLink ?>" target="_blank"><?= $projectLink ?></a></p>
    <img src="assets/img/<?= $projectPic ?>" alt="<?= $projectName ?>" style="max-width: 100%; height: auto;">
    <p><strong>Details:</strong> <?= $projectDetails ?></p>
    </div>
    </div>
    </section>
        <?php
    } else {
        // Handle the case where no matching project is found
        echo "Project not found";
    }
} else {
    // Handle the case where 'id' parameter is not set
    echo "Project ID not provided";
}
?>



    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">

            <div class="copyright">
                &copy; Copyright <strong><span>Masum Rayhan</span></strong>
            </div>

            <div class="credits">
            Copyright <a href="#"> © Masum's PortFolio 2023</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/js/extra.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script>
        if (window.self == window.top) {
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-55234356-4', 'auto');
            ga('send', 'pageview');
        }

    </script>
</body>



</html>
