<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Form </form></title>
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
        <h2>Event Form</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Event name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
			<label for="name">Event description:</label>
                <input type="text" id="desc" name="desc" required>
                </div>
            <div class="form-group">
            <label for="mname">Event Manager Name:</label>
                <input type="text" id="mname" name="mname" required>
                </div>
                <div class="form-group">
                    <label for="contactno">Manager Contact No:</label>
                    <input type="phone" id="contactno" name="contactno" required>
                </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>