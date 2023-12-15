<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Admission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
            font-size: 24px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        button {
            padding: 8px 12px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button.delete {
            background-color: #f44336;
        }

        button.update {
            background-color: #008CBA;
        }

        button.present, button.absent {
            background-color: #ff9800;
        }

        button:hover {
            background-color: #45a049;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h1>Student Admission</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Admission Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- PHP code to fetch and display student admission data goes here -->
            <!-- Example row (replace with actual data from the database) -->
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>2023-01-01</td>
                <td>Present</td>
                <td>
                    <button class="present" onclick="markStatus('present', 1)">Present</button>
                    <button class="absent" onclick="markStatus('absent', 1)">Absent</button>
                    <button class="update" onclick="openModal(1)">Update</button>
                    <button class="delete" onclick="deleteStudent(1)">Delete</button>
                    <button onclick="viewInfo(1)">View Info</button>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Modal for Update -->
    <div id="updateModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <!-- Form for update goes here -->
            <form>
                <!-- Update form elements go here -->
                <button type="submit">Update</button>
            </form>
        </div>
    </div>

    <script>
        function markStatus(status, studentId) {
            // JavaScript function to mark student present/absent (AJAX request to update in the database)
            alert('Marking student ' + status + ': ' + studentId);
        }

        function deleteStudent(studentId) {
            // JavaScript function to delete student (AJAX request to delete from the database)
            alert('Deleting student: ' + studentId);
        }

        function openModal(studentId) {
            // JavaScript function to open the update modal
            document.getElementById('updateModal').style.display = 'block';
        }

        function closeModal() {
            // JavaScript function to close the update modal
            document.getElementById('updateModal').style.display = 'none';
        }

        function viewInfo(studentId) {
            // JavaScript function to view student info (AJAX request to fetch from the database)
            alert('Viewing info for student: ' + studentId);
        }
    </script>

</body>

</html>
