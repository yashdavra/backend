<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "saps";

$link = mysqli_connect($host, $username, $password, $dbname);

if (!$link) {
    die("Could not connect: " . mysqli_connect_error());
}

$minUsernameLength = 5;
$minPasswordLength = 8;
$maxPasswordLength = 12;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($link, $_POST["username"]);
    $password = mysqli_real_escape_string($link, $_POST["password"]);

    $errors = [];

    if (strlen($username) < $minUsernameLength) {
        $errors[] = "Username must be at least $minUsernameLength characters.";
    }

    if (strlen($password) < $minPasswordLength || strlen($password) > $maxPasswordLength || !preg_match("/\d/", $password)) {
        $errors[] = "Password must be between $minPasswordLength and $maxPasswordLength characters and contain at least one number.";
    }

    if (empty($errors)) {
        // Perform your login logic
        // For demonstration purposes, I'm just echoing a success message
        echo "<p style='color: green;'>Login successful!</p>";

        // Insert login information into the database
        $insertQuery = "INSERT INTO parent_logins (username, login_time) VALUES ('$username', NOW())";
        mysqli_query($link, $insertQuery);
    } else {
        foreach ($errors as $error) {
            echo "<p class='error-message'>$error</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
        }

        .login-form {
            width: 300px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0px 0px 10px 0px #00000033;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: #fff;
            cursor: pointer;
        }

        .login-form button:hover {
            background-color: #0056b3;
        }

        .login-form .register {
            display: block;
            text-align: center;
            margin-top: 10px;
        }

        .error-message {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="login-form">
        <h2>Parent Login</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <a href="#" class="register">Not registered? Create an account</a>
    </div>
</body>

</html>
