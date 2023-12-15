<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
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

        button.mark-attendance {
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

    <h1>Teacher Dashboard</h1>

    <!-- View Student Data -->
    <h2>View Student Data</h2>
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
            <!-- PHP code to fetch and display student data goes here -->
            <!-- Example row (replace with actual data from the database) -->
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>2023-01-01</td>
                <td>Present</td>
                <td>
                    <button onclick="viewInfo(1)">View Info</button>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Mark Attendance and Enter Data -->
    <h2>Mark Attendance and Enter Data</h2>
    <div>
        <button class="mark-attendance" onclick="markAttendance(1)">Mark Attendance</button>
        <button onclick="openDataEntryModal()">Enter Data</button>
    </div>

    <!-- Modal for Data Entry -->
    <div id="dataEntryModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeDataEntryModal()">&times;</span>
            <!-- Form for data entry goes here -->
            <form>
                <!-- Data entry form elements go here -->
                <button type="submit">Submit Data</button>
            </form>
        </div>
    </div>

    <script>
        function viewInfo(studentId) {
            // JavaScript function to view student info (AJAX request to fetch from the database)
            alert('Viewing info for student: ' + studentId);
        }

        function markAttendance(studentId) {
            // JavaScript function to mark student attendance (AJAX request to update in the database)
            alert('Marking attendance for student: ' + studentId);
        }

        function openDataEntryModal() {
            // JavaScript function to open the data entry modal
            document.getElementById('dataEntryModal').style.display = 'block';
        }

        function closeDataEntryModal() {
            // JavaScript function to close the data entry modal
            document.getElementById('dataEntryModal').style.display = 'none';
        }
    </script>

</body>

</html>
