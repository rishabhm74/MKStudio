<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MK Studio | Home</title>
    <link rel="stylesheet" href="static/style.css">
</head>
<body>

    <!-- primaryNavbar starts -->

    <nav class="primaryNavbar"  id="primaryNavbar">
        <li class="mobileMenuIcon">
            <img src="/static/icons/menu.svg">
        </li>
        <li>
            <a href="#" class="navTitle">
                MK<span>studio</span>
            </a>
        </li>
        <li class="packageControl">
            <img src="/static/icons/package.svg">
        </li>
    </nav>

    <!-- primaryNavbar ends -->

    <!-- secondaryNavbar starts -->

    <nav class="secondaryNavbar">
        <ul>
            <li>
                <a href="#primaryNavbar" class="scroll">Home</a>
            </li>
            <li>
                <a href="#aboutSection" class="scroll">About Us</a>
            </li>
            <li>
                <a href="#portfolioSection" class="scroll">Portfolio</a>
            </li>
            <!-- <li>
                <a href="#" class="scroll">Contact Us</a>
            </li> -->
            <li>
                <a href="#bookingContainer" class="scroll">Make Booking</a>
            </li>
        </ul>
    </nav>

    <!-- secondaryNavbar ends -->

    <!-- heroSection starts -->

    <div class="heroSection" id="heroSection">
        <div class="innnerHeroSection" id="innnerHeroSection">
            
            
        </div>
    </div>


    <!-- heroSection ends -->

    <!-- servicesBarContainer starts -->

    <div class="servicesBarContainer">
        <li>
            <a href="#portfolioSection" class="scroll">Photography</a>
        </li>
        <li>
            <a href="#portfolioSection" class="scroll">Videography</a>
        </li>
    </div>

    <!-- servicesBarContainer ends -->

    <!-- aboutSection starts -->

    <div class="aboutSection" id="aboutSection">

        <div class="mainAboutSection">

            <div class="mainAboutSectionLeft">
                <div class="mainAboutSectionHeader">
                    About Us
                </div>
                <div class="mainAboutSectionSecHeader">
                    We are a studio based in Ahmedabad, specialized in photography of functions, weddings and socal events.
                </div>
            </div>

            <div class="mainAboutSectionRight">

                <div class="cardContainer">
                    <iframe class="aboutMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29376.78541297349!2d72.54511710802389!3d23.020167198661078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1602070375119!5m2!1sen!2sin" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

            </div>
        </div>

    </div>
    
    <!-- aboutSection ends -->


    <!-- portfolioSection starts -->

    <div class="portfolioSection" id="portfolioSection">

        <div class="exploreHeader">
            Explore
        </div>

        <div class="portfolioItemsHolder">
            <div class="portfolioRow1">
                <div class="leftR1" loading="lazy">

                </div>
                <div class="rightR2" loading="lazy">

                </div>
            </div>

            <div class="portfolioRow2">
                <div class="leftR1" loading="lazy">

                </div>
                <div class="rightR2" loading="lazy">

                </div>
            </div>

            <div class="portfolioRow3">
                <div class="leftR1" loading="lazy">

                </div>
                <div class="rightR2" loading="lazy">

                </div>
            </div>

            <div class="portfolioRow4">
                <div class="leftR4" loading="lazy">

                </div>
                <div class="rightR4" loading="lazy">

                </div>
            </div>
            
        </div>

    </div>

    <!-- portfolioSection ends -->


    <!-- bookingContainer starts -->

    <div class="bookingContainer" id="bookingContainer">
        <div class="leftbookingSection">
            <div class="bookUsContainer">
                Book Me
            </div>
            <div class="subBookUsContainer">
                Fill in your details and we will contact you.
            </div>
        </div>

        <div class="rightBookingSection">

            <!-- <form action="contact.php" method="POST" class="bookingForm"> -->
            <form method="POST" class="bookingForm">

                <input type="text" name="persons_name" placeholder="Full Name" required>

                <input type="text" name="persons_number" placeholder="Contact Number"  required>

                <input type="email" name="persons_email" placeholder="Email Address"  required>

                <input type="date" name="persons_chosen_date" class="dateInput" placeholder="Booking Date" required>
                
                <input type="text" name="persons_package" placeholder="Selected Package" id="package_input" required>

                <button type="submit" class="bookMeButton">
                    Book Me!
                </button>
            </form>

        </div>

    </div>

    <!-- bookingContainer ends -->


    <!-- footer starts -->

    <footer class="footer">

        <div class="footerTitle">
            <a href="#" class="navTitle">
                MK<span>studio</span>
            </a>
        </div>

        <div class="navAddress">
            A20, Samay Complex, Sardar Vallabh Bhai Nagar, <br> Ahmedabad &nbsp; - &nbsp; (+91) 9874563212
        </div>

        <div class="horizontal"></div>

        <div class="footerSocial">
            <li>
                <a href="#">
                    <img src="/static/icons/facebookBlack.svg">
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="/static/icons/instagram.svg">
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="/static/icons/twitter.svg">
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="/static/icons/youtubeBlack.svg">
                </a>
            </li>
        </div>

    </footer>


    <!-- footer ends -->

    <!-- overlayContainer starts -->
    <div>

    </div>

    <div class="overlayContainer">

        <div class="packageContainer">
            <div class="closePackageControl">
                <img src="/static/icons/cross.svg" alt="">
            </div>
            <div class="packagesHeader">
                Packages
            </div>

            <div class="packagesListContainer">

                <li>
                    Basic
                </li>
                <li>
                    Standard
                </li>
                <li>
                    Bronze
                </li>
                <li>
                    Silver
                </li>
                <li>
                    Gold
                </li>
                <li>
                    Platinum
                </li>
            </div>
        </div>

    </div>

    <!-- overlayContainer ends -->

    <!-- mailNotification starts -->

    <div class="mailNotification">
        
    </div>

    <!-- mailNotification ends -->




    <script src="static/jquery.js" type="text/javascript"></script>
    <script src="static/script.js"></script>
</body>
</html>