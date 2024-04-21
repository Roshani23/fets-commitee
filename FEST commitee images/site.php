<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FETS Committee site</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="style7.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>

<body>
    <header class="header">
        <nav>
            <a href="college1.html"><img src="C:\Users\sourabh\Desktop\FEST commitee images\fets.jpeg" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li class="link"><a href="#home">HOME</a></li>
                    <li class="link"><a href="#aboutus">ABOUT US</a></li>
                    <li class="link"><a href="#events">EVENTS</a></li>
                    <li class="link"><a href="#faculty">FACULTY</a></li>
                    <li class="link"><a href="#team">TEAM</a></li>
                    <li class="link"><a href="#contactus">CONTACT US</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box" id="home">
            <h1>Forum For Electronic and Telecommunication Student <br> (2023-24)</h1>
            <p>Making website is now one of the easiest things in the world. You just need to learn HTML, CSS, <br>
                JavaScript and you are good to go.</p>
        </div>
    </header>
    <hr>
    <br>
    <section class="aboutus" id="aboutus">
        <div class="row">
            <div class="aboutus-col">
                <h3>About us</h3>
                <p><b>Electronic Students Association also known as ESA is now known as "FESTS".</b>
                    The Forum for Electronic and Telecommunication Students is a dynamic community fostering collaboration,
                    innovation, and learning
                    among students in electronics and telecommunications. It's an inclusive platform uniting students from diverse
                    academic
                    backgrounds to exchange ideas, share knowledge, and explore emerging trends. Through workshops, seminars, and
                    hands-on projects,
                    members gain theoretical understanding and practical experience in system design. It also facilitates
                    networking with industry professionals,
                    researchers, and
                    peers, offering opportunities for internships, research collaborations, and career growth.
                </p>
            </div>
            <div class="aboutus-col">
                <img src="C:\Users\sourabh\Desktop\FEST commitee images\teacher2.jpeg" width="200px" height="300px" alt="">
            </div>
        </div>
    </section>
    <hr>
    <br>
    <!-- Rest of your HTML content goes here -->
    <!-- Remember to save this file with a .php extension -->

    <!-- Your PHP code can be added wherever necessary within the HTML structure -->
    
    <?php
    // Your PHP code goes here
    // For example:
    $eventName = "Teacher's Day";
    $eventDescription = "The Forum of Electronics and Telecommunication (FETS) at Sardar Patel Institute of Technology held a special celebration for Teacher’s Day on September 5th, 2023. This event was dedicated to all the teachers in the Electronics and Telecommunication (EXTC) department. Professors were given tokens of appreciation, like mementos, to show how much they mean to us and to acknowledge their significance in shaping our lives.";
    ?>

    <section class="events" id="events">

        <h1>Our Events</h1>
        <p> Immerse yourself in a whirlwind of excitement at our upcoming event! Join us for an unforgettable experience
            filled with entertainment, networking, and inspiration. From captivating speakers to interactive workshops,
            there's something for everyone. Mark your calendars and
            get ready to make memories that will last a lifetime.
            Don't miss out on this incredible opportunity to connect, learn, and grow. See you there!</p>
        <div class="row">
            <div class="events-col">
                <h3><?php echo $eventName; ?></h3>
                <p><?php echo $eventDescription; ?></p>
                <button id="showInfoButton1" onclick="showInfo('teacher')">Show Image and Information</button>
                <br>
            </div>
            <!-- Add more event sections here -->
        </div>
    </section>
    <!-- Continue adding the rest of your HTML content -->

    <!-- Rest of the sections -->

    <!-- Previous Events Section -->
    <section class="events">
        <h1>Our Previous Events</h1>
        <div class="row">
            <!-- Event 1 -->
            <div class="events-col">
                <h3>InnovationCup'23</h3>
                <p>The Innovation Cup promotes social entrepreneurship, encouraging participants to develop innovative solutions for social issues like poverty, inequality, and environmental degradation. It aligns with the institute's values of fostering innovative and socially responsible engineers. Through the event, students apply their skills to create hardware solutions addressing real-world problems, aiming to uplift marginalized communities.</p>
                <!-- Add image -->
            </div>

            <!-- Event 2 -->
            <div class="events-col">
                <h3>Techno Hunt 2022</h3>
                <p>The Electronics and Telecommunication Students Association (ESA) organized "Techno-Hunt 2022," a puzzle-based electronics event in collaboration with AICTE and SPICES. Students formed teams of two to four members to compete. The event comprised three phases: assembling a jumbled circuit, identifying components, and simulating the circuit. Questions were allocated via a lucky draw and included tasks like assembling circuits, identifying components, and simulating circuits using NI Multisim. The event culminated in a quiz on the Moodle platform.</p>
                <!-- Add image -->
            </div>

            <!-- Event 3 -->
            <div class="events-col">
                <h3>Techno Roast Battle 2021</h3>
                <p>ESA organized the Techno Roast Battle, a lively and entertaining event that provided students with a platform to showcase their wit and humor while also delving into technical topics. Participants engaged in friendly banter and humorous exchanges centered around various aspects of technology and engineering. The event fostered a fun and engaging atmosphere, allowing participants to demonstrate their creativity and quick thinking while enjoying the camaraderie of their peers.</p>
                <!-- Add image -->
            </div>
        </div>
    </section>

    <!-- Faculty Section -->
    <section class="faculty" id="faculty">
        <h1>Our Faculty</h1>
        <div class="row">
            <!-- Faculty Member 1 -->
            <div class="faculty-col">
                <!-- Add faculty member information -->
            </div>

            <!-- Faculty Member 2 -->
            <div class="faculty-col">
                <!-- Add faculty member information -->
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team" id="team">
        <h1>Our Team</h1>
        <br>
        <div class="slideshow-container">
            <!-- Slides for team members -->
            <div class="mySlides fade rounded">
                <!-- Add team member information -->
            </div>
            <!-- Add more team member slides here -->
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </section>

    <!-- Contact Us Section -->
    <section class="cta" id="contactus">
        <div class="container">
            <h1 class="title">Contact Us</h1>
            <div class="address">
                <h3><i class="fas fa-map-marker-alt"></i> Address<br> 🏠</h3>
                <p class="addr">
                    Sardar Patel Institute Of Technology,<br>
                    Bhavan's Campus, Munshi Nagar,<br>
                    Andheri (West), Mumbai-400 058
                </p>
            </div>
            <div class="contact">
                <h3><i class="fas fa-phone-alt"></i> Contact</h3>
                <p> Mayuresh Pitale 📞-9820856016</p>
                <p>Aditi Ramugade 📞-7045742545</p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <section class="footer">
        <div class="container">
            <div class="social-icons">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>
            <p class="copyright">&copy; FEST SPIT 2024 All rights reserved</p>
            <p class="developer">Developed By: Roshani Patel</p>
        </div>
    </section>

    <!-- JavaScript Section -->
    <script>
       <!-- JavaScript Section -->
<script>
    // Your JavaScript code goes here
    var navLinks = document.getElementById("navLinks");
    function showMenu() {
        navLinks.style.right = "0";
    }
    function hideMenu() {
        navLinks.style.right = "-200px";
    }

    // JavaScript for slideshow functionality
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 3000); // Change image every 3 seconds
    }
    function showInfo(eventType) {
        let url = "";
        switch (eventType) {
            case "teacher":
                url = "teacher_info.html";
                break;
            case "microcontroller":
                url = "microcontroller_info.html";
                break;
            case "alumina":
                url = "alumina_info.html";
                break;
            default:
                url = "404.html";
        }
        window.location.href = url;
    }

    // Slideshow functionality
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>

</body>

</html>
