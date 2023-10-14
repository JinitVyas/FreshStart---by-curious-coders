<?php
    if(isset($_POST['Register']))
    {

        // initializing error messages to empty string 
        $ErrorMsg = "";

        include 'dbConnect.php';
            $fname      = $_POST['u_fname'];
            $lname      = $_POST['u_lname'];
            $phone      = $_POST['contact_number'];
            $email      = $_POST['u_email'];
            $dob        = $_POST['u_dob'];
            $gender     = $_POST['u_gender'];
            $password   = $_POST['password'];
            $cpassword  = $_POST['confirm_password'];
        
        function simplifyText($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        function GoWithError($Error)
        {
            header("Location:/tiktek/index.php?signupSuccess=false&error=$Error");
            exit();
        }
// Validation starts
        if (!empty($fname))
        {
            $fname = simplifyText($fname);
            if (!preg_match ("/^[a-zA-z]*$/", $fname))
            {
                $ErrorMsg = "Only alphabets are allowed for first name";
                GoWithError($ErrorMsg);
            }
        }

        if (!empty($lname))
        {
            $lname = simplifyText($lname);
            if (!preg_match ("/^[a-zA-z]*$/", $lname))
            {
                $ErrorMsg = "Only alphabets are allowed for last name";
                GoWithError($ErrorMsg);
            }
        }

        if (!empty($phone))
        {
            $phone = simplifyText($phone);
            if (is_numeric($phone))
            {  
                if (strlen($phone) != 10) {
                    $ErrorMsg = "Enter a valid phone number please.";
                    GoWithError($ErrorMsg);
                }
            }
            else{
                $ErrorMsg = "Only numeric phone number is allowed.";
                GoWithError($ErrorMsg);
            }
        }

        if (!empty($email))
        {
            $email = simplifyText($email);
            if (!preg_match ("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email))
            {
                $ErrorMsg = "Enter a valid email Address please";
                GoWithError($ErrorMsg);
            }
        }

        if (!empty($password) && !empty($cpassword))
        {
            if ($password != $cpassword) {
                $ErrorMsg = "Password and Confirm Password don't match";
                GoWithError($ErrorMsg);
            }
        }

// Validation ends

        if ($ErrorMsg == "")
        {
            $url = "St-ci.json";
            $content = file_get_contents($url);
            $data = json_decode($content,true);        
            $state_name = $data["states"][$state-1]["name"];

            $Address = $houseNO . "|||" . $society . "|||" . $landmark . "|||" . $areaName . "|||" . $city . "|||" . $state_name;
            $hash = password_hash($password,PASSWORD_DEFAULT);
            
            $SignupQry = "INSERT INTO `user` (`u_fname`, `u_lname`, `u_email`, `u_gender`, `u_dob`, `u_contact`, `u_password`, `reg_date`) VALUES ('$fname', '$lname', '$email', '$gender', '$dob', '$phone', '$hash', CURRENT_TIMESTAMP);";
            $SignupQryResult = mysqli_query($conn, $SignupQry);
            if($SignupQryResult)
            {
                header("Location:/tiktek/index.php?signupSuccess=true");
                exit();
            }
            else
            {
                echo $Error = "Technical issue";
                echo mysqli_error($conn);
                header("Location:/tiktek/index.php?signupSuccess=false&error=$Error");
                exit();
            }

        }
        else {
            GoWithError($ErrorMsg);
        }
    }
    exit();
?>