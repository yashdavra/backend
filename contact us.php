<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - St Alphonsus Primary School</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background: linear-gradient(to right, #2980B9, #6DD5FA);
            color: #fff;
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

        .contact-details {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 50px;
            background-color: #3498db;
            color: #fff;
            text-align: center;
        }

        .contact-section {
            flex: 1;
            margin: 20px;
        }

        .contact-icon {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .contact-section h2 {
            margin-bottom: 20px;
        }

        .contact-section p {
            line-height: 1.6;
        }

        .footer {
            background: linear-gradient(to right, #2980B9, #6DD5FA);
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
</head>

<body>

    <div class="header">
        <div class="logo">
            <img class="school-logo" src="logp.png" alt="School Logo">
            <h1>St Alphonsus Primary School</h1>
        </div>
    </div>

    <div class="contact-details">
        <div class="contact-section">
            <i class="fas fa-map-marker-alt contact-icon"></i>
            <h2>Our Location</h2>
            <p>St Alphonsus Primary School<br>
                Collyhurst, Manchester<br>
                United Kingdom</p>
        </div>

        <div class="contact-section">
            <i class="fas fa-phone contact-icon"></i>
            <h2>Contact Us</h2>
            <p>Phone: +1 123 456 7890<br>
                Email: info@stalphonsus.school</p>
        </div>
    </div>

    <footer class="footer">
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
