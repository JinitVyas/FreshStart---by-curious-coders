<?php
    include 'partials/header.php';
?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px #888888;
            width: 400px;
            margin: 0 auto;
            margin-top: 50px;
        }
        
        h2 {
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Course Form</h2>
        <form action="partials/formhandling.php" method="post">
            <div class="form-group">
                <label for="name">Course Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="course_type">Course Type:</label>
                <select id="course_type" name="course_type" required>
                    <option value="B">Bachelor's</option>
                    <option value="M">Master's</option>
                    <option value="S">Specialization</option>
                </select>
            </div>

            <div class="form-group">
				<label for="course_duration">Course Duration:</label>
                <input type="number" id="course_duration" name="course_duration"  required>
            </div>
            <div class="form-group">
                <input type="submit" name="course" value="Submit">
            </div>
        </form>
    </div>
<?php
    include 'partials/footer.php';
?>