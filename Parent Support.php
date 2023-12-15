<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Support</title>
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

        .support-form {
            width: 300px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0px 0px 10px 0px #00000033;
        }

        .support-form input[type="text"],
        .support-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
        }

        .support-form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: #fff;
            cursor: pointer;
        }

        .support-form button:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <?php
    // Include the PHP functions file
    include 'parent Support.php';

    // Check if the form is submitted for adding support
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addSupport'])) {
        $title = $_POST["title"];
        $content = $_POST["content"];

        // Validate input
        if (empty($title) || empty($content)) {
            echo "<p class='error-message'>Both title and content are required.</p>";
        } else {
            if (addParentSupport($title, $content)) {
                echo "<p style='color: green;'>Support added successfully!</p>";
            } else {
                echo "<p class='error-message'>Error adding support.</p>";
            }
        }
    }

    // Check if the form is submitted for deleting support
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteSupport'])) {
        $supportID = $_POST["supportID"];

        // Validate input
        if (empty($supportID)) {
            echo "<p class='error-message'>Support ID is required for deletion.</p>";
        } else {
            if (deleteParentSupport($supportID)) {
                echo "<p style='color: green;'>Support deleted successfully!</p>";
            } else {
                echo "<p class='error-message'>Error deleting support.</p>";
            }
        }
    }
    ?>

    <div class="support-form">
        <h2>Add Parent Support</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="title" placeholder="Title" required>
            <textarea name="content" placeholder="Content" rows="4" required></textarea>
            <button type="submit" name="addSupport">Add Support</button>
        </form>

        <h2>Delete Parent Support</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="supportID" placeholder="Support ID" required>
            <button type="submit" name="deleteSupport">Delete Support</button>
        </form>
    </div>
</body>

</html>
