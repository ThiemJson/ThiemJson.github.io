<?php
if(isset($_SESSION)) 
{ 
    session_unset(); 
} 
session_start();
$_SESSION['userlogin'] = 'userlogin';
include('controllers/read-home.php');
include('controllers/read-about.php');
include('controllers/read-experiens.php');
include('controllers/read-education.php');
include('controllers/read-skill.php');
include('controllers/read-pet.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nguyễn Cao Thiêm - Mobile Developer Resume</title>
    <!-- Default style sheets -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link href="index_files/css.css" rel="stylesheet">
    <link rel="stylesheet" href="index_files/dist.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <script src="https://use.fontawesome.com/303a8145d6.js"></script>
</head>

<body class="homepage ver-one" data-spy="scroll" data-target=".main-navigation">
    <header id="site-header">
        <nav id="site-navigation" class="main-navigation side-static" role="navigation">
            <div class="navigation-header">
                <a href="#" class="logo"><img src="images/site-logo.png" alt="Signature" class="site-logo"></a>
                <button class="menu-switch">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- /.navigation-header -->
            <ul class="nav navigation">
                <li class="item active"><a href="#site-header" class="fa-home">Home</a></li>
                <li class="item"><a href="#about" class="fa-user">About</a></li>
                <li class="item"><a href="#skills" class="fa-signal">Skills</a></li>
                <li class="item"><a href="#experiences" class="fa-bar-chart-o">Experiences</a></li>
                <li class="item"><a href="#education" class="fa-book">Education</a></li>
                <li class="item"><a href="views/login.php" class="fa-cog">CV Setting</a></li>
            </ul>
            <!-- /.navigation -->
        </nav>
        <!-- /#site-navigation -->
        <div id="banner" class="transparent-section" data-image="images/header-bg.jpeg" data-color="26, 188, 156" data-transparency="0.80" style="height: 726px; background-image: url(&quot;images/header-bg.jpg&quot;); background-color: rgb(26, 188, 156); background-position: 50% 0px;">
            <div class="transparent-content parallax-style" style="background-color: rgba(26, 188, 156, 0.8); width: 100%; height: 100%;">
                <div class="header-content">
                    <div class="container">
                        <div class="site-title">
                            <h1 class="site-name">I’m <?php echo $homeData[0][1] ?></h1>
                        </div>
                        <!-- /.site-title -->
                        <h3 class="site-slogan"><?php echo $homeData[0][2] ?></h3>
                        <!-- /.site-slogan-->
                        <div class="social-link">
                            <ul class="social-profiles">
                                <li class="item"><a href="<?php echo $homeData[0][3] ?>" class="fa-github"><span>Github</span></a></li>
                                <li class="item"><a href="<?php echo $homeData[0][4] ?>" class="fa-facebook"><span>Facebook</span></a></li>
                                <li class="item"><a href="<?php echo $homeData[0][5] ?>" class="fa-play"><span>Google Play</span></a></li>
                            </ul>
                        </div>
                        <!-- /.social-link -->
                    </div>
                </div>
                <!-- /.header-content -->
            </div>
            <!-- /.transparent-content -->
        </div>
        <!-- /.transparent-section -->
    </header>
    <!-- /#site-header -->
    <section id="about" class="default-section" data-scroll-reveal="enter from the bottom over .5s">
        <div class="section-heading">
            <h2 class="section-title">About me</h2>
        </div>
        <!-- /.section-heading -->
        <div class="about-container">
            <div class="container">
                <div class="col-md-3" data-scroll-reveal="enter from the left after .5s">
                    <div class="profile-photo section-box">
                        <img src="<?php echo $aboutData[0][1] ?>" alt="Cao Thiem" class="profile-image img-responsive">
                    </div>
                    <!-- /.profile-photo -->
                </div>
                <div class="col-md-6" data-scroll-reveal="enter from the right after .5s">
                    <div class="profile-details section-box">
                        <h2 class="title">Summary</h2>
                        <div class="about-content">
                            <?php echo $aboutData[0][2] ?>
                        </div>
                        <!-- /.about-content -->
                        <a href="<?php echo $aboutData[0][6] ?>" class="btn fa-download download-btn">My CV</a>
                    </div>
                    <!-- /.profile-details -->
                </div>
                <div class="col-md-3" data-scroll-reveal="enter from the right after .5s">
                    <div class="profile-details section-box">
                        <h2 class="title">Contact Info</h2>
                        <address>
                            <ul class="address-line">
                                <li class="fa-map-marker"><?php echo $aboutData[0][3] ?></li>
                                <li class="fa-phone"><?php echo $aboutData[0][4] ?></li>
                                <li class="fa-envelope"><a href="mailto:nguyencaothiem@gmail.com"><?php echo $aboutData[0][5] ?></a></li>
                            </ul>
                        </address>
                        <!-- /.contact-info -->
                    </div>
                    <!-- /.profile-details -->
                </div>
            </div>
        </div>
        <!-- /.about-container -->
    </section>
    <!-- /#about -->
    <section id="skills" class="default-section" data-scroll-reveal="enter from the bottom over .5s">
        <div class="section-heading">
            <h2 class="section-title">SKILLS</h2>
        </div>
        <!-- /.section-heading -->
        <div class="container">
            <div class="skills-container">
                <div class="col-md-4" data-scroll-reveal="enter from the left after .5s">
                    <div class="section-box">
                        <h2 class="box-title">Programming languages</h2>
                        <ul>
                            <?php
                            foreach ($programingLanguageDatas as $programingLanguageData) {
                            ?>
                                <li><?php echo $programingLanguageData[2] ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                        <h2 class="box-title">Frameworks &amp; platforms</h2>
                        <ul>
                            <?php
                            foreach ($fwDatas as $fwData) {
                            ?>
                                <li><?php echo $fwData[2] ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4" data-scroll-reveal="enter from the right after .5s">
                    <div class="section-box">
                        <h2 class="box-title">Database</h2>
                        <ul>
                            <?php
                            foreach ($dbDatas as $dbData) {
                            ?>
                                <li><?php echo $dbData[2] ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                        <h2 class="box-title">Version Control</h2>
                        <ul>
                            <?php
                            foreach ($vsDatas as $vsData) {
                            ?>
                                <li><?php echo $vsData[2] ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                        <h2 class="box-title">IDE</h2>
                        <ul>
                            <?php
                            foreach ($ideDatas as $ideData) {
                            ?>
                                <li><?php echo $ideData[2] ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4" data-scroll-reveal="enter from the right after .5s">
                    <div class="section-box">
                        <h2 class="box-title">Foreign Language</h2>
                        <ul>
                            <?php
                            foreach ($flDatas as $flData) {
                            ?>
                                <li><?php echo $flData[2] ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                        <h2 class="box-title">Knowledge</h2>
                        <ul>
                            <?php
                            foreach ($klDatas as $klDatas) {
                            ?>
                                <li><?php echo $klDatas[2] ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- /.skills-container -->
            </div>
        </div>
    </section>
    <!-- /#skills -->
    <section id="experiences" class="default-section" data-scroll-reveal="enter from the bottom over .5s">
        <div class="section-heading">
            <h2 class="section-title">Experiences</h2>
        </div>
        <!-- /.section-heading -->
        <div class="container">
            <div class="experiences-container">
                <div class="experience-items">
                    <?php
                    foreach ($expDatas as $expData) {
                    ?>
                        <div class="experience-item" data-scroll-reveal="enter from the bottom over .5s">
                            <div class="name-designation" data-scroll-reveal="enter from the left after .5s">
                                <h3 class="designation"><?php echo $expData[1] ?></h3>
                                <p class="name-of-org"><?php echo $expData[2] ?></p>
                            </div>
                            <!-- /.name-designation -->
                            <div class="stay-time <?php if ($expData[0] % 2 == 0) {
                                                        echo "light-violet";
                                                    } else {
                                                        echo "light-green";
                                                    }; ?>">
                                <p>
                                    <?php echo $expData[3] ?>
                                    <br> -<br>
                                    <?php echo $expData[4] ?>
                                </p>
                            </div>
                            <!-- /.stay-time -->
                            <div class="comments" data-scroll-reveal="enter from the right after .5s">
                                <ul>
                                    <li><span class="bold">Project</span>:<?php echo $expData[5] ?></li>
                                    <li><span class="bold">Project Description</span>:
                                        <?php echo $expData[6] ?></li>
                                    <li><span class="bold">Team Size</span>: <?php echo $expData[7] ?></li>
                                    <li><span class="bold">Responsiblities</span>: <?php echo $expData[8] ?></li>
                                    <li><span class="bold">Accomplishments</span>: <?php echo $expData[9] ?></li>
                                    <li><span class="bold">Technologies</span>: <?php echo $expData[10] ?></li>
                                </ul>
                            </div>
                            <!-- /.comments -->
                        </div>
                    <?php
                    }
                    ?>
                    <!-- /.experience-item -->
                    <div class="experience-item" data-scroll-reveal="enter from the bottom over .5s">
                        <div class="name-designation" data-scroll-reveal="enter from the left after .5s">
                            <h3 class="designation">Pet Projects</h3>
                            <p class="name-of-org"></p>
                        </div>
                        <!-- /.name-designation -->
                        <div class="stay-time light-violet">
                            <p>
                                <br> All the time
                            </p>
                        </div>
                        <!-- /.stay-time -->
                        <div class="comments" data-scroll-reveal="enter from the right after .5s">
                            <p>In my free time, I work on some pet projects: <a href="https://github.com/ThiemJson">https://github.com/ThiemJson</a></p>
                            <ul>
                                <?php
                                foreach ($petDatas as $petData) {
                                ?>
                                    <li><a href="https://github.com/ThiemJson" class="bold"><?php echo $petData[1] ?></a>: <?php echo $petData[2] ?> <b>(<?php echo $petData[3] ?>)</b>
                                        - <a href="https://github.com/ThiemJson" target="_blank">Github</a>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <!-- /.comments -->
                    </div>
                    <!-- /.experience-item -->
                    <!-- /.experience-item -->
                </div>
                <!-- /.experience-items -->
            </div>
            <!-- /.experiences-container -->
        </div>
    </section>
    <!-- /#experiences -->
    <section id="education" class="default-section" data-scroll-reveal="enter from the bottom over .5s">
        <div class="section-heading">
            <h2 class="section-title">Education</h2>
        </div>
        <!-- /.section-heading -->
        <div class="container">
            <div class="education-container">
                <div class="education-items">
                    <div class="col-md-12" data-scroll-reveal="enter from the top after .5s">
                        <?php
                        foreach ($eduDatas as $eduData) {
                        ?>
                            <div class="education-item">
                                <div class="edu-time light-blue">
                                    <p><?php echo $eduData[1] ?>
                                        <br> -
                                        <br> <?php echo $eduData[2] ?>
                                    </p>
                                </div>
                                <!-- /.edu-time -->
                                <div class="edu-title">
                                    <p class="edu-session"><?php echo $eduData[4] ?></p>
                                    <p class="edu-inst"><?php echo $eduData[3] ?></p>
                                </div>
                                <!-- /.edu-title -->
                                <div class="edu-comments">
                                    <ul>
                                        <li><?php echo $eduData[5] ?></li>
                                    </ul>
                                </div>
                                <!-- /.edu-comments -->
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <!-- /.education-items -->
            </div>
            <!-- /.education-container -->
        </div>
        <!-- /.container -->
    </section>
    <script defer="defer" async="async" src="index_files/dist.js"></script>




</body>

</html>

<?php
    session_unset();
?>