<?php
#deny access to main page if user not logged in 
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: jetBirdLogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Main Page</title>
        <link rel="stylesheet" href="jetbirdMainPage.css">
    </head>
    <body>
        <header>
            <nav>
                <div class="navlogoJB">
                    <a href="jetBirdMain.php">
                        <img src="images/coffee_logo.png" alt="JetBird Logo" />
                        <h2>JetBird</h2>
                    </a>
                </div>
                <input type="checkbox" id="click" />
                <label for="click">
                    <i class="menu_btnJB bx bx-menu"></i>
                    <i class="close_btn bx bx-x"></i>
                </label>
                <ul>
                    <li><a href="jetBirdLogout.php">Logout</a></li>
                    <li><a href="#booking">Booking</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#why">Why Us</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </header>
        <!-- Main Section -->
        <section class="homeJB">
            <div class="containerJB">
                <div class="homecontainerJB">
                    <div class="textSectionJB">
                        <h2>Fly with us!</h2>
                        <h3>Discover new worlds with JetBird</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <div class="mainSectionBttnJB">
                            <button class="BttnJB">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section -->
        <section class="servicesJB" id="service">
            <h2 class="containerTitleJB">Our Services</h2>
            <div class="containerJB">
                <div class="serviceContainerJB">
                    <div class="servicesItemsJB">
                        <img src="imagesJB/c1.jpg" alt="Hot Beverages" />
                        <div class="servicesTextJB">
                            <h3>America</h3>
                            <p>
                                Wide range of Steaming hot coffees to make you fresh and light.
                            </p>
                        </div>
                    </div>
                    <div class="servicesItemsJB">
                        <img src="imagesJB/c2.jpg" alt="Cold Beverages" />
                        <div class="servicesTextJB">
                            <h3>United Kingdom</h3>
                            <p>
                                Creamy and frothy cold coffee to make you feel cool from inside.
                            </p>
                        </div>
                    </div>
                    <div class="servicesItemsJB">
                        <img src="imagesJB/c3.jpg" alt="Refreshment" />
                        <div class="servicesTextJB">
                            <h3>France</h3>
                            <p>Fruit and icy refreshing drink to make you feel good.</p>
                        </div>
                    </div>
                    <div class="servicesItemsJB">
                        <img src="imagesJB/c4.jpg" alt="Special Combos" />
                        <div class="servicesTextJB">
                            <h3>Germany</h3>
                            <p>
                                Now it's really easy to chose your favourite eating and drinking
                                combinations.
                            </p>
                        </div>
                    </div>
                    <div class="servicesItemsJB">
                        <img
                            src="imagesJB/c5.jpg"
                            alt="Burger & French Fries"
                            />
                        <div class="servicesTextJB">
                            <h3>Italy</h3>
                            <p>Yummy! Quick bites to satisfy your small size hunger.</p>
                        </div>
                    </div>
                    <div class="servicesItemsJB">
                        <img src="imagesJB/c6.jpg" alt="Desserts" />
                        <div class="servicesTextJB">
                            <h3>Japan</h3>
                            <p>
                                This for sure would satiate your palate and take you on a
                                culinary treat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Booking Section -->
        <section class="bookJB" id="booking">
            <div class="containerJB">
                <div class="bookingContainerJB">
                    <div class="textSectionJB">
                        <h2 class="containerTitleJB">Booking</h2>
                        <p>
                            We at Coffee House, located in Berndorf, Germany, are one of the
                            favorite hangouts for coffee and conversations. Our goal is to
                            offer the best experience to our guests, ensuring an authentic
                            coffee drinking experience in a warm, friendly, and relaxed
                            environment. We aim to bring a sense of relaxation to the city
                            with our cozy space, complete with comfortable couches to lounge
                            in while you enjoy your coffee.
                        </p>
                    </div>
                </div>
        </section>
        <!-- Why Us Section -->
        <section class="aboutJB" id="why">
            <h2 class="containerTitleJB">Why Us?</h2>
            <div class="containerJB">
                <div class="aboutContainerJB">
                    <div class="aboutItemsJB">
                        <img src="imagesJB/2.jpg" alt="Delicious" />
                        <div class="aboutTextJB">
                            <h3>Delicious Food</h3>
                            <p>
                                With a lavish spread of finger licking food, we serve to satisfy
                                your palate and take you on a culinary treat.
                            </p>
                        </div>
                    </div>
                    <div class="aboutItemsJB">
                        <img src="imagesJB/2.jpg" alt="Pleasant" />
                        <div class="aboutTextJB">
                            <h3>Pleasant Ambience</h3>
                            <p>
                                We seek to serve all our guests with the perfect dining
                                experience. We provide perfect ambbience to cherish special
                                moments.
                            </p>
                        </div>
                    </div>
                    <div class="aboutItemsJB">
                        <img src="imagesJB/2.jpg" alt="Hospitality" />
                        <div class="aboutTextJB">
                            <h3>Hospitality</h3>
                            <p>
                                Our staff members are happy to help. We go the extra mile to
                                make you happy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery Section -->
        <section class="galleryJB" id="gallery">
            <h2 class="containerTitleJB">Gallery</h2>
            <div class="containerJB">
                <div class="galleryContainerJB">
                    <div class="galleryItemsJB">
                        <img src="imagesJB/2.jpg" alt="Gallery Image" />
                    </div>
                    <div class="galleryItemsJB">
                        <img src="imagesJB/2.jpg" alt="Gallery Image" />
                    </div>
                    <div class="galleryItemsJB">
                        <img src="imagesJB/2.jpg" alt="Gallery Image" />
                    </div>
                    <div class="galleryItemsJB">
                        <img src="imagesJB/2.jpg" alt="Gallery Image" />
                    </div>
                    <div class="galleryItemsJB">
                        <img src="imagesJB/2.jpg" alt="Gallery Image" />
                    </div>
                    <div class="galleryItemsJB">
                        <img src="imagesJB/2.jpg" alt="Gallery Image" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section -->
        <section class="contactJB" id="contact">
            <h2 class="containerTitleJB">Contact Us</h2>
            <div class="containerJB">
                <div class="contactContainerJB">
                    <div class="contactFormJB">
                        <form action="#">
                            <div class="fieldJB">
                                <label for="Name">Full Name</label>
                                <input type="text" id="Name" placeholder="Your Name" required />
                            </div>
                            <div class="fieldJB">
                                <label for="email">Your Email</label>
                                <input
                                    type="text"
                                    id="email"
                                    placeholder="Your Email"
                                    required
                                    />
                            </div>
                            <div class="fieldJB">
                                <label for="number">Your Number</label>
                                <input
                                    type="number"
                                    id="number"
                                    placeholder="Your Contact Number"
                                    required
                                    />
                            </div>
                            <div class="fieldJB">
                                <label for="textarea">Your Message</label>
                                <textarea
                                    name="textarea"
                                    id="textarea"
                                    placeholder="Message"
                                    ></textarea>
                            </div>
                            <button class="BttnJB" id="submit">Submit</button>
                        </form>
                    </div>
                    <div class="contactTextJB">
                        <div class="contactItemsJB">
                            <i class="bx bx-current-location"></i>
                            <div class="contact_details">
                                <h3>Our Location</h3>
                                <p>Dublin, Ireland</p>
                            </div>
                        </div>
                        <div class="contactItemsJB">
                            <i class="bx bxs-envelope"></i>
                            <div class="contact_details">
                                <h3>General Enquries</h3>
                                <p>jetbird@gmail.com</p>
                            </div>
                        </div>
                        <div class="contactItemsJB">
                            <i class="bx bxs-phone-call"></i>
                            <div class="contact_details">
                                <h3>Call Us</h3>
                                <p>+353 838105465</p>
                            </div>
                        </div>
                        <div class="contactItemsJB">
                            <i class="bx bxs-time-five"></i>
                            <div class="contact_details">
                                <h3>Our Timing</h3>
                                <p>Mon-Sun : 10:00 AM - 7:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer Section -->
        <footer>
            <div class="containerJB">
                <div class="footerSectionJB">
                    <div class="footerLogoJB">
                        <a href="index.html">
                            <img src="images/coffee_logo.png" alt="Jetbird logo" />
                            <h2>JetBird</h2>
                        </a>
                    </div>
                    <div class="linksJB">
                        <h3>Useful Links</h3>
                        <ul>
                            <li><a href="#booking">Booking</a></li>
                            <li><a href="#service">Services</a></li>
                            <li><a href="#why">Why Us</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="contactUsJB">
                        <h3>Contact</h3>
                        <ul>
                            <li>
                                <i class="bx bx-current-location"></i>
                                <span>Location : Dublin, Ireland</span>
                            </li>
                            <li>
                                <i class="bx bxs-phone-call"></i> <span>Phone : +353 838105465</span>
                            </li>
                            <li>
                                <i class="bx bxs-time-five"></i>
                                <span>Mon-Sun : 10:00 AM - 7:00 PM</span>
                            </li>
                        </ul>
                    </div>
                    <div class="followUsJB">
                        <h3>Follow</h3>
                        <i class="bx bxl-facebook-circle"></i>
                        <i class="bx bxl-twitter"></i>
                        <i class="bx bxl-instagram-alt"></i>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>