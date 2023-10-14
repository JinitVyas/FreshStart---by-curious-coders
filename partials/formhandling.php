<?php
    include 'dbconnect.php';

    if(isset($_POST['course']))
    {
        $name = $_POST['name'];
        $type = $_POST['course_type'];
        $durtion = $_POST['course_duration'];

        $res = mysqli_query($conn, "Insert into course (`co_name`,`co_type`,`co_duration`) values('$name','$type','$durtion')");
        if($res)
        {
            header("Location:/tiktek/index.php?form=true");
            exit();
        }
        else
        {
            echo $e = mysqli_error($conn);
            header("Location:/tiktek/index.php?form=false&error=$e");
            exit();
        }
    }

    // if(isset($_POST['club']))
	// {
	// 	$name = $_POST['name'];
	// 	$desc = $_POST['desc'];

    //     $target_dir = "uploads/";
    //     $target_file = $target_dir . basename($_FILES["file"]["name"]);

    //     $filename = basename($_FILES["file"]["name"]);

    //     if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) 
    //     {
    //         // File was uploaded successfully; you can store $target_file in the database
    
    //         // Prepare and execute SQL query to insert data into the database
    //         if($req = mysqli_query($conn, "INSERT INTO club (c_name, c_desc, c_photo) VALUES ($name, $desc, $filename)"))
    //         {
    //             header("Location:/tiktek/index.php?form=true");
    //             exit();
    //         }
    //     } 
    //     else 
    //     {
    //         echo $e=mysqli_error($conn);
    //         // header("Location:/tiktek/index.php?form=false&error=$e");
    //         // exit();
    //     }
	// }

    if (isset($_POST['club'])) 
    {
        $name = $_POST['name'];
        $desc = $_POST['desc'];
    
        // File Upload Handling
        // $target_dir = __DIR__ . '\\uploads\\';
        $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/tiktek/uploads/";
        $filename = basename($_FILES["file"]["name"]);
    
        $target_file = $target_dir . $filename;

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            // File was uploaded successfully; you can store $filename in the database
    
            // Prepare and execute SQL query to insert data into the database using prepared statements
            $stmt = $conn->prepare("INSERT INTO club (c_name, c_desc, c_photo) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $desc, $filename);
    
            if ($stmt->execute())
            {
                header("Location: /tiktek/index.php?form=true");
                exit();
            } 
            else 
            {
                // Handle the case where the SQL query failed
                $error_message = $stmt->error;
                header("Location: /tiktek/index.php?form=false&error=$error_message");
                exit();
            }
    
            // Close the prepared statement
            $stmt->close();
        } 
        else
        {
            // Handle the case where file upload failed
            echo $upload_error = $_FILES["file"]["error"];
            // header("Location: /tiktek/index.php?form=false&error=$upload_error");
            // exit();
        }
    }
    

    if(isset($_POST['activity']))
    {
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $mname = $_POST['mname'];
        $contactno = $_POST['contactno'];
        
        $res =mysqli_query($conn,"insert into activity (`a_name`,`a_desc`,`a_manager_name`,`a_manager_contact`) values('$name','$desc','$mname','$contactno');");
        if($res)
        {
            header("location:/tiktek/index.php?form=true");
            exit();
        }
        else{
            echo $e = mysqli_error($conn);
            // header("location:/tiktek/index.php?form=false&error=$e");
            // exit();
        }
    }
?>