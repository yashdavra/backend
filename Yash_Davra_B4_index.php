<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .school-logo {
            height: auto;
            width: 100px;
        }

        h1 {
            color: #FFD700;
            margin: 0;
        }

        .login-buttons {
            display: flex;
            gap: 10px;
        }

        .navbar {
            background-color: #007bff;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar .dropdown {
            display: inline-block;
        }

        .navbar .dropdown-content {
            display: none;
            position: absolute;
            background-color: #add8e6; /* Light Blue */
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            text-align: left; /* Align text to the left */
        }

        .navbar .dropdown:hover .dropdown-content {
            display: block;
            animation: fadeIn 0.3s ease-out;
        }

        .navbar .dropdown-content ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .navbar .dropdown-content li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media screen and (max-width: 768px) {
            .navbar a {
                float: none;
                display: block;
                text-align: left;
            }

            .navbar .dropdown {
                display: block;
            }

            .navbar .dropdown-content {
                position: static;
                display: none;
                overflow: hidden;
            }

            .navbar .dropdown:hover .dropdown-content {
                display: block;
            }
        }

        button {
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .content {
            background-color: lightblue;
            background-image: url('photo2.jpg'); /* Add the path to your background image */
            background-size: cover;
            background-position: center;
            padding: 20px;
        }

        .main-content {
            margin-top: 20px;
        }

        .read-more {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .read-more:hover {
            background-color: #0056b3;
        }
        .typewriter {
            overflow: hidden; /* Ensures the text is not revealed until the animation */
            white-space: nowrap; /* Keeps the text on a single line */
            letter-spacing: 0.1em; /* Adjust the spacing between characters */
            animation: typing 3.5s steps(40, end); /* Adjust the animation duration and steps */
        }

        @keyframes typing {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }
        .footer {
            background color: lightblue;
            color: #fff;
            padding: 20px 0;
        }

        .footer-content {
            display: flex;
            justify-content: space-around;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-section {
            flex: 1;
            text-align: center;
            padding: 20px;
        }

        .footer-section h3 {
            margin-bottom: 10px;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <style>
    .pupil-login {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .pupil-login:hover {
        background-color: #0056b3;
    }
</style>
<style>
    .parent-login {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .parent-login:hover {
        background-color: #0056b3;
    }

</style>

    <title>St Alphonsus Primary School</title>
</head>

<body>
    <div class="header">
        <div class="logo">
            <img class="school-logo" src="logp.png" alt="School Logo">
            <h1>St Alphonsus Primary School</h1>
        </div>

        <div class="login-buttons">
        <a href="pupil.php" class="pupil-login">Pupil Login</a>
        <a href="parents.php" class="parent-login">Parent Login</a>
        </div>
    </div>

    <nav class="navbar">
        <a href="#">Home</a>
        <div class="dropdown">
            <a href="#">About Us</a>
            <div class="dropdown-content">
                <ul>
                    <li><a href="#">Welcome</a></li>
                    <li><a href="#">Vacancies</a></li>
                    <li><a href="#">School Map</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Policies</a></li>
                </ul>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">School Info</a>
            <div class="dropdown-content">
                <ul>
                    <li><a href="#">Term Dates</a></li>
                    <li><a href="#">Admissions</a></li>
                    <li><a href="#">Attendance</a></li>
                    <li><a href="#">Staff</a></li>
                    <li><a href="#">British Values</a></li>
                </ul>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">News & Events</a>
            <div class="dropdown-content">
                <ul>
                    <li><a href="#">Social Events</a></li>
                    <li><a href="#">Calendar</a></li>
                    <li><a href="#">Latest News</a></li>
                    <li><a href="#">Announcements</a></li>
                    <li><a href="#">School Gallery</a></li>
                </ul>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Curriculum</a>
            <div class="dropdown-content">
                <ul>
                    <li><a href="#">Maths</a></li>
                    <li><a href="#">Science</a></li>
                    <li><a href="#">Art & Design</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Music</a></li>
                </ul>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Parents</a>
            <div class="dropdown-content">
                <ul>
                <a href="parent Support.php" class="link-button">Parent Support</a>
                    <li><a href="#">Parent Login</a></li>
                    <li><a href="#">School Meals</a></li>
                    <li><a href="#">Pupil Login</a></li>
                    <li><a href="#">Uniform</a></li>
                </ul>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Classes</a>
            <div class="dropdown-content">
                <ul>
                    <li><a href="#">Reception Year</a></li>
                    <li><a href="#">Year One</a></li>
                    <li><a href="#">Year Two</a></li>
                    <li><a href="#">Year Three</a></li>
                    <li><a href="#">Year Four</a></li>
                    <li><a href="#">Year Five</a></li>
                    <li><a href="#">Year Six</a></li>
                </ul>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Students</a>
            <div class="dropdown-content">
                <ul>
                    <li><a href="#">Class Pages</a></li>
                    <li><a href="#">eSafety</a></li>
                    <a href="students.php">Student Admission</a>
                    <li><a href="#">Student Support</a></li>
                    <li><a href="#">Parent View</a></li>
                </ul>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Teachers</a>
            <div class="dropdown-content">
                <ul>
                    <li><a href="#">Class View</a></li>
                    <li><a href="#">Vacancies</a></li>
                    <li><a href="#">Meet the Staff</a></li>
                    <li><a href="#">Teacher Info</a></li>
                    <li><a href="#">Exams and Results</a></li>
                </ul>
            </div>
        </div>
        <button onclick="location.href='contact us.php'">Contact Us</button>

    </nav>

    <div class="content">
        <!-- Add the typewriter class to the paragraphs -->
        <div class="typewriter">
            <h2>Welcome to St. Alphonsus Primary School</h2>
            <div class="intro">
                <p>In Collyhurst, Manchester!</p>
            </div>

            <div class="main-content">
                <p>Your main content goes here...</p>
                <p class="typewriter">As the Head Teacher, it is with great enthusiasm that I present my vision for St. Alphonsus. Our mission is embodied in our motto, "Aiming High to Achieve Success!" This motto is the cornerstone of our dedication to ensuring success for all of our students.</p>
                <p class="typewriter">As you wander through our virtual hallways, you will witness pockets of engaging learning in every classroom and corner of our digital school, both indoors and outdoors.</p>
                <button class="read-more">Read More</button>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-content">
            <!-- Policies -->
            <div class="footer-section">
                <h3>Our Policies</h3>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                </ul>
            </div>

            <!-- Location -->
            <div class="footer-section">
                <h3>Our Location</h3>
                <p>St Alphonsus Primary School<br>
                    Collyhurst, Manchester<br>
                    United Kingdom</p>
            </div>

            <!-- Contact Information -->
            <div class="footer-section">
                <h3>Contact Us</h3>
                <ul>
                    <li><i class="fa fa-phone"></i> +1 123 456 7890</li>
                    <li><i class="fa fa-envelope"></i> info@stalphonsus.school</li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-bottom">
            <p>&copy; 2023 St Alphonsus Primary School. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
