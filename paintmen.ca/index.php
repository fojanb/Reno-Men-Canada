<!DOCTYPE html>
<html lang="en">

<head>
    <title>Paint Men</title>

    <meta charset="utf-8" />
    <meta name="description" content="At Paint Men we are ready to help with any new build, remodeling and renovation project, for both residential and commercial clients; from a simple painting job to larger decorating and renovating projects. Our expert staff will make your dreams a reality." />
    <meta name="keywords" content="drainage, drains, interior painting, exterior painting, damp proofing, waterproofing, coating, construction, carpentry, renomen, drainmen, renovations, painting, paintmen, paint men, painting, renovations, Greater Vancouver Region, GVRD, Metro Vancouver, Anmore, Belcarra, Bowen Island, Burnaby, Coquitlam, Delta, Langley City, Langley District, Lions Bay, Maple Ridge, New Westminster, North Vancouver City, North Vancouver District, Pitt Meadows, Port Coquitlam, Port Moody, Richmond, Surrey, Vancouver, West Vancouver, White Rock, Fraser Valley, Abbotsford, Chilliwack, Harrison Hot Springs, Hope, Kent, Mission, Squamish, Whistler, Capital Region, CRD, Victoria, Oak Bay, Saanich, Esquimalt, View Royal, the West Shore and Western Communities, Langford, Colwood, Metchosin, Sooke, Malahat, Shawnigan Lake, Mill Bay, as well as the Saanich Peninsula, Central Saanich, Sidney, North Saanich, Salt Spring Island, Gulf Islands" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/paintmen.css">
    <link rel="icon" type="image/png" href="resources/images/PaintmenLogoSm.png" />

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="wrapper">
    <!-- Header -->
        <header id="header" class="alt">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <span class="logo desktop"><img src="resources/images/PaintmenLogoReg.png" alt="Paint Men, Let's Paint!" /></span>
                    <p class="slogan"> What's your favourite colour? </p>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="callNow">Call Now For A Free Estimate!</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="tel:2504125698" class="skel-layers-ignoreHref callLink"><i id="callIcon1" class="fa fa-phone fa-2x fa-inverse"></i>250 412 5698</A>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="tel:6048009801" class="skel-layers-ignoreHref callLink"><span><i id="callIcon2" class="fa fa-phone fa-2x"></i></span>604 800 9801</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

    <!-- Nav -->
        <nav id="nav">
            <div class="desktop">
                <div class="navLogoContainer">
                    <a class="logo" href="#header"><img src="resources/images/PaintmenLogoReg.png" height="52" alt="Paint Men, Let's Paint!" /></a>
                </div>
                <div class="navListContainer">
                    <ul class="fullHeight">
                        <li class="fullHeight"><a href="#aboutUs">About Us</a></li>
                        <li class="fullHeight"><a href="#services">Services</a></li>
                        <li class="fullHeight"><a href="#quote">Quote</a></li>
                        <li class="fullHeight"><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="navLinkContainer">
                    <a href="tel:18883834242" class="skel-layers-ignoreHref"><span class="icon fa fa-phone">1 888 383 4242</span></a>
                </div>
            </div>
        </nav>
       <nav id="navMobile">
            <div class="mobile">
                <div class="btn-group">
                    <div class="mobileNavButton">
                        <button type="button" class="btn" data-toggle="collapse" data-target="#navList">
                            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                        </button>
                    </div>
                    <ul id="navList" class="collapse">
                        <li><a href="#aboutUs">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#clients">Clients</a></li>
                        <li><a href="#quote">Quote</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    <!-- Main -->
        <div id="main">
            <!-- Intro -->
            <section class="one">
                <?php include("views/about.php"); ?>
            </section>

            <!-- Services -->
            <section id="services" class="two">
                <?php include("views/our_services.php"); ?>
            </section>

            <!-- Clients -->
            <section id="clients" class="three mobile">
                <?php include("views/our_clients.php"); ?>
            </section>

            <!-- Quote -->
            <section id="quote" class="four">
                <?php include("views/quote.php"); ?>
            </section>

            <!-- Contact -->
            <section id="contact" class="five">
                <?php include("views/contact.php"); ?>
            </section>

        </div>

    <!-- Footer -->
        <footer id="footer">
            <div class="textContainer">
                <a href="https://www.facebook.com/Brutus-Approved-130079744147131/?hc_ref=PAGES_TIMELINE"><img id="brutusApproved" src="resources/images/brutus_approved.png" /></a>
                <p> Copyright &copy; 2016 Paint Men Canada Incorporated</p>
                <a href="http://html5up.net">HTML5 UP Design</a>
            </div>
        </footer>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-filestyle.js"> </script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.scrollex.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/main.js"></script>
		<?php include_once("analyticstracking.php") ?>
</body>

</html>
