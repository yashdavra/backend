<?php
include_once 'db.php';

// Function to add a new class
function addClass($className) {
    global $conn;
    $className = $conn->real_escape_string($className);
    $sql = "INSERT INTO classes (class_name) VALUES ('$className')";
    $conn->query($sql);
}

// Function to update a class
function updateClass($classId, $className) {
    global $conn;
    $classId = (int)$classId;
    $className = $conn->real_escape_string($className);
    $sql = "UPDATE classes SET class_name='$className' WHERE id=$classId";
    $conn->query($sql);
}

// Function to delete a class
function deleteClass($classId) {
    global $conn;
    $classId = (int)$classId;
    $sql = "DELETE FROM classes WHERE id=$classId";
    $conn->query($sql);
}

// Handle form submission to add, update, or delete a class
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_class'])) {
        $className = $_POST['class_name'];
        addClass($className);
    } elseif (isset($_POST['update_class'])) {
        $classId = $_POST['update_class_id'];
        $className = $_POST['update_class_name'];
        updateClass($classId, $className);
    } elseif (isset($_POST['delete_class'])) {
        $classId = $_POST['delete_class_id'];
        deleteClass($classId);
    }
    // Redirect to prevent form resubmission on page refresh
    header('Location: classes.php');
    exit();
}

// Fetch classes from the database
$classes = getClasses();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class Management</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    h1, h2 {
      color: #333;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin-bottom: 10px;
    }

    form {
      margin-top: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
    }

    button {
      background-color: #4caf50;
      color: white;
      padding: 10px 15px;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<h1>Class Management</h1>

<!-- Display classes -->
<ul>
  <?php foreach ($classes as $class) : ?>
    <li>
      <?= htmlspecialchars($class['class_name']) ?>
      <form action="classes.php" method="post" style="display: inline;">
        <input type="hidden" name="update_class_id" value="<?= $class['id'] ?>">
        <input type="text" name="update_class_name" placeholder="New Name" required>
        <button type="submit" name="update_class">Update</button>
      </form>
      <form action="classes.php" method="post" style="display: inline;">
        <input type="hidden" name="delete_class_id" value="<?= $class['id'] ?>">
        <button type="submit" name="delete_class">Delete</button>
      </form>
    </li>
  <?php endforeach; ?>
</ul>

<!-- Display form to add a new class -->
<h2>Add New Class</h2>
<form action="classes.php" method="post">
  <label for="class_name">Class Name:</label>
  <input type="text" name="class_name" required>
  <button type="submit" name="add_class">Add Class</button>
</form>

</body>
</html>
