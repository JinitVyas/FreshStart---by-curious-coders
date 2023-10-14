<?php
    include "partials/header.php";
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
<body>
    <div class="container">
        <h2>Club Form</h2>
        <form action="partials/formhandling.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Club Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
			<label for="name">Club Desc:</label><br>
                <textarea id="desc" name="desc" required></textarea>
                </div>
            <div class="form-group">
                <label for="file">Club Photo:</label>
                <input type="file" id="file" accept="image/*" name="file">
                
            </div>
            <div class="form-group">
                <input type="submit" name="club" value="Submit">
            </div>
        </form>