<?php

// Header Location 
header("Location: https://master--yuliusius.netlify.app/");

if(isset($_GET['file'])){
    $dir="";
    $filename=$_GET['file'];
    $file_path=$dir.$filename;
    $ctype="application/octet-stream";

    if(!empty($file_path) && file_exists($file_path)){ 
    header("Pragma:public");
    header("Expired:0");
    header("Cache-Control:must-revalidate");
    header("Content-Control:public");
    header("Content-Description: File Transfer");
    header("Content-Type: $ctype");
    header("Content-Disposition:attachment; filename=\"".basename($file_path)."\"");
    header("Content-Transfer-Encoding:binary");
    header("Content-Length:".filesize($file_path));
    flush();
    readfile($file_path);
    exit();
    } else {
        echo "The File does not exist.";
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Yulius</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
                </li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a>
                </li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                        <span>Portfolio</span></a></li>
                <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a>
                </li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a>
                </li>
            </ul>
        </nav><!-- .nav-menu -->

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Yulius</h1>
            <p>I'm <span class="typed"
                    data-typed-items="Fullstack Developer, Programmer, Freelancer, Gamer, Student"></span></p>
            <div class="social-links">
                <a href="https://twitter.com/martabakpisank" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://github.com/yuliusius1" class="github"><i class="bx bxl-github"></i></a>
                <a href="https://instagram.com/natyulius" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://linkedin.com/in/natyulius" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <a href="https://tugas-ius.xyz" class="linkedin"><i class="bi bi-globe"></i></a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                    <p>“I just try to be the best version of my life everyday”</p>
                </div>

                <div class="row">
                    <div class="col-lg-5">
                        <img src="assets/img/profile.jpeg" class="img-fluid w-100" alt="">
                    </div>
                    <div class="col-lg-7 pt-4 pt-lg-0 content my-auto">
                        <h3>Undergraduated Student.</h3>
                        <p class="fst-italic text-justify" style="">
                            I am an undergraduated student of Informatics Engineering of Satya Wacana Christian
                            University.
                            I am very enthusiastic about software engineering and website development.
                            Currently, I focus on web development using PHP, MySQL, JavaScript and Mobile Development
                            using Kotlin.
                        </p>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul>
                                    <li><i class="bi bi-dash"></i> <strong>Full Name:</strong>
                                        <span>Yulius</span>
                                    </li>
                                    <li><i class="bi bi-dash"></i> <strong>Student ID Number:</strong>
                                        <span>672019014</span>
                                    </li>
                                    <li><i class="bi bi-dash"></i> <strong>Major:</strong>
                                        <span>Informatics Engineering</span>
                                    </li>
                                    <li><i class="bi bi-dash"></i> <strong>Campus:</strong>
                                        <span>Satya Wacana Christian University</span>
                                    </li>
                                    <li><i class="bi bi-dash"></i> <strong>Email:</strong>
                                        <span>yiyus49@gmail.com</span>
                                    </li>
                                </ul>
                                <a href="index.php?file=CV_Yulius.pdf" target="_new"
                                    class="btn btn-outline-secondary px-4 py-2">
                                    Download my CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->
        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Skills</h2>
                </div>
                <div class="row skills-content">
                    <div class="col-lg-6">
                        <h4>Programming Language and Tools</h4>
                        <div class="skills-icon mt-3 mb-3 ">
                            <img src="https://img.icons8.com/ios-filled/100/000000/html-5--v1.png"
                                style="width:80px; height:auto; opacity:50%;" class="me-3" />
                            <img src="https://img.icons8.com/material/100/000000/css3.png"
                                style="width:80px; height:auto; opacity:50%;" class="me-3" />
                            <img src="https://img.icons8.com/ios-filled/100/000000/javascript.png"
                                style="width:80px; height:auto; opacity:50%;" class="me-3" />
                            <img src="https://img.icons8.com/ios-filled/500/000000/php-logo.png"
                                style="width:80px; height:auto; opacity:50%;" class="me-3" />
                        </div>
                        <div class="skills-icon">
                            <img src="https://img.icons8.com/ios/500/000000/android.png"
                                style="width:80px; height:auto; opacity:50%;" class="me-3" />
                            <img src="https://img.icons8.com/ios/500/000000/laravel--v1.png"
                                style="width:80px; height:auto; opacity:50%;" class="me-3" />
                            <img src="https://img.icons8.com/ios-filled/500/000000/python.png"
                                style="width:80px; height:auto; opacity:50%;" class="me-3" />
                            <img src="assets/img/skill/codeigniter.png" style="width:80px; opacity:50%;" class="me-3" />

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h4>Others</h4>
                        <div class="progress">
                            <span class="skill">Android Developer <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">UI/UX Designer <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">Web Developer <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p></p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Satya wacana christian university</h4>
                            <h5>Aug 2019 - Present</h5>
                            <p><em>Bachelor’s Student of Informatics Engineering - Software Enginerring</em></p>
                            <p>GPA : 4.00</p>
                        </div>
                        <div class="resume-item">
                            <h4>Bangkit Academy</h4>
                            <h5>Feb 2022 - July 2022</h5>
                            <p><em>Mobile Development Learning Path</em></p>
                            <p>GPA : 4.00</p>
                        </div>
                        <div class="resume-item">
                            <h4>Kanisius Yos Soedarso Senior High School</h4>
                            <h5>July 2016 - July 2019</h5>
                            <p><em>Natural Science</em></p>
                        </div>
                        <h3 class="resume-title">Achievement</h3>
                        <div class="resume-item">
                            <h4>Google Certified Android Associate Developer</h4>
                            <h5>2022 - 2025 </h5>
                            <p>Achieved AAD Ceritification</p>
                        </div>
                        <div class="resume-item">
                            <h4>Graduated Bangkit Academy led by Google, Tokopedia, Gojek, & Traveloka With Distinction
                            </h4>
                            <h5>July 2022</h5>
                            <p>Distinction Graduated at Bangkit Academy as Mobile Development Student.</p>
                        </div>
                        <div class="resume-item">
                            <h4>Academic Achievement Scholarship at Satya Wacana Christian University</h4>
                            <h5>Aug 2020 - Present</h5>
                            <p>Currently receive Academic Achievement Scholarship at Satya Wacana Christian
                                University</p>
                        </div>
                        <div class="resume-item">
                            <h4>Champion of GEMASTIK 2021</h4>
                            <h5>Nov 2021</h5>
                            <p>Champion of GEMASTIK (Pagelaran Mahasiswa Nasional Bidang Teknologi Informasi dan
                                Komunikasi) at Satya Wacana Christian University</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Business Integration Intern at PT.Sumber Alfaria Trijaya Tbk</h4>
                            <h5>Sept 2022 - Present</h5>
                            <p><em>Internship</em></p>
                            <ul>
                                <li>Build Web using Webix Framework</li>
                                <li>Colaborate with Team</li>
                                <li>Make Report Progress each week</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Sayflash.id</h4>
                            <h5>2019 - Present</h5>
                            <p><em>Co Founder and Frontend Developer</em></p>
                            <ul>
                                <li>Design User Interface and User Experience</li>
                                <li>Managed up to 5 tasks at a given time while under pressure</li>
                                <li>Create Prototype Website</li>
                                <li>Build a Responsive Web Design</li>
                                <li>Colaborate with Team</li>
                                <li>Make Website Progress Report each month</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Hult Prize at Campus 2021</h4>
                            <h5>2020 - Present</h5>
                            <p><em>Website Team</em></p>
                            <ul>
                                <li>Managed up to 5 tasks at a given time while under pressure</li>
                                <li>Design User Interface and User Experience</li>
                                <li>Colaborate with Team</li>
                                <li>Make Website Progress Report each month</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Assistant Lecture</h4>
                            <h5>2020 - 2022</h5>
                            <ul>
                                <li>Assistant Lecture of Descrete Mathematics</li>
                                <li>Assistant Algorithm and Data Structure</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>FIT Competitions 2020</h4>
                            <h5>2019 - 2020</h5>
                            <p><em>Event Division</em></p>
                            <ul>
                                <li>Contact with Judges</li>
                                <li>Make a Timeline</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>I got several portfolios from assignments in the form of individual or group projects that were
                        given to me during my studies</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                            <li data-filter=".filter-android">Android</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio1.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Face Recognition using Python</h4>
                                <p>Artificial Intelegence</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio1.png" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Face Recognition using Python Programming"><i
                                            class="bx bx-info-circle"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio3.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>UI UX Design of WarunkOnline </h4>
                                <p>UI / UX Design</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio3.png" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="UI UX Design of WarunkOnline "><i
                                            class="bx bx-info-circle"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio2.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>DokterKu Website using HTML, PHP, JS </h4>
                                <p>Web Development</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio2.png" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="DokterKu Website using HTML, PHP, JS"><i
                                            class="bx bx-info-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio4.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>UI SayDrone - Rental Website</h4>
                                <p>UI / UX Design</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio4.png" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="UI SayDrone - Rental Website"><i
                                            class="bx bx-info-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio5.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>UI UX Design of CariKost</h4>
                                <p>UI / UX Design</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio5.png" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="UI UX Design of CariKost"><i
                                            class="bx bx-info-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio6.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Siasat using HTMl PHP JS</h4>
                                <p>Web Development</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-6.png" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Siasat using HTMl PHP JS"><i
                                            class="bx bx-info-circle"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio8.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Website WarungMakan using Java Server Faces and Abstract Factory Model</h4>
                                <p>Web Development</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio8.png" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"
                                        title="Website WarungMakan using Java Server Faces and Abstract Factory Model"><i
                                            class="bx bx-info-circle"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio7.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>E-Commerce Website using Laravel</h4>
                                <p>Web Development</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio7.png" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="E-Commerce Website using Laravel"><i
                                            class="bx bx-info-circle"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio9.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Admin System Using CodeIgniter 3</h4>
                                <p>Web Development</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio9.png" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Admin System Using CodeIgniter 3"><i
                                            class="bx bx-info-circle"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>What I Do?</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 col-xs-12 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box iconbox-green">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                    </path>
                                </svg>
                                <i class="bi bi-code"></i>
                            </div>
                            <h4><a href="">Android Development</a></h4>
                            <p>Develop a android for any category using Kotlin</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                    </path>
                                </svg>
                                <i class="bi bi-code"></i>
                            </div>
                            <h4><a href="">Website Development</a></h4>
                            <p>Develop a website for any category using Laravel / CodeIgniter Framework</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-xs-12 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-orange ">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                    </path>
                                </svg>
                                <i class="bx bx-pencil"></i>
                            </div>
                            <h4><a href="">UI / UX Design</a></h4>
                            <p>Design an Application. Get your website on the next level. We help to create great
                                experience</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->


        <section id="testimonials" class="bg-light testimonials section-bg">
            <div class="section-title mt-3" data-aos="fade-down">
                <h2>any question?</h2>
                <p>Want to know me more?</p>
            </div>
            <div class="container pt-2 pb-3 d-flex justify-content-center">
                <div>
                    <a href="#contact" class="btn btn-outline-primary px-5 py-3 me-3" data-aos="zoom-in">CONTACT ME</a>
                    <a href="#contact" class="btn btn-primary px-5 py-3 " data-aos="zoom-in">DOWNLOAD MY CV</a>
                </div>
            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row mt-1">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Tangerang, Banten, Indonesia 15143</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>672019014@student.uksw.edu</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+62 895 0178 4227</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-github"></i>
                                <h4>Github:</h4>
                                <p>@yuliusius1</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-linkedin"></i>
                                <h4>LinkedIn:</h4>
                                <p>@natyulius</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <div style="width: 100%"><iframe width="100%" height="500" frameborder="0" scrolling="no"
                                marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=500&amp;hl=en&amp;q=Pati,%20Jawa%20Tengah+(My%20Business%20Name)&amp;t=p&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                    href="https://www.gps.ie/car-satnav-gps/">best sat navs</a></iframe></div>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Yulius</h3>
            <p>Undergraduated Student of Informatics Engineering at Satya Wacana Christian University</p>
            <div class="social-links">
                <a href="https://twitter.com/martabakpisank" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://github.com/yuliusius1" class="github"><i class="bx bxl-github"></i></a>
                <a href="https://instagram.com/natyulius" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://linkedin.com/in/natyulius" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <a href="https://tugas-ius.xyz" class="linkedin"><i class="bi bi-globe"></i></a>
            </div>
            <div class="copyright">
                Design with <i class="bi bi-heart text-danger"></i> by Yulius
            </div>
            <div class="credits">
                Satya Wacana Christian University
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>